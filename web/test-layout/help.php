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

                <div class="container-fluid no-outter-border">

                    <div class="accordion" id="accordion2">
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                    How Do I Reset My Password?
                                </a>
                            </div>
                            <div id="collapseOne" class="accordion-body collapse in">
                                <div class="accordion-inner">
                                    <h4>Mauris mauris ante</h4>
                                    <p>
                                        Blandit et, ultrices a, suscipit eget, quam. Integer
                                        ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                                        amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                                        odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                                    </p>
                                    <h4>Etiam tempor</h4>
                                    <p>
                                        Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, 
                                        turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis 
                                        sollicitudin mauris. Integer in mauris eu nibh euismod gravida. 
                                        Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit.
                                    </p>                           
                                    <h4>Mauris mauris ante</h4>
                                    <p>
                                        Proin nonummy, lacus eget pulvinar lacinia, pede felis dignissim leo, 
                                        vitae tristique magna lacus sit amet eros. Nullam ornare. Praesent odio 
                                        ligula, dapibus sed, tincidunt eget, dictum ac, nibh. Nam quis lacus. 
                                        Nunc eleifend molestie velit. Morbi lobortis quam eu velit. 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                    I Forgot My Password
                                </a>
                            </div>
                            <div id="collapseTwo" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>
                                        Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                                        purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                                        velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                                        suscipit faucibus urna.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                    Can You Send Me a Copy of Password Without Reseting It?
                                </a>
                            </div>
                            <div id="collapseThree" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>
                                        Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                                        Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
                                        ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
                                        lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                                    How Can I Recover My Secret Question?
                                </a>
                            </div>
                            <div id="collapseFour" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>
                                        Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                                        et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                                        faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                                        mauris vel est.
                                    </p>
                                    <p>
                                        Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                                        inceptos himenaeos.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- end container -->
            </form>
        </div>
    <?php include 'library/common/ga.php';?>
    </body>
</html>