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

                        <div class="form-legend">Select Menus</div>

                        <!--Simple Select Box begin-->
                        <div id="Simple_Select_Box" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="simpleSelectBox">Simple Select Box</label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <select name="simpleSelectBox" id="simpleSelectBox">
                                        <option selected="" value="All">All</option>
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
                                        <option value="Turquoise">Turquoise</option>
                                        <option value="White">White</option>
                                        <option value="Yellow">Yellow</option>
                                    </select>
                                </div>
                            </div>
                            <script>
                                $().ready(function(){
                                    $("#simpleSelectBox").select2({
                                        dropdownCssClass: 'noSearch'
                                    });
                                });
                            </script>
                        </div>
                        <!--Simple Select Box end-->

                        <!--Select Box with Filter Search begin-->
                        <div id="Simple_Select_Box_with_Filter_Search" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="selectBoxFilter">Select Box with Filter Search</label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <select name="selectBoxFilter" id="selectBoxFilter">
                                        <option selected="" value="All">All</option>
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
                                        <option value="Turquoise">Turquoise</option>
                                        <option value="White">White</option>
                                        <option value="Yellow">Yellow</option>
                                    </select>
                                </div>
                            </div>
                            <script>
                                $().ready(function(){
                                    $("#selectBoxFilter").select2();
                                });
                            </script>
                        </div>
                        <!--Select Box with Filter Search end-->

                        <!--Simple Multiple Select Box begin-->
                        <div id="Simple_Multiple_Select_Box" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="simpleMulti">Simple Multiple Select Box</label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <select multiple name="simpleMulti" id="simpleMulti">
                                        <option value="Beige">Beige</option>
                                        <option selected="" value="Black">Black</option>
                                        <option selected="" value="Blue">Blue</option>
                                        <option value="Bronze">Bronze</option>
                                        <option selected="" value="Brown">Brown</option>
                                        <option value="Gold">Gold</option>
                                        <option value="Gray">Gray</option>
                                        <option value="Green">Green</option>
                                        <option value="Orange">Orange</option>
                                        <option value="Pink">Pink</option>
                                        <option value="Purple">Purple</option>
                                        <option value="Red">Red</option>
                                        <option value="Silver">Silver</option>
                                        <option value="Turquoise">Turquoise</option>
                                        <option value="White">White</option>
                                        <option value="Yellow">Yellow</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--Simple Multiple Select Box end-->

                        <!--Multiple Select Box with Filter Search begin-->
                        <div id="Multiple_Select_Box_with_Filter_Search" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="multiFilter">Multiple Select Box with Filter Search</label>
                            </div>
                            <div class="span9">
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
                        <!--Multiple Select Box with Filter Search end-->

                        <!--Dual Multi Select begin-->
                        <div id="Dual_Multi_Select_with_Filter_Search" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="dualMulti">Dual Multi Select</label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <select multiple name="dualMulti" id="dualMulti">
                                        <option selected="" value="Beige">Beige</option>
                                        <option value="Black">Black</option>
                                        <option value="Blue">Blue</option>
                                        <option value="Bronze">Bronze</option>
                                        <option value="Brown">Brown</option>
                                        <option selected="" value="Gold">Gold</option>
                                        <option selected="" value="Gray">Gray</option>
                                        <option value="Green">Green</option>
                                        <option value="Orange">Orange</option>
                                        <option value="Pink">Pink</option>
                                        <option value="Purple">Purple</option>
                                        <option value="Red">Red</option>
                                        <option value="Silver">Silver</option>
                                        <option value="Turquoise">Turquoise</option>
                                        <option value="White">White</option>
                                        <option value="Yellow">Yellow</option>
                                    </select>
                                </div>
                            </div>
                            <script>
                                $().ready(function(){
                                    $("#dualMulti").pickList();
                                });
                            </script>
                        </div>
                        <!--Dual Multi Select end-->


                </div><!-- end container -->
            </form>
        </div>
    <?php include 'library/common/ga.php';?>
    </body>
</html>