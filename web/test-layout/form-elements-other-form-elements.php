<?include 'library/functions.php';?>
<?$filename = basename(__FILE__, ".php");?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?=$config[$filename]['pagetitle'];?></title>
        <?php include 'library/common/head.php';?>
        <?php include 'library/common/javascript.php';?>

    </head>

    <body class="body-inner">
        <?include 'library/common/main_menu.php';?>
        <?include 'library/common/user_menu.php';?>
        <?include 'library/common/panel.php';?>
        <div class="main-content<?=($_COOKIE["jsTreeMenu"] == 'retracted' ? ' retracted' : '');?>">
            <?include 'library/common/breadcrumbs.php';?>
            <header>
                <i class="icon-big-notepad"></i>
                <h2><small><?=$config[$filename]['h2'];?></small></h2>
                <h3><small><?=$config[$filename]['h3'];?></small></h3>
            </header>
            <form class="form-horizontal">
                <div class="container-fluid">

                        <div class="form-legend" id="Checkboxes">Checkboxes</div>

                        <!--Checkboxes begin-->
                        <div class="control-group row-fluid">
                            <div class="span12">
                                <label class="checkbox">
                                    <input type="checkbox" class="uniformCheckbox" value="checkbox1">
                                    Option 1
                                </label>
                                <label class="checkbox">
                                    <input checked="checked" type="checkbox" class="uniformCheckbox" value="checkbox2">
                                    Option 2
                                </label>
                                <label class="checkbox">
                                    <input disabled="disabled" type="checkbox" class="uniformCheckbox" value="checkbox3">                                
                                    Option 3 (Disabled)
                                </label>
                                <label class="checkbox">
                                    <input checked="checked" disabled="disabled" type="checkbox" class="uniformCheckbox" value="checkbox4">
                                    Option 4 (Disabled & Checked)
                                </label>
                            </div>
                        </div>
                        <!--Checkboxes end-->

                    <script>
                        $().ready(function(){
                            $(".uniformCheckbox").uniform();
                        });            
                    </script>
                </div><!-- end container -->

                <div id="Radio_Buttons" class="container-fluid">

                        <div class="form-legend">Radio Buttons</div>

                        <!--Radio Buttons begin-->
                        <div class="control-group row-fluid">
                            <div class="span12 centered">
                                <label class="radio">
                                    <input type="radio" name="optionsRadios" class="uniformRadio" value="radio1">
                                    Option 1
                                </label>
                                <label class="radio">
                                    <input checked="checked" type="radio" name="optionsRadios" class="uniformRadio" value="radio2">
                                    Option 2
                                </label>
                                <label class="radio">
                                    <input disabled="disabled" type="radio" name="optionsRadios" class="uniformRadio" value="radio3">                                
                                    Option 3 (Disabled)
                                </label>
                                <label class="radio">
                                    <input checked="checked" disabled="disabled" type="radio" name="optionsRadiosDis" class="uniformRadio" value="radio4">
                                    Option 4 (Disabled & Checked)
                                </label>
                            </div>
                        </div>
                        <!--Radio Buttons end-->

                    <script>
                        $().ready(function(){
                            $(".uniformRadio").uniform({
                                radioClass: 'uniformRadio'
                            });
                            
                        });            
                    </script>
                </div><!-- end container -->

                <div class="container-fluid">

                        <div class="form-legend" id="Buttons">Buttons</div>

                        <!--Buttons begin-->
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <button type="button" class="btn btn-large ">Default</button>
                                <button type="button" class="btn btn-large btn-primary">Primary</button>
                                <button type="button" class="btn btn-large btn-info">Info</button>
                                <button type="button" class="btn btn-large btn-success">Success</button>
                                <button type="button" class="btn btn-large btn-warning">Warning</button>
                                <button type="button" class="btn btn-large btn-danger">Danger</button>
                                <button type="button" class="btn btn-large btn-inverse">Inverse</button>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <button type="button" class="btn">Default</button>
                                <button type="button" class="btn btn-primary">Primary</button>
                                <button type="button" class="btn btn-info">Info</button>
                                <button type="button" class="btn btn-success">Success</button>
                                <button type="button" class="btn btn-warning">Warning</button>
                                <button type="button" class="btn btn-danger">Danger</button>
                                <button type="button" class="btn btn-inverse">Inverse</button>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <button type="button" class="btn btn-mini ">Default</button>
                                <button type="button" class="btn btn-mini btn-primary">Primary</button>
                                <button type="button" class="btn btn-mini btn-info">Info</button>
                                <button type="button" class="btn btn-mini btn-success">Success</button>
                                <button type="button" class="btn btn-mini btn-warning">Warning</button>
                                <button type="button" class="btn btn-mini btn-danger">Danger</button>
                                <button type="button" class="btn btn-mini btn-inverse">Inverse</button>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <button type="button" disabled="disabled" class="btn">Default</button>
                                <button type="button" disabled="disabled" class="btn btn-primary">Primary</button>
                                <button type="button" disabled="disabled" class="btn btn-info">Info</button>
                                <button type="button" disabled="disabled" class="btn btn-success">Success</button>
                                <button type="button" disabled="disabled" class="btn btn-warning">Warning</button>
                                <button type="button" disabled="disabled" class="btn btn-danger">Danger</button>
                                <button type="button" disabled="disabled" class="btn btn-inverse">Inverse</button>
                            </div>
                        </div>
                        <!--Buttons end-->

                </div><!-- end container -->

                <div class="container-fluid">

                        <div class="form-legend" id="Button_Dropdown_Menus">Button Dropdown Menus</div>

                        <!--Buttons begin-->
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle btn-large" data-toggle="dropdown">Dropdown<span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="javascript:;">First Menu Item</a></li>
                                      <li><a href="javascript:;">Second Menu Item</a></li>
                                      <li><a href="javascript:;">Third Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Separated Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Another Separated Menu Item</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle btn-large btn-primary" data-toggle="dropdown">Dropdown<span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="javascript:;">First Menu Item</a></li>
                                      <li><a href="javascript:;">Second Menu Item</a></li>
                                      <li><a href="javascript:;">Third Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Separated Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Another Separated Menu Item</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle btn-large btn-info" data-toggle="dropdown">Dropdown<span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="javascript:;">First Menu Item</a></li>
                                      <li><a href="javascript:;">Second Menu Item</a></li>
                                      <li><a href="javascript:;">Third Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Separated Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Another Separated Menu Item</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle btn-large btn-success" data-toggle="dropdown">Dropdown<span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="javascript:;">First Menu Item</a></li>
                                      <li><a href="javascript:;">Second Menu Item</a></li>
                                      <li><a href="javascript:;">Third Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Separated Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Another Separated Menu Item</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle btn-large btn-warning" data-toggle="dropdown">Dropdown<span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="javascript:;">First Menu Item</a></li>
                                      <li><a href="javascript:;">Second Menu Item</a></li>
                                      <li><a href="javascript:;">Third Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Separated Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Another Separated Menu Item</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle btn-large btn-danger" data-toggle="dropdown">Dropdown<span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="javascript:;">First Menu Item</a></li>
                                      <li><a href="javascript:;">Second Menu Item</a></li>
                                      <li><a href="javascript:;">Third Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Separated Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Another Separated Menu Item</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle btn-large btn-inverse" data-toggle="dropdown">Dropdown<span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="javascript:;">First Menu Item</a></li>
                                      <li><a href="javascript:;">Second Menu Item</a></li>
                                      <li><a href="javascript:;">Third Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Separated Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Another Separated Menu Item</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Dropdown<span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="javascript:;">First Menu Item</a></li>
                                      <li><a href="javascript:;">Second Menu Item</a></li>
                                      <li><a href="javascript:;">Third Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Separated Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Another Separated Menu Item</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle btn-primary" data-toggle="dropdown">Dropdown<span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="javascript:;">First Menu Item</a></li>
                                      <li><a href="javascript:;">Second Menu Item</a></li>
                                      <li><a href="javascript:;">Third Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Separated Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Another Separated Menu Item</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle btn-info" data-toggle="dropdown">Dropdown<span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="javascript:;">First Menu Item</a></li>
                                      <li><a href="javascript:;">Second Menu Item</a></li>
                                      <li><a href="javascript:;">Third Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Separated Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Another Separated Menu Item</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle btn-success" data-toggle="dropdown">Dropdown<span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="javascript:;">First Menu Item</a></li>
                                      <li><a href="javascript:;">Second Menu Item</a></li>
                                      <li><a href="javascript:;">Third Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Separated Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Another Separated Menu Item</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle btn-warning" data-toggle="dropdown">Dropdown<span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="javascript:;">First Menu Item</a></li>
                                      <li><a href="javascript:;">Second Menu Item</a></li>
                                      <li><a href="javascript:;">Third Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Separated Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Another Separated Menu Item</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle btn-danger" data-toggle="dropdown">Dropdown<span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="javascript:;">First Menu Item</a></li>
                                      <li><a href="javascript:;">Second Menu Item</a></li>
                                      <li><a href="javascript:;">Third Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Separated Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Another Separated Menu Item</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle btn-inverse" data-toggle="dropdown">Dropdown<span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="javascript:;">First Menu Item</a></li>
                                      <li><a href="javascript:;">Second Menu Item</a></li>
                                      <li><a href="javascript:;">Third Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Separated Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Another Separated Menu Item</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle btn-mini" data-toggle="dropdown">Dropdown<span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="javascript:;">First Menu Item</a></li>
                                      <li><a href="javascript:;">Second Menu Item</a></li>
                                      <li><a href="javascript:;">Third Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Separated Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Another Separated Menu Item</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle btn-mini btn-primary" data-toggle="dropdown">Dropdown<span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="javascript:;">First Menu Item</a></li>
                                      <li><a href="javascript:;">Second Menu Item</a></li>
                                      <li><a href="javascript:;">Third Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Separated Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Another Separated Menu Item</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle btn-mini btn-info" data-toggle="dropdown">Dropdown<span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="javascript:;">First Menu Item</a></li>
                                      <li><a href="javascript:;">Second Menu Item</a></li>
                                      <li><a href="javascript:;">Third Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Separated Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Another Separated Menu Item</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle btn-mini btn-success" data-toggle="dropdown">Dropdown<span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="javascript:;">First Menu Item</a></li>
                                      <li><a href="javascript:;">Second Menu Item</a></li>
                                      <li><a href="javascript:;">Third Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Separated Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Another Separated Menu Item</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle btn-mini btn-warning" data-toggle="dropdown">Dropdown<span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="javascript:;">First Menu Item</a></li>
                                      <li><a href="javascript:;">Second Menu Item</a></li>
                                      <li><a href="javascript:;">Third Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Separated Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Another Separated Menu Item</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle btn-mini btn-danger" data-toggle="dropdown">Dropdown<span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="javascript:;">First Menu Item</a></li>
                                      <li><a href="javascript:;">Second Menu Item</a></li>
                                      <li><a href="javascript:;">Third Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Separated Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Another Separated Menu Item</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle btn-mini btn-inverse" data-toggle="dropdown">Dropdown<span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="javascript:;">First Menu Item</a></li>
                                      <li><a href="javascript:;">Second Menu Item</a></li>
                                      <li><a href="javascript:;">Third Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Separated Menu Item</a></li>
                                      <li class="divider"></li>
                                      <li><a href="javascript:;">Another Separated Menu Item</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Buttons end-->

                </div><!-- end container -->

                <div id="Basic_Button_Groups" class="container-fluid">

                        <div class="form-legend">Basic Button Groups</div>

                        <!--Basic Button Groups begin-->
                        <div class="control-group row-fluid">
                          <div class="span12 span-inset">
                            <div class="btn-group">
                              <button type="button" class="btn">1</button>
                              <button type="button" class="btn">2</button>
                              <button type="button" class="btn">3</button>
                            </div>
                            <div class="btn-group">
                              <button type="button" class="btn btn-info">1</button>
                              <button type="button" class="btn btn-info">2</button>
                              <button type="button" class="btn btn-info">3</button>
                            </div>
                            <div class="btn-group">
                              <button type="button" class="btn btn-success">1</button>
                              <button type="button" class="btn btn-success">2</button>
                              <button type="button" class="btn btn-success">3</button>
                            </div>
                            <div class="btn-group">
                              <button type="button" class="btn btn-warning">1</button>
                              <button type="button" class="btn btn-warning">2</button>
                              <button type="button" class="btn btn-warning">3</button>
                            </div>
                            <div class="btn-group">
                              <button type="button" class="btn btn-danger">1</button>
                              <button type="button" class="btn btn-danger">2</button>
                              <button type="button" class="btn btn-danger">3</button>
                            </div>
                          </div>
                        </div>
                        <!--Basic Button Groups end-->

                </div><!-- end container -->

                <div id="Checkbox_Button_Groups" class="container-fluid">

                        <div class="form-legend">Checkbox Button Groups</div>

                        <!--Checkbox Button Groups begin-->

                        <div class="control-group row-fluid">
                          <div class="span12 span-inset">
                            <div class="btn-group" data-toggle="buttons-checkbox">
                              <button type="button" class="btn active">Option 1</button>
                              <button type="button" class="btn">Option 2</button>
                              <button type="button" class="btn">Option 3</button>
                            </div>
                            <div class="btn-group" data-toggle="buttons-checkbox">
                              <button type="button" class="btn btn-inverse active">Option 1</button>
                              <button type="button" class="btn btn-inverse">Option 2</button>
                              <button type="button" class="btn btn-inverse">Option 3</button>
                            </div>
                          </div>
                        </div>
                        <!--Checkbox Button Groups end-->

                </div><!-- end container -->

                <div id="Radio_Button_Groups" class="container-fluid">

                        <div class="form-legend">Radio Button Groups</div>

                        <!--Radio Button Groups begin-->

                        <div class="control-group row-fluid">
                          <div class="span12 span-inset">
                            <div class="btn-group" data-toggle="buttons-radio">
                              <button type="button" class="btn btn-danger active">Ready</button>
                              <button type="button" class="btn btn-warning">Set</button>
                              <button type="button" class="btn btn-success">Go</button>
                            </div>
                            <div class="btn-group" data-toggle="buttons-radio">
                              <button type="button" class="btn btn-success active">ON</button>
                              <button type="button" class="btn btn-danger">OFF</button>
                            </div>
                          </div>
                        </div>
                        <!--Radio Button Groups end-->

                </div><!-- end container -->

                <div id="Switch_Buttons" class="container-fluid">

                        <div class="form-legend">Switch Buttons</div>

                        <!--Switch Buttons begin-->
                        <div class="control-group row-fluid">
                          <div class="span12 span-inset">
                            <div class="switch switch-large" data-on="danger" data-off="warning">
                                <input type="checkbox" checked="checked">
                            </div>
                            <div data-on-label="YES" data-off-label="NO" class="switch switch-large" data-on="success" data-off="danger">
                                <input type="checkbox" checked="checked">
                            </div>
                            <div data-on-label="Enabled" data-off-label="Disabled" class="switch switch-large">
                                <input type="checkbox" checked="checked">
                            </div>
                            <div data-on-label="<i class='icon-photon check'></i>" data-off-label="<i class='icon-photon x'></i>" class="switch switch-large" data-on="success" data-off="danger">
                                <input type="checkbox" checked="checked">
                            </div>
                            <div data-on-label="<i class='icon-photon play'></i>Playing" data-off-label="<i class='icon-photon pause'></i>Paused" class="switch switch-large" data-on="success" data-off="warning">
                                <input type="checkbox" checked="checked">
                            </div>
                            <div data-on-label="Playing<i class='icon-photon play'></i>" data-off-label="Paused<i class='icon-photon pause'></i>" class="switch switch-large" data-on="success" data-off="warning">
                                <input type="checkbox" checked="checked">
                            </div>
                          </div>
                        </div>

                        <div class="control-group row-fluid">
                          <div class="span12 span-inset">
                            <div class="switch" data-on="danger" data-off="warning">
                                <input type="checkbox" checked="checked">
                            </div>
                            <div data-on-label="YES" data-off-label="NO" class="switch" data-on="success" data-off="danger">
                                <input type="checkbox" checked="checked">
                            </div>
                            <div data-on-label="Enabled" data-off-label="Disabled" class="switch">
                                <input type="checkbox" checked="checked">
                            </div>
                            <div data-on-label="<i class='icon-photon check'></i>" data-off-label="<i class='icon-photon x'></i>" class="switch" data-on="success" data-off="danger">
                                <input type="checkbox" checked="checked">
                            </div>
                            <div data-on-label="<i class='icon-photon play'></i>Playing" data-off-label="<i class='icon-photon pause'></i>Paused" class="switch" data-on="success" data-off="warning">
                                <input type="checkbox" checked="checked">
                            </div>
                            <div data-on-label="Playing<i class='icon-photon play'></i>" data-off-label="Paused<i class='icon-photon pause'></i>" class="switch" data-on="success" data-off="warning">
                                <input type="checkbox" checked="checked">
                            </div>
                          </div>
                        </div>

                        <div class="control-group row-fluid">
                          <div class="span12 span-inset">
                            <div class="switch switch-small" data-on="danger" data-off="warning">
                                <input type="checkbox" checked="checked">
                            </div>
                            <div data-on-label="YES" data-off-label="NO" class="switch switch-small" data-on="success" data-off="danger">
                                <input type="checkbox" checked="checked">
                            </div>
                            <div data-on-label="Enabled" data-off-label="Disabled" class="switch switch-small">
                                <input type="checkbox" checked="checked">
                            </div>
                            <div data-on-label="<i class='icon-photon check'></i>" data-off-label="<i class='icon-photon x'></i>" class="switch switch-small" data-on="success" data-off="danger">
                                <input type="checkbox" checked="checked">
                            </div>
                            <div data-on-label="<i class='icon-photon play'></i>Playing" data-off-label="<i class='icon-photon pause'></i>Paused" class="switch switch-small" data-on="success" data-off="warning">
                                <input type="checkbox" checked="checked">
                            </div>
                            <div data-on-label="Playing<i class='icon-photon play'></i>" data-off-label="Paused<i class='icon-photon pause'></i>" class="switch switch-small" data-on="success" data-off="warning">
                                <input type="checkbox" checked="checked">
                            </div>
                          </div>
                        </div>
                        <!--Switch Buttons end-->

                </div><!-- end container -->

                <div class="container-fluid">

                        <div class="form-legend" id="Tags">Tags</div>

                        <!--Tags begin-->
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <input name="tags" id="tags" value="Photon,CMS,Admin,Panel" />
                            </div>
                        </div>
                        <!--Tags end-->

                    <script>
                        $().ready(function(){
                            $('#tags').tagsInput({
                                'width':'100%',
                                'placeholderColor' : '#fff'
                            });
                        });
                    </script>
                </div><!-- end container -->

                <div class="container-fluid">

                        <div class="form-legend" id="Star_Rating">Star Rating</div>

                        <!--Star Rating begin-->
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <input name="adv1" type="radio" class="star {split:3}"/>
                                <input name="adv1" type="radio" class="star {split:3}"/>
                                <input name="adv1" type="radio" class="star {split:3}"/>
                                <input name="adv1" type="radio" class="star {split:3}"/>
                                <input name="adv1" type="radio" class="star {split:3}"/>
                                <input name="adv1" type="radio" class="star {split:3}"/>
                                <input name="adv1" type="radio" class="star {split:3}"/>
                                <input name="adv1" type="radio" class="star {split:3}"/>
                                <input name="adv1" type="radio" class="star {split:3}"/>
                                <input name="adv1" type="radio" class="star {split:3}"/>
                                <input name="adv1" type="radio" class="star {split:3}"/>
                                <input name="adv1" type="radio" class="star {split:3}"/>
                                <input name="adv1" type="radio" class="star {split:3}"/>
                                <input name="adv1" type="radio" class="star {split:3}"/>
                                <input name="adv1" type="radio" class="star {split:3}"/>
                            </div>
                        </div>
                        <!--Star Rating end-->

                    <script>
                        // bonds to all .star class radio input elements
                    </script>
                </div><!-- end container -->

                <div class="container-fluid bootspin">

                        <div class="form-legend" id="Spinners">Spinners</div>

                        <!--Spinners begin-->
                        <div class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="spin1">
                                    Whole Number Step<a href="javascript:;" class="bootstrap-tooltip" data-placement="top" data-original-title="You can also use the up, down, pgup, pgdown keys to change the values."><i class="icon-photon info-circle"></i></a>
                                </label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input class="spinner" id="spin1" type="number" min="1" max="10000" step="1" value ="5"/>
                                </div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="spin2">
                                    Half Number Step<a href="javascript:;" class="bootstrap-tooltip" data-placement="top" data-original-title="You can also use the up, down, pgup, pgdown keys to change the values."><i class="icon-photon info-circle"></i></a>
                                </label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input style="" class="spinner" id="spin2" type="number" min="1" max="10000" step="0.5" value ="4.5"/> 
                                </div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="spin3">
                                    Decimal Step<a href="javascript:;" class="bootstrap-tooltip" data-placement="top" data-original-title="You can also use the up, down, pgup, pgdown keys to change the values."><i class="icon-photon info-circle"></i></a>
                                </label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input style="" class="spinner" id="spin3" type="number" min="1" max="10000" step="0.01" value ="4.49"/> 
                                </div>
                            </div>
                        </div>
                        <!--Spinners end-->

                    <script>
                        $('.spinner').spinner({
                            min: 0,
                            max: 10000
                        });
                    </script>
                </div><!-- end container -->


                <div class="container-fluid">

                        <div class="form-legend" id="Color_Picker">Color Picker</div>

                        <!--Color Picker begin-->
                        <div class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="color">Hex Input Field</label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input type="text" id="color" name="color" value="#FFF8BE" />
                                    
                                    <div id="colorpicker"></div>
                                
                                </div>
                            </div>
                        </div>
                        <!--Color Picker end-->

                    <script>
                        $().ready(function(){
                            $('#colorpicker').farbtastic('#color');
                        });
                    </script> 
                </div><!-- end container -->


                <div class="container-fluid">

                        <div class="form-legend">Date & Time Pickers</div>

                        <!--Date & Time Pickers begin-->
                        <div id="Inline_Date_Picker" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label">Inline Date Picker</label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <div id="datepickerInline"></div>
                                </div>
                            </div>
                        </div>
                        <div id="Date_Picker" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="datepicker">
                                    Date Picker<a href="javascript:;" class="bootstrap-tooltip" data-placement="top" data-original-title="Click to choose date."><i class="icon-photon info-circle"></i></a>
                                </label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input type="text" id="datepicker" class="span3" />
                                </div>
                            </div>
                        </div>
                        <div id="Multiple_Months_Date_Picker" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="datepickerMulti">
                                    Multiple Months Date Picker<a href="javascript:;" class="bootstrap-tooltip" data-placement="top" data-original-title="Click to choose date."><i class="icon-photon info-circle"></i></a>
                                </label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input type="text" id="datepickerMulti" class="span3" />
                                </div>
                            </div>
                        </div>
                        <div id="Time_Picker" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="timeEntry">
                                    Time Picker<a href="javascript:;" class="bootstrap-tooltip" data-placement="top" data-original-title="Enter time."><i class="icon-photon info-circle"></i></a>
                                </label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input type="text" id="timeEntry" class="span3" />
                                </div>
                            </div>
                        </div>
                        <!--Date & Time Pickers end-->

                    <script>
                        $(function(){
                            $("#datepicker").datepicker();
                            $("#datepickerInline").datepicker();
                            $("#datepickerMulti").datepicker({
                                numberOfMonths: 3,
                                showButtonPanel: true
                            });
                            $('#timeEntry').timeEntry().change();
                        });
                    </script>
                </div><!-- end container -->
            </form>
        </div>
    <?php include 'library/common/ga.php';?>
    </body>
</html>