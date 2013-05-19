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
                <div id="Grid_System" class="container-fluid no-outter-border">

                        <!--Grid System begin-->
                        <div class="row-fluid">
                            <div class="span-filler span12">
                                <label class="grid-label">Grid 12 (100%)</label>
                            </div>
                        </div>
                        
                        <div class="row-fluid">
                            <div class="span-filler span6">
                                <label class="grid-label">Grid 6 (50%)</label>
                            </div>
                            <div class="span-filler span6">
                                <label class="grid-label">Grid 6 (50%)</label>
                            </div>
                        </div>
                        
                        <div class="row-fluid">
                            <div class="span-filler span4">
                                <label class="grid-label">Grid 4 (33%)</label>
                            </div>
                            <div class="span-filler span4">
                                <label class="grid-label">Grid 4 (33%)</label>
                            </div>
                            <div class="span-filler span4">
                                <label class="grid-label">Grid 4 (33%)</label>
                            </div>
                        </div>
                        
                        <div class="row-fluid">
                            <div class="span-filler span3">
                                <label class="grid-label">Grid 3 (25%)</label>
                            </div>
                            <div class="span-filler span3">
                                <label class="grid-label">Grid 3 (25%)</label>
                            </div>
                            <div class="span-filler span3">
                                <label class="grid-label">Grid 3 (25%)</label>
                            </div>
                            <div class="span-filler span3">
                                <label class="grid-label">Grid 3 (25%)</label>
                            </div>
                        </div>
                        
                        <div class="row-fluid">
                            <div class="span-filler span2">
                                <label class="grid-label">Grid 2 (16%)</label>
                            </div>
                            <div class="span-filler span2">
                                <label class="grid-label">Grid 2 (16%)</label>
                            </div>
                            <div class="span-filler span2">
                                <label class="grid-label">Grid 2 (16%)</label>
                            </div>
                            <div class="span-filler span2">
                                <label class="grid-label">Grid 2 (16%)</label>
                            </div>
                            <div class="span-filler span2">
                                <label class="grid-label">Grid 2 (16%)</label>
                            </div>
                            <div class="span-filler span2">
                                <label class="grid-label">Grid 2 (16%)</label>
                            </div>
                        </div>
                        
                         <div class="row-fluid">
                            <div class="span-filler span4">
                                <label class="grid-label">Grid 4 (33%)</label>
                            </div>
                            <div class="span-filler span8">
                                <label class="grid-label">Grid 8 (66%)</label>
                            </div>
                        </div>
                        
                         <div class="row-fluid">
                            <div class="span-filler span2">
                                <label class="grid-label">Grid 2 (16%)</label>
                            </div>
                            <div class="span-filler span2">
                                <label class="grid-label">Grid 2 (16%)</label>
                            </div>
                            <div class="span-filler span6">
                                <label class="grid-label">Grid 6 (50%)</label>
                            </div>
                             <div class="span-filler span2">
                                <label class="grid-label">Grid 2 (16%)</label>
                            </div>
                        </div>
                         <div class="row-fluid">
                            <div class="span-filler span2">
                                <label class="grid-label">Grid 2 (16%)</label>
                            </div>
                            <div class="span-filler span4 offset6">
                                <label class="grid-label">Grid 4 (33%) Offset By 6 (50%)</label>
                            </div>
                        </div>
                        
                        <!--Grid System end-->

                </div><!-- end container -->
                
                <div class="container-fluid">

                        <div class="form-legend" id="Internal_Grid_System">Internal Grid System</div>
                        <!--Internal Grid System begin-->
                        <div class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputSpan9">Grid 3 + 9 </label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input id="inputSpan9" type="text" name="inputSpan9" />
                                </div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputSpan8">Grid 3 + 8 </label>
                            </div>
                            <div class="span8">
                                <div class="controls">
                                    <input id="inputSpan8" type="text" name="inputSpan8" />
                                </div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputSpan7">Grid 3 + 7 </label>
                            </div>
                            <div class="span7">
                                <div class="controls">
                                    <input id="inputSpan7" type="text" name="inputSpan7" />
                                </div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputSpan6">Grid 3 + 6 </label>
                            </div>
                            <div class="span6">
                                <div class="controls">
                                    <input id="inputSpan6" type="text" name="inputSpan6" />
                                </div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputSpan5">Grid 3 + 5 </label>
                            </div>
                            <div class="span5">
                                <div class="controls">
                                    <input id="inputSpan5" type="text" name="inputSpan5" />
                                </div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputSpan4">Grid 3 + 4 </label>
                            </div>
                            <div class="span4">
                                <div class="controls">
                                    <input id="inputSpan4" type="text" name="inputSpan4" />
                                </div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputSpan3">Grid 3 + 3 </label>
                            </div>
                            <div class="span3">
                                <div class="controls">
                                    <input id="inputSpan3" type="text" name="inputSpan3" />
                                </div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputSpan2">Grid 3 + 2 </label>
                            </div>
                            <div class="span2">
                                <div class="controls">
                                    <input id="inputSpan2" type="text" name="inputSpan2" />
                                </div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputSpan1">Grid 3 + 1 </label>
                            </div>
                            <div class="span1">
                                <div class="controls">
                                    <input id="inputSpan1" type="text" name="inputSpan1" />
                                </div>
                            </div>
                        </div>
                        <!--Internal Grid System end-->

                </div><!-- end container -->
            </form>
        </div>
    <?php include 'library/common/ga.php';?>
    </body>
</html>