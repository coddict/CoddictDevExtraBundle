<? include 'library/functions.php'; ?>
<? $filename = basename(__FILE__, ".php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?= $config[$filename]['pagetitle']; ?></title>
        <?php include 'library/common/head.php'; ?>
        <?php include 'library/common/javascript.php'; ?>

        <script>
            $().ready(function() {

                var isDragActive = false;
                // Quicklaunch Widget
                $( "#sortable" ).sortable({
                    cancel: '#sortable li:last-child',
                    start: function(event, ui) {
                        isDragActive = true;
                        $('.dashboard-quick-launch li img').tooltip('hide');
                    },
                    stop: function(event, ui) {
                        isDragActive = false;
                    },
                    containment: 'parent',
                    tolerance: 'pointer'
                });

                // Make widgets sortable
                $( "#photon_widgets" ).sortable({
                    cancel: '.blank-widget, .flip-it',
                    placeholder: 'dashboard-widget-placeholder',
                    start: function(event, ui) {
                        isDragActive = true;
                        $('.widget-holder').addClass('noPerspective');
                        $('.dashboard-quick-launch li img').tooltip('hide');
                    },
                    stop: function(event, ui) {
                        isDragActive = false;
                        $('.widget-holder').removeClass('noPerspective');
                    },
                    tolerance: 'pointer'
                });


                $('.dashboard-quick-launch li img').not('.dashboard-quick-launch li:last-child').tooltip({
                    placement: 'top',
                    html: true,
                    trigger: 'manual',
                    title: '<a href="javascript:;"><span class="left">Edit</span></a><a href="javascript:;"><span class="right">Delete</span></a>'
                });


                var hoverTimeout;
                $('.dashboard-quick-launch li').hover(function () {
                    if (!$(this).find('.tooltip').length){
                        $activeQL = $(this);
                        clearTimeout(hoverTimeout);
                        hoverTimeout = setTimeout(function() {
                            if (isDragActive) return;
                            $activeQL.find('img').tooltip('show');
                        }, 1000);
                    }
                }, function () {
                    clearTimeout(hoverTimeout);
                    $('.dashboard-quick-launch li').find('img').tooltip('hide');
                });
                setTimeout(function(){
                    $.pnotify({
                        title: 'Drag & Drop',
                        type: 'info',
                        text: 'Reorder Widgets or Quicklaunch bar items by dragging & dropping them.'
                    });
                }, 2000);
                setTimeout(function(){
                    $.pnotify({
                        title: 'Widget Settings',
                        type: 'info',
                        text: 'Hover over widget, than click on a gear icon to set widget options.'
                    });
                }, 7000);
                var firstHover = true;
                $('.dashboard-quick-launch li').hover(function(){
                    if (firstHover) {
                        firstHover = false;
                        setTimeout(function(){
                            $.pnotify({
                                title: 'Edit Quicklaunch Icons',
                                type: 'info',
                                text: 'Hover over icon for more than one second to display editing options.'
                            });
                        }, 400);
                    }
                });
            });
        </script>
    </head>
    
    <body class="body-dashboard">

        <?php include 'library/common/main_menu.php';?>
        <?php include 'library/common/user_menu.php';?>
        <div class="container-fluid dashboard dashboard-title">
            <div class="row-fluid">
                <div class="span12">
                    <h1>
                        Dashboard
                    </h1>
                    <div class="btn-group">
                        <button type="button" class="btn btn-gear dropdown-toggle" data-toggle="dropdown"></button>
                        <ul class="dropdown-menu">
                          <li><a href="javascript:;">First Menu Item</a></li>
                          <li><a href="javascript:;">Second Menu Item</a></li>
                          <li><a href="javascript:;">Third Menu Item</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid dashboard dashboard-quick-launch">
             <div class="row-fluid">
                <div class="span12">
                    <ul id="sortable">
                        <li>
                            <img src="images/photon/icons/ql1@2x.png" alt="Quick Launch Icon"/>
                            <p>Shipments</p>
                        </li>
                        <li>
                            <img src="images/photon/icons/ql2@2x.png" alt="Quick Launch Icon"/>
                            <p>Statistics</p>
                        </li>
                        <li>
                            <img src="images/photon/icons/ql3@2x.png" alt="Quick Launch Icon"/>
                            <p>Users</p>
                        </li>
                        <li>
                            <img src="images/photon/icons/ql4@2x.png" alt="Quick Launch Icon"/>
                            <p>Squirel</p>
                        </li>
                        <li>
                            <img src="images/photon/icons/ql5@2x.png" alt="Quick Launch Icon"/>
                            <p>PSD Files</p>
                        </li>
                        <li class="add-ql">
                            <a href="#modal-add-quick-launch" data-toggle="modal">
                                <div class="add-quick-launch" data-toggle="modal" id="addql"></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container-fluid dashboard dashboard-widget-group">
             <div class="row-fluid">
                <div id="photon_widgets" class="span12 ui-sortable">
                    <?php include 'library/widgets/general-stats.php'; ?>
                    <?php include 'library/widgets/latest-users.php'; ?>
                    <?php include 'library/widgets/task-completion.php'; ?>
                    <?php include 'library/widgets/overall-earnings-graph.php'; ?>
                    <?php include 'library/widgets/overall-views-graph.php'; ?>
                    <?php include 'library/widgets/realtime-data-graph.php'; ?>
                    <?php // include 'library/widgets/countdown.php'; ?>
                    <?php include 'library/widgets/twitter.php'; ?>
                    <?php include 'library/widgets/qr-code-generation.php'; ?>
                    <?php //include 'library/widgets/clock.php'; ?>
                </div>
            </div>
        </div>

        <div class="dashboard-watermark"></div>

        <!--Modal Dialogs' HTML begin-->
        <div id="modal-add-quick-launch" class="modal hide fade">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3>Add Quick Launch Item</h3>
            </div>
            <div class="modal-body">
                <p>Select from system shortcuts below or <a href="#modal-add-quick-launch-custom" data-dismiss="modal" data-toggle="modal">create your custom shortcut »</a></p>
                <div class="control-group row-fluid">
                    <div class="span12">
                        <div class="controls">
                            <select multiple name="multiFilter" id="multiFilter">
                                <option value="Beige">Beige</option>
                                <option value="Black">Black</option>
                                <option value="Blue">Blue</option>
                                <option value="Bronze">Bronze</option>
                                <option value="Brown">Brown</option>
                                <option value="Gold">Gold</option>
                                <option value="Gray">Gray</option>
                                <option value="Green">Green</option>
                                <option value="Orange">Orange</option>
                                <option value="Pink">Pink</option>
                                <option value="Purple">Purple</option>
                                <option value="Red">Red</option>
                                <option value="Silver">Silver</option>
                                <option selected="" value="Turquoise">Turquoise</option>
                                <option value="White">White</option>
                                <option value="Yellow">Yellow</option>
                            </select>
                        </div>
                    </div>
                    <script>
                        $().ready(function(){
                            $("#multiFilter").select2();
                        });
                    </script>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:;" class="btn btn-primary" data-dismiss="modal">Add Selected</a>
                <a href="javascript:;" class="btn" data-dismiss="modal">Cancel</a>
            </div>
        </div>
        <div id="modal-add-quick-launch-custom" class="modal hide fade">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3>Create Quick Launch Item</h3>
            </div>
            <div class="modal-body">
                <div class="control-group row-fluid">
                    <div class="span3">
                        <label class="control-label" for="Shortcut_Label">Shortcut Label</label>
                    </div>
                    <div class="span9">
                        <div class="controls">
                            <input id="Shortcut_Label" type="text" placeholder="Enter the name of your shortcut" name="inputFieldPlaceholder" />
                        </div>
                    </div>
                </div>
                <div class="control-group row-fluid">
                    <div class="span3">
                        <label class="control-label" for="Shortcut_URL">Shortcut URL</label>
                    </div>
                    <div class="span9">
                        <div class="controls">
                            <input id="Shortcut_URL" type="text" placeholder="Enter the address of your shortcut" name="inputFieldPlaceholder" />
                        </div>
                    </div>
                </div>
                <div class="control-group row-fluid">
                    <div class="span3">
                        <label class="control-label">Upload Icon</label>
                    </div>
                    <div class="span9">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="input-append">
                                <div class="uneditable-input span3"><i class="icon-file fileupload-exists"></i> <span class="fileupload-preview">Upload Image</span></div><span class="btn btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span><input type="file" /></span><a href="javascript:;" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="alternative">Or select one of the predefined icons</p>
            </div>
            <div class="modal-body predefined-icons">
                <ul>
                    <li><img src="images/photon/icons/ql1@2x.png" alt="Predefined"></li>
                    <li><img src="images/photon/icons/ql2@2x.png" alt="Predefined"></li>
                    <li><img src="images/photon/icons/ql3@2x.png" alt="Predefined"></li>
                    <li><img src="images/photon/icons/ql4@2x.png" alt="Predefined"></li>
                    <li><img src="images/photon/icons/ql6@2x.png" alt="Predefined"></li>
                    <li><img src="images/photon/icons/ql7@2x.png" alt="Predefined"></li>
                    <li><img src="images/photon/icons/ql8@2x.png" alt="Predefined"></li>
                    <li><img src="images/photon/icons/ql9@2x.png" alt="Predefined"></li>
                    <li><img src="images/photon/icons/ql10@2x.png" alt="Predefined"></li>
                </ul>
            </div>

            <div class="modal-footer">
                <a href="javascript:;" class="btn btn-primary" data-dismiss="modal">Create Item</a>
                <a href="javascript:;" class="btn" data-dismiss="modal">Cancel</a>
            </div>
        </div>
        <!--Modal Dialogs' HTML end-->
    <?php include 'library/common/ga.php';?>
    </body>
</html>
