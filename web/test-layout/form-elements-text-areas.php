<?php include 'library/functions.php'; ?>
<?php $filename = basename(__FILE__, ".php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?=$config[$filename]['pagetitle'];?></title>
        <?php include 'library/common/head.php'; ?>
        <?php include 'library/common/javascript.php'; ?>
        
    </head>

    <body class="body-inner">
        <?php include 'library/common/main_menu.php'; ?>
        <?php include 'library/common/user_menu.php'; ?>
        <?php include 'library/common/panel.php'; ?>
        <div class="main-content<?=($_COOKIE["jsTreeMenu"] == 'retracted' ? ' retracted' : '');?>">
            <?php include 'library/common/breadcrumbs.php'; ?>
            <header>
                <i class="icon-big-notepad"></i>
                <h2><small><?=$config[$filename]['h2'];?></small></h2>
                <h3><small><?=$config[$filename]['h3'];?></small></h3>
            </header>
            <form class="form-horizontal">
                <div class="container-fluid">

                        <div class="form-legend">Input Fields</div>
                        <!--Text Area - No Resize begin-->
                        <div id="Text_Area_-_No_Resize" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label">Text Area - No Resize</label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <textarea  rows="4" class="no-resize"></textarea>
                                </div>
                            </div>
                        </div>
                        <!--Text Area - No Resize end-->

                        <!--Text Area Resizable begin-->
                        <div id="Text_Area_Resizable" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label">Text Area Resizable</label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <textarea  rows="4" class=""></textarea>
                                </div>
                            </div>
                        </div>
                        <!--Text Area Resizable end-->

                        <!--Auto Growing Text Area begin-->
                        <div id="Auto_Growing_Text_Area" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label">Auto Growing Text Area</label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <textarea  rows="2" class="auto-resize"></textarea>
                                    <script>
                                        $(".auto-resize").keyup(function(){
                                            autoGrowField($(this).get(0)); 
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!--Auto Growing Text Area end-->

                        <!--Text Area With Character Counter counter-->
                        <div id="Text_Area_With_Character_Counter" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label">Text Area With Character Counter</label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <textarea id="character_counter"  rows="2" class="auto-resize"></textarea>
                                    <script>
                                        $("#character_counter").charCount({
                                            counterText: 'Characters left: '
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!--Text Area With Character Counter end-->

                        <!--Text Area With Word Counter begin-->
                        <div id="Text_Area_With_Word_Counter" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label">Text Area With Word Counter</label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <textarea id="word_counter" rows="2" class="auto-resize"></textarea>
                                    <script>
                                        $("#word_counter").textareaCounter();
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!--Text Area With Word Counter end-->

                        <!--WYSIWYG Editor - Minimum Options begin-->
                        <div id="WYSIWYG_Editor_-_Minimum_Options" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label">WYSIWYG Editor - Minimum Options</label>
                            </div>
                            <div class="span9">
                                <div class="controls elrte-wrapper">
                                    <textarea id="tiny" rows="2" class="auto-resize"></textarea>
                                    <script>
                                        $('#tiny').elrte({
                                            lang: "en",
                                            styleWithCSS: false,
                                            height: 200,
                                            toolbar: 'tiny'
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!--WYSIWYG Editor - Minimum Options end-->

                        <!--WYSIWYG Editor - Normal Options begin-->
                        <div id="WYSIWYG_Editor_-_Normal_Options" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label">WYSIWYG Editor - Normal Options</label>
                            </div>
                            <div class="span9">
                                <div class="controls elrte-wrapper">
                                    <textarea id="normal" rows="2" class="auto-resize"></textarea>
                                    <script>
                                        $('#normal').elrte({
                                            lang: "en",
                                            styleWithCSS: false,
                                            height: 200,
                                            toolbar: 'normal'
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!--WYSIWYG Editor - Normal Options end-->

                        <!--WYSIWYG Editor - Full Options-->
                        <div id="WYSIWYG_Editor_-_Full_Options" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label">WYSIWYG Editor - Full Options</label>
                            </div>
                            <div class="span9">
                                <div class="controls elrte-wrapper">
                                    <textarea id="maxi" rows="2" class="auto-resize"></textarea>
                                    <script>
                                        $('#maxi').elrte({
                                            lang: "en",
                                            styleWithCSS: false,
                                            height: 200,
                                            toolbar: 'maxi'
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!--WYSIWYG Editor - Full Options end-->

                </div><!-- end container -->
            </form>
        </div>
    <?php include 'library/common/ga.php';?>
    </body>
</html>