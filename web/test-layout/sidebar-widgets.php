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

                        <div class="form-legend" id="Sidebar_Widgets">Sidebar Widgets</div>

                        <!--Sidebar Widget Text begin-->
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <p>
                                    <a href="/dashboard.php">Dashboard widgets</a> are extremly flexible, and could be placed in sidebar menu as well. Widgets play nice alongside jsTree menu, and look beautiful in tablets, where they dynamically re-arrange in two column layout if sidebar menu width provides enough room.
                                </p>
                                <p>
                                    Widget inclusion has been made easy, as we have each widget placed in a separate html template file, ready for inclusion wherever you need it.
                                </p>
                            </div>
                        </div>
                        <!--Sidebar Widget Text end-->

                </div><!-- end container -->
            </form>
        </div>
    <?php include 'library/common/ga.php';?>
    </body>
</html>