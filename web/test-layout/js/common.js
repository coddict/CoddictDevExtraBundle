$().ready(readyFunction);
$(window).resize(resizeFunction);
var widgetsLoaded = [];


function resizeFunction(){
    setSidebarHeight();
    setBlankWidgets();
    resizeEnd();

    // Main & User Menu
    $('.active-menu').removeClass('active-menu');
    $('.nav-active').removeClass('nav-active');
    $('.mobMMExpanded').removeClass('mobMMExpanded');
}

function readyFunction(){
    setSidebarHeight();
    mainMenuFunction();
    setBlankWidgets(true);
    jstreeHover();


    // INIT BREADCRUMBS
    
    $('.xbreadcrumbs').xBreadcrumbs();

    
    // TOOLTIP HOVER FOR .bootstrap-tooltip ELEMENTS
    
    $('.bootstrap-tooltip').tooltip();
    
    
    // PNOTIFY DEFAULT OPTIONS
    
    $.pnotify.defaults.delay -= 4500;
    $.pnotify.defaults.history = false;
    
    
    // JSTREE DUMMY THEME (REQUIRED TO AVOID CHANGING THE PLUGIN TO IGNORE THE ORIGINAL CSS SINCE LESS IS USED)
    $.jstree._themes = "css/plugins/jstree/";
    
    
    // CUSTOM SCROLLBAR FOR SIDE PANEL
    
    $(".sidebarMenuHolder").mCustomScrollbar({
        scrollButtons:{
            enable:true
        },
        advanced:{
            updateOnBrowserResize: true,
            updateOnContentResize:true
        }
    });
    
    
    // SCROLLBAR SHADOWS
    
    $(".Jstree_shadow_top").prependTo(".sidebarMenuHolder");
    $(".Jstree_shadow_bottom").appendTo(".sidebarMenuHolder");
    
    
    // PANEL STATE CONTROL
    
    $('.panel-slider-arrow').on('click', function(){
        $('.panel, .main-content').toggleClass('retracted');

        if ($('.panel').is('.retracted')){
            $.cookie('jsTreeMenu', 'retracted', {
                expires: 7,
                path: '/'
            });
        }
        else {
            $.cookie('jsTreeMenu', 'extended', {
                expires: 7,
                path: '/'
            });
        }

        if($.cookie('jsTreeMenuNotification')!='true') {
            $.cookie('jsTreeMenuNotification', 'true', {
                expires: 7,
                path: '/'
            });
            $.pnotify({
                title: 'Slide Menu Remembers It\'s State',
                type: 'info',
                text: 'Slide menu will remain closed when you browse other pages, until you open it again.'
            });
        }
    });

    // APPLY THEME COLOR
    if ($.cookie('themeColor') == 'light') {
        $('body').addClass('light-version');
    }
}


// MAIN MENU FUNCTION

function mainMenuFunction () {
    setTimeout(function(){
        $('.nav-fixed-left').removeAttr('style');
    }, 300);
    $('.nav-side-menu > li').on('mouseleave', function(){
        if ($('.nav-fixed-left').css('top') != '0px') return;
        var $subMenu = $(this).find('ul');
        $subMenu.fadeOut(100);
        setTimeout(function(){
            $subMenu.removeAttr('style');
        },200);
    });
    $('.nav-side-menu > li').on('click', function(){
        //console.log('test');
        var $touchedMenu = $(this).find('ul');
        var $subMenu = $('.sub-nav ul').not($touchedMenu);
        $('.nav-side-menu > li').not(this).removeClass('nav-active');
        $(this).toggleClass('nav-active');
        if ($('.nav-fixed-left').css('top') == '0px') $subMenu.fadeOut(100);
        setTimeout(function(){
            $subMenu.removeAttr('style');
        }, 200);
    });
    $('.btn-mobile-menus .btn').on('click', function(){
        if ($(this).is('.active-menu')) $('.active-menu').removeClass('active-menu');
        else{
            $('.active-menu').removeClass('active-menu');
            $(this).addClass('active-menu');
        }
        if ($('.btn-main-menu').is('.active-menu')) {
            $('.mobMMExpanded').removeClass('mobMMExpanded');
            $('.nav-fixed-left').addClass('mobMMExpanded');
        }
        else if ($('.btn-user-menu').is('.active-menu')) {
            $('.mobMMExpanded').removeClass('mobMMExpanded');
            $('.nav-fixed-topright').addClass('mobMMExpanded');
        }
        else $('.mobMMExpanded').removeClass('mobMMExpanded');
    });
}


// SETS SIDEBAR HEIGHT BASED ON TOTAL WINDOW HEIGHT

function setSidebarHeight(){
    if( $('.panel-slider-center .panel-slider-arrow').css('position') != 'absolute'){
        $win_hei = $(window).height();
        $(".sidebarMenuHolder").height($win_hei - 185);
    }
    else{
        $(".sidebarMenuHolder").height(300);
    }
}


// BALANCE NUMBER OF DASHBOARD WIDGETS

var lastWidgetPerRow;
function setBlankWidgets(onReady){
    if (!$('body').is('.body-dashboard')) return;
    var widgetPerRow;

    widgetPerRow = parseInt($('.dashboard-widget-group').css('background-position'), 10);
    if (widgetPerRow == lastWidgetPerRow) return;

    $('.blank-widget').remove();
    var currentWidgetCount = $('.widget-holder').length;
    var finalWidgetCount = Math.ceil(currentWidgetCount / widgetPerRow) * widgetPerRow;

    for (var i = finalWidgetCount - currentWidgetCount; i > 0; i--) {
        $.get('./library/widgets/blank-widget.php', createBlankWidget);
    }
    lastWidgetPerRow = widgetPerRow;
}


// GENERATES BLANK WIDGET

function createBlankWidget (data) {
    var html =  $(data).appendTo('#photon_widgets');
}


// RESIZABLE TEXT FIELDS FUNCTION

function autoGrowField(f, max) {
    /* Default max height */
    max = (typeof max == 'undefined') ? 1000 : max;
    /* Don't let it grow over the max height */
    if (f.scrollHeight > max) {
        /* Add the scrollbar back and bail */
        if (f.style.overflowY != 'scroll') {
            f.style.overflowY = 'scroll';
        }
        return;
    }
    /* Make sure element does not have scroll bar to prevent jumpy-ness */
    if (f.style.overflowY != 'hidden') {
        f.style.overflowY = 'hidden';
    }
    /* Now adjust the height */
    var scrollH = f.scrollHeight;
    // console.log(scrollH);
    if( scrollH > f.style.height.replace(/[^0-9]/g,'') ){
        f.style.height = scrollH+20+'px';
    }
}

function jstreeHover(){
    $('.overflowing').removeClass('overflowing');
    if( $('.panel-slider-center .panel-slider-arrow').css('position') != 'absolute'){
        setTimeout(function() {
            $('.jstree li').each(function () {
                if (isTextOverflowing($(this))){
                    var title = $('>a', this).text();
                    $(this).tooltip({
                        title: title,
                        placement: 'right',
                        container: '.panel'
                    });
                }
            });
        }, 500);
    }
}

function showColorChanger(){

}

// CHECK IF JSTREE LINK TEXT IS OVERFLOWING (NOTE THAT CLONE AND ORIGINAL ELEMENT MUST HAVE THE SAME TYPOGRAFY FOR THIS TO WORK, USE CSS)

function isTextOverflowing($elem) {
    returnVal = false;
    if($elem.get(0).offsetWidth < $elem.get(0).scrollWidth) {
        returnVal = true;
        $elem.addClass('overflowing');
    }
    return returnVal;
}


// ON RESIZE END FUNCTION

var isResizing;
function resizeEnd () {
    clearTimeout(isResizing);
    isResizing = setTimeout(function() {
        // RESIZE END LOGIC BELOW:
        jstreeHover();
    }, 300);
}

// FLIP WIDGET

function flipit (elem) {
    $(elem).parents('.widget-holder').toggleClass('flip-it');
}