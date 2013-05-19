<?php include 'library/functions.php';?>
<?php $filename = basename(__FILE__, ".php");?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?=$config[$filename]['pagetitle'];?></title>
        <?php include 'library/common/head.php';?>
        <?php include 'library/common/javascript.php';?>
        
    </head>

    <body class="body-inner">
        <?php include 'library/common/main_menu.php';?>
        <?php include 'library/common/user_menu.php';?>
        <?php include 'library/common/panel.php';?>
        <div class="main-content<?=($_COOKIE["jsTreeMenu"] == 'retracted' ? ' retracted' : '');?>">
            <?php include 'library/common/breadcrumbs.php';?>
            <header>
                <i class="icon-big-notepad"></i>
                <h2><small><?=$config[$filename]['h2'];?></small></h2>
                <h3><small><?=$config[$filename]['h3'];?></small></h3>
            </header>
            <form class="form-horizontal">
                <div class="container-fluid">

                        <div class="form-legend">Input Fields</div>

                        <!--Phone Number begin-->
                        <div id="Phone_Number" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputPhone-0">Phone Number</label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input id="inputPhone-0" maxlength="3" size="3" type="text" class="input-small" name="inputData" /> - 
                                    <input id="inputPhone-2" maxlength="3" size="3" type="text" class="input-small" name="inputData" /> - 
                                    <input id="inputPhone-1" maxlength="3" size="3" type="text" class="input-small" name="inputData" />
                                    <script>
                                        $(document).ready(function(){
                                            $("input[id^=inputPhone]").autotab_magic().autotab_filter("numeric");
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!--Phone Number end-->
                        
                        <!--Social Security Number begin-->
                        <div id="Social_Security_Number" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputSS-0">Social Security Number</label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input id="inputSS-0" maxlength="3" size="3" type="text" class="input-small"/> - 
                                    <input id="inputSS-2" maxlength="2" size="3" type="text" class="input-small"/> - 
                                    <input id="inputSS-1" maxlength="4" size="5" type="text" class="input-small"/>
                                    <script>
                                        $(document).ready(function(){
                                            $("input[id^=inputSS]").autotab_magic().autotab_filter("numeric");
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!--Social Security Number end-->
                        
                        <!--Text Characters begin-->
                        <div id="Text_Characters_Only" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputTC-0">Text Characters Only</label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input id="inputTC-0" maxlength="3" size="3" type="text" class="input-small"/> - 
                                    <input id="inputTC-2" maxlength="3" size="3" type="text" class="input-small"/> - 
                                    <input id="inputTC-1" maxlength="3" size="5" type="text" class="input-small"/>
                                    <script>
                                        $(document).ready(function(){
                                            $("input[id^=inputTC]").autotab_magic().autotab_filter("text");
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!--Text Characters end-->

                        <!--Alpha Characters Only begin-->
                        <div id="Alpha_Characters_Only" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputAlpha-0">Alpha Characters Only</label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input id="inputAlpha-0" maxlength="3" size="3" type="text" class="input-small"/> - 
                                    <input id="inputAlpha-2" maxlength="3" size="3" type="text" class="input-small"/> - 
                                    <input id="inputAlpha-1" maxlength="3" size="5" type="text" class="input-small"/>
                                    <script>
                                        $(document).ready(function(){
                                            $("input[id^=inputAlpha]").autotab_magic().autotab_filter("alpha");
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!--Alpha Characters Only end-->

                        <!--Uppercase Letters and Numbers begin-->
                        <div id="Uppercase_Letters_and_Numbers" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputUCN-0">Uppercase letters and numbers</label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input id="inputUCN-0" maxlength="3" size="3" type="text" class="input-small"/> - 
                                    <input id="inputUCN-2" maxlength="3" size="3" type="text" class="input-small"/> - 
                                    <input id="inputUCN-1" maxlength="3" size="3" type="text" class="input-small"/>
                                    <script>
                                        $(document).ready(function(){
                                            $("input[id^=inputUCN]").autotab_magic().autotab_filter({ format: "alphanumeric", uppercase: true });
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!--Uppercase Letters and Numbers end-->

                        <!--Any and All Characters begin-->
                        <div id="Any_and_All_Characters" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputAll-0">Any and all characters</label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input id="inputAll-0" maxlength="3" size="3" type="text" class="input-small"/> - 
                                    <input id="inputAll-2" maxlength="3" size="3" type="text" class="input-small"/> - 
                                    <input id="inputAll-1" maxlength="3" size="3" type="text" class="input-small"/>
                                    <script>
                                        $(document).ready(function(){
                                            $("input[id^=inputAll]").autotab_magic();
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!--Any and All Characters end-->

                        <!--Regular Expression (Allows Numbers and Periods) begin-->
                        <div id=Regular_Expression_(Allows_Numbers_and_Periods) class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputRegex">Regular Expression (Allows Numbers and Periods)</label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input id="inputRegex" maxlength="10" size="10" type="text" class="input-xlarge-customized"/>
                                    <script>
                                        $(document).ready(function(){
                                            $("input[id^=inputRegex]").autotab_magic().autotab_filter({ format: 'custom', pattern: '[^0-9\.]' });;
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!--Regular Expression (Allows Numbers and Periods) end-->

                </div><!-- end container -->
            </form>
        </div>
    <?php include 'library/common/ga.php';?>
    </body>
</html>