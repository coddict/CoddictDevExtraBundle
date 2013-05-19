<?include 'library/functions.php';?>
<?$filename = basename(__FILE__, ".php");?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?=$config[$filename]['pagetitle'];?></title>
        <?php include 'library/common/head.php';?>
        <?php include 'library/common/javascript.php';?>
        <script>
            var g1, g2, g3;
            window.onload = function(){
                var g1 = new JustGage({
                    id: "g1", 
                    value: getRandomInt(0, 4000),
                    valueFontColor: "#333333",
                    min: 0,
                    max: 10000,
                    title: "Users on Site",
                    label: "Users",
                    levelColorsGradient: true
                });
                var g2 = new JustGage({
                    id: "g2", 
                    value: getRandomInt(34, 65),
                    valueFontColor: "#333333",
                    min: 0,
                    max: 100,
                    title: "Memory Usage",
                    label: "%",
                    levelColorsGradient: true
                });
                var g3 = new JustGage({
                    id: "g3", 
                    value: getRandomInt(36, 80), 
                    valueFontColor: "#333333",
                    min: 0,
                    max: 80,
                    title: "Bandwidth Usage",
                    label: "Mbit/s",
                    levelColorsGradient: true
                });
                setInterval(function() {
                    g1.refresh(getRandomInt(0, 4000));
                    g2.refresh(getRandomInt(34, 65));          
                    g3.refresh(getRandomInt(36, 80));
                }, 2500);
            };
        </script>
        
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
            <form class="form-horizontal" id="validation_form">
                <div class="container-fluid">

                        <div class="form-legend" id="Progress_Bar_Statistics">Progress Bar Statistics</div>

                        <!--Progress Bar Statistics begin-->
                        <div class="control-group row-fluid">
                            <div class="span4 span-inset">
                                <p>Tasks Completed: 22/100</p>
                               <div class="progress progress-info">
                                    <div class="bar" style="width: 22%"></div>
                                </div>
                            </div>
                            <div class="span4 span-inset">
                                <p>Bugs Fixed: 43/100</p>
                               <div class="progress progress-success">
                                    <div class="bar" style="width: 43%"></div>
                                </div>
                            </div>
                            <div class="span4 span-inset">
                                <p>QA Checked: 65%</p>
                               <div class="progress progress-warning">
                                    <div class="bar" style="width: 65%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span3 span-inset">
                                <p>Images: 19%</p>
                               <div class="progress progress-info progress-thin">
                                    <div class="bar" style="width: 22%"></div>
                                </div>
                            </div>
                            <div class="span3 span-inset">
                                <p>Music: 41%</p>
                               <div class="progress progress-success progress-thin">
                                    <div class="bar" style="width: 43%"></div>
                                </div>
                            </div>
                            <div class="span3 span-inset">
                                <p>Documents: 62%</p>
                               <div class="progress progress-warning progress-thin">
                                    <div class="bar" style="width: 65%"></div>
                                </div>
                            </div>
                            <div class="span3 span-inset">
                                <p>Space Occupied: 90%</p>
                               <div class="progress progress-danger progress-thin">
                                    <div class="bar" style="width: 65%"></div>
                                </div>
                            </div>
                        </div>
                        <!--Progress Bar Statistics end-->

                </div><!-- end container -->

                <div class="container-fluid">

                        <div class="form-legend" id="Gauge_Statistics">Gauge Statistics</div>
                        <!--Gauge Statistics begin-->
                        <div class="control-group row-fluid">
                            <div class="span4 span-inset">
                               <div id="g1"></div>
                            </div>
                            <div class="span4 span-inset">
                               <div id="g2"></div>
                            </div>
                            <div class="span4 span-inset">
                               <div id="g3"></div>
                            </div>
                        </div>
                        <!--Gauge Statistics end-->

                </div><!-- end container -->

                <div class="container-fluid">

                        <div class="form-legend" id="Summary_Statistics">Summary Statistics</div>

                        <!--Summary Statistics begin-->
                        <div class="control-group row-fluid">
                            <div class="span4 span-inset">
                                <div class="statBox">
                                    <span class="badge badge-success iconic pen_alt_stroke"></span>
                                    <div class="statHolder">
                                        <span class="statTitle">ARTICLES PUBLISHED</span>
                                        <span class="statValue">126</span>
                                    </div>
                                </div>
                            </div>
                            <div class="span4 span-inset">
                                <div class="statBox">
                                    <span class="badge badge-warning iconic pen_alt_stroke"></span>
                                    <div class="statHolder">
                                        <span class="statTitle">ARTICLES PENDING</span>
                                        <span class="statValue">21</span>
                                    </div>
                                </div>
                            </div>
                            <div class="span4 span-inset">
                                <div class="statBox">
                                    <span class="badge badge-important iconic pen_alt_stroke"></span>
                                    <div class="statHolder">
                                        <span class="statTitle">ARTICLES DENIED</span>
                                        <span class="statValue">53</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span4 span-inset">
                                <div class="statBox">
                                    <span class="badge-transparent text-success iconic pen_alt_stroke"></span>
                                    <div class="statHolder">
                                        <span class="statTitle">ARTICLES PUBLISHED</span>
                                        <span class="statValue">64</span>
                                    </div>
                                </div>
                            </div>
                            <div class="span4 span-inset">
                                <div class="statBox">
                                    <span class="badge-transparent text-warning iconic pen_alt_stroke"></span>
                                    <div class="statHolder">
                                        <span class="statTitle">ARTICLES PENDING</span>
                                        <span class="statValue">2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="span4 span-inset">
                                <div class="statBox">
                                    <span class="badge-transparent text-error iconic pen_alt_stroke"></span>
                                    <div class="statHolder">
                                        <span class="statTitle">ARTICLES DENIED</span>
                                        <span class="statValue">43</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="control-group row-fluid">
                            <div class="span4 span-inset">
                                <div class="statBox">
                                    <span class="badge badge-success iconic mail"></span>
                                    <div class="statHolder">
                                        <span class="statTitle">E-MAILS PROCESSED</span>
                                        <span class="statValue">214</span>
                                    </div>
                                </div>
                            </div>
                            <div class="span4 span-inset">
                                <div class="statBox">
                                    <span class="badge badge-warning iconic mail"></span>
                                    <div class="statHolder">
                                        <span class="statTitle">E-MAILS PENDING</span>
                                        <span class="statValue">53</span>
                                    </div>
                                </div>
                            </div>
                            <div class="span4 span-inset">
                                <div class="statBox">
                                    <span class="badge badge-important iconic mail"></span>
                                    <div class="statHolder">
                                        <span class="statTitle">SPAM E-MAILS</span>
                                        <span class="statValue">153</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span4 span-inset">
                                <div class="statBox">
                                    <span class="badge-transparent text-success iconic mail"></span>
                                    <div class="statHolder">
                                        <span class="statTitle">E-MAILS PROCESSED</span>
                                        <span class="statValue">322</span>
                                    </div>
                                </div>
                            </div>
                            <div class="span4 span-inset">
                                <div class="statBox">
                                    <span class="badge-transparent text-warning iconic mail"></span>
                                    <div class="statHolder">
                                        <span class="statTitle">E-MAILS PENDING</span>
                                        <span class="statValue">7</span>
                                    </div>
                                </div>
                            </div>
                            <div class="span4 span-inset">
                                <div class="statBox">
                                    <span class="badge-transparent text-error iconic mail"></span>
                                    <div class="statHolder">
                                        <span class="statTitle">SPAM E-MAILS</span>
                                        <span class="statValue">51</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="control-group row-fluid">
                            <div class="span4 span-inset">
                                <div class="statBox">
                                    <span class="badge iconic image"></span>
                                    <div class="statHolder">
                                        <span class="statTitle">MONTHLY REVENUE</span>
                                        <span class="statValue">$16,235</span>
                                    </div>
                                </div>
                            </div>
                            <div class="span4 span-inset">
                                <div class="statBox">
                                    <span class="badge iconic battery_half"></span>
                                    <div class="statHolder">
                                        <span class="statTitle">BATTERY LIFE</span>
                                        <span class="statValue">2.5 Hrs</span>
                                    </div>
                                </div>
                            </div>
                            <div class="span4 span-inset">
                                <div class="statBox">
                                    <span class="badge iconic key_stroke"></span>
                                    <div class="statHolder">
                                        <span class="statTitle">NEW ACCOUNTS</span>
                                        <span class="statValue">45 Users</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span4 span-inset">
                                <div class="statBox">
                                    <span class="badge-transparent text-inverse iconic image"></span>
                                    <div class="statHolder">
                                        <span class="statTitle">MONTHLY REVENUE</span>
                                        <span class="statValue">322</span>
                                    </div>
                                </div>
                            </div>
                            <div class="span4 span-inset">
                                <div class="statBox">
                                    <span class="badge-transparent text-inverse iconic battery_half"></span>
                                    <div class="statHolder">
                                        <span class="statTitle">BATTERY LIFE</span>
                                        <span class="statValue">1 Hour</span>
                                    </div>
                                </div>
                            </div>
                            <div class="span4 span-inset">
                                <div class="statBox">
                                    <span class="badge-transparent text-inverse iconic key_stroke"></span>
                                    <div class="statHolder">
                                        <span class="statTitle">NEW ACCOUNTS</span>
                                        <span class="statValue">12 Users</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Summary Statistics end-->

                </div><!-- end container -->
            </form>
        </div>
    <?php include 'library/common/ga.php';?>
    </body>
</html>