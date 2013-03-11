<div class="nav-fixed-topright" style="visibility: hidden">
    <ul class="nav nav-user-menu">
        <li class="user-sub-menu-container">
            <a href="javascript:;">
                <i class="user-icon"></i><span class="nav-user-selection"><?=$config['umenu']['companyname'];?></span><i class="icon-menu-arrow"></i>
            </a>
            <? if(is_array($config['umenu']['menuitems'])): ?>
            <ul class="nav user-sub-menu">
                <? foreach($config['umenu']['menuitems'] as $val): ?>
                <li>
                    <a href="javascript:;"><?=$val?></a>
                </li>
                <? endforeach; ?>
            </ul>
            <? endif; ?>
        </li>
        <li>
            <a href="javascript:;">
                <i class="icon-photon mail"></i>
            </a>
        </li>
        <li>
            <a href="javascript:;">
                <i class="icon-photon comment_alt2_stroke"></i>
                <div class="notification-count">12</div>
            </a>
        </li>
    </ul>
</div>

<script>
    $(function(){
        setTimeout(function(){
            $('.nav-fixed-topright').removeAttr('style');
        }, 300);
        
        $(window).scroll(function(){
            if($('.breadcrumb-container').length){
                var scrollState = $(window).scrollTop();
                if (scrollState > 0) $('.nav-fixed-topright').addClass('nav-released');
                else $('.nav-fixed-topright').removeClass('nav-released')
            }
        });
        
        $('.user-sub-menu-container').on('click', function(){
            $(this).toggleClass('active-user-menu');
        });
    });
</script>

