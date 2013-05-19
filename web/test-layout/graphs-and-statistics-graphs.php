<?include 'library/functions.php';?>
<?$filename = basename(__FILE__, ".php");?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?=$config[$filename]['pagetitle'];?></title>
        <?php include 'library/common/head.php';?>
        <?php include 'library/common/javascript.php';?>

        <script type="text/javascript">
            $(window).load(function () {
                drawGraphs();
            });
                            
            function drawGraphs(){
                // Simple Chart
                var sin = [], cos = [];
                for (var i = 0; i < 14; i += 0.5) {
                    sin.push([i, Math.sin(i)]);
                    cos.push([i, Math.cos(i)]);
                }
                var plot = $.plot($("#chart_01"),
                [ { data: sin, label: "sin(x)"}, { data: cos, label: "cos(x)" } ], {
                    colors: ["#aad5f5", "#008fde", '#c6d695'],
                    series: {
                        lines: { show: true },
                        points: { show: true }
                    },
                    grid: { hoverable: true, clickable: true, borderWidth: 1, color: '#bbb' },
                    yaxis: { min: -1.2, max: 1.2 }
                });
                // Bar Chart
                var d1 = [];
                for (var i = 0; i <= 30; i += 1)
                    d1.push([i, parseInt(Math.random() * 30)]);

                var d2 = [];
                for (var i = 0; i <= 30; i += 1)
                    d2.push([i, parseInt(Math.random() * 30)]);

                $.plot($("#chart_02"), [ d1, d2 ], {
                    grid: { show: true, borderWidth: 1, color: '#bbb' },
                    xaxis: { show: true, ticks: 8 },
                    yaxis: { show: true, ticks: 8, color: '#bbb'},
                    colors: ["#aad5f5", "#008fde"],
                    series: {
                        stack: 0,
                        fill: 1,
                        bars: { show: true, barWidth: 0.9, lineWidth: 0, fill: 1 }
                    }
                });
                // Donut Chart
                var data = [];
                var lbls = { 0: 'Chocolate', 1: 'Marmelade', 2: 'Sugar Only' };
                for( var i = 0; i < 3; i++) {
                    data[i] = { label: "&nbsp;" + lbls [i] + "&nbsp;", data: Math.floor(Math.random()*100)+1 }
                }
                $.plot($("#chart_04"), data, {
                    colors: ["#aad5f5", "#008fde", '#c6d695'],
                    legend: { backgroundOpacity: 0 }, 
                    series: {
                        pie: { 
                            innerRadius: 0.5,
                            show: true
                        }
                    }
                });
                // Realtime Data
                var data = [], totalPoints = 15;
                function getRandomData() {
                    if (data.length > 0)
                        data = data.slice(1);
                    while (data.length < totalPoints) {
                        var prev = data.length > 0 ? data[data.length - 1] : 50;
                        var y = prev + Math.random() * 20 - 10;
                        if (y < 0)
                            y = 0;
                        if (y > 100)
                            y = 100;
                        data.push(y);
                    }
                    var res = [];
                    for (var i = 0; i < data.length; ++i)
                        res.push([i, data[i]])
                    return res;
                }
                var updateInterval = 500;
                var options = {
                    series: {   shadowSize: 0, 
                        lines: { show: true, fill:true, fillColor: { colors: [{opacity: 0.1}, {opacity: 0}] } }, 
                        points: { show: true, radius: 2, color: '#008fde' }
                    },
                    grid: { hoverable: true, clickable: true, borderWidth: 1, color: '#bbb' },
                    xaxis: { show: true, ticks: 8 },
                    yaxis: { show: true, min: 0, max: 100, ticks:4, color: '#bbb'},
                    colors: ["#008fde"]
                };
                var plot = $.plot($("#chart_05"), [ getRandomData() ], options);
                function update() {
                    plot.setData([ getRandomData() ]);
                    plot.draw();
                    setTimeout(update, updateInterval);
                }
                update();
            }
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

                        <div class="form-legend" id="Simple_Chart">Simple Chart</div>
                        <!--Simple Chart begin-->
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset-more">
                               <div id="chart_01" style="height:250px;"></div> 
                            </div>
                        </div>
                        <!--Simple Chart end-->

                </div><!-- end container -->

                <div class="container-fluid">

                        <div class="form-legend" id="Stacked_Bar_Chart">Stacked Bar Chart</div>

                        <!--Stacked Bar Chart begin-->
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset-more">
                               <div id="chart_02" style="height:250px;"></div> 
                            </div>
                        </div>
                        <!--Stacked Bar Chart end-->

                </div><!-- end container -->

                <div class="container-fluid">

                        <div class="form-legend" id="Donut_Chart">Donut Chart</div>

                        <!--Donut Chart begin-->
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset-more">
                               <div id="chart_04" class="graph-embed" style="height:250px;"></div> 
                            </div>
                        </div>
                        <!--Donut Chart end-->

                </div><!-- end container -->

                

                <div class="container-fluid">

                        <div class="form-legend" id="Realtime_Data_Chart">Realtime Data Chart</div>

                        <!--Realtime Data Chart begin-->
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset-more">
                               <div id="chart_05" class="graph-embed" style="height:250px;"></div> 
                            </div>
                        </div>
                        <!--Realtime Data Chart end-->

                </div><!-- end container -->

            </form>
        </div>
    <?php include 'library/common/ga.php';?>
    </body>
</html>