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

    <body class="body-inner" onload="prettyPrint()">
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

                        <div class="form-legend" id="Headings">Headings</div>

                        <!--Headings begin-->
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <h1>This is Heading 1</h1>
                                <h2>This is Heading 2</h2>
                                <h3>This is Heading 3 </h3>
                                <h4>This is Heading 4</h4>
                                <h5>This is Heading 5</h5>
                                <h6>This is Heading 6</h6>
                            </div>
                        </div>
                        <!--Headings end-->

                </div><!-- end container -->


                <div class="container-fluid">

                        <div class="form-legend" id="Simple_Text_with_Links">Simple Text with Links</div>

                        <!--Simple Text with Links begin-->
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <h4>Example of Simple Text With Links</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc <a href="#">commodo elementum</a> dapibus. 
                                    Pellentesque sed lacus dui, sit amet viverra velit. Vivamus ut nunc in ante convallis rhoncus. 
                                    Phasellus scelerisque pretium tellus, et tincidunt tellus scelerisque at. Nam in lacus velit. 
                                    Nam mattis convallis ligula, in ultricies nibh pretium porttitor. Nunc in ligula dolor.
                                </p>
                                <p class="lead">
                                    Praesent id nibh sapien. Ut laoreet sem non orci consequat in scelerisque lacus fermentum. 
                                    Etiam odio enim, consequat in adipiscing non, pulvinar eu orci. Suspendisse nec nulla pretium turpis pellentesque eleifend.
                                </p>
                                <p>
                                    Nulla <a href="#">pellentesque</a> metus id purus tincidunt luctus id et magna. Praesent tortor lorem, lobortis nec sodales 
                                    lacinia, interdum in leo. Sed enim quam, egestas vitae pellentesque eget, condimentum ut lectus. Aenean id orci orci, 
                                    ut fringilla quam. Donec at suscipit nisl. Sed nibh tortor, fringilla at mattis vitae, gravida non nisi. Nunc quam urna, 
                                    interdum a bibendum eu, <a href="#">sollicitudin sit amet massa</a>. Vivamus egestas ullamcorper quam vitae adipiscing. 
                                    Vestibulum non ultricies elit. Aliquam pretium gravida ipsum, gravida facilisis nulla feugiat et.
                                </p>
                            </div>
                        </div>
                        <!--Simple Text with Links end-->

                </div><!-- end container -->


                <div class="container-fluid">

                        <div class="form-legend" id="Labels">Labels</div>

                        <!--Labels begin-->
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Nunc <span class="label label-important">commodo elementum</span> dapibus.
                                    Pellentesque sed lacus dui, sit amet viverra velit. 
                                    Vivamus ut nunc in ante convallis rhoncus. 
                                    Phasellus <span class="label label-success">scelerisque</span> pretium tellus, et tincidunt tellus scelerisque at. 
                                    Nam in lacus velit. Nam mattis convallis ligula, in ultricies nibh pretium porttitor. 
                                    Nunc in ligula dolor.
                                </p>
                                <p>
                                    Praesent id nibh sapien.
                                    Ut laoreet sem non orci consequat in scelerisque lacus fermentum. 
                                    Etiam <span class="label label-info">odio</span> enim, consequat in adipiscing non, pulvinar eu orci. 
                                    Suspendisse nec nulla pretium turpis pellentesque eleifend. 
                                    <span class="label label-inverse">Nulla</span> pellentesque metus id purus tincidunt luctus id et magna. 
                                    Praesent tortor lorem, lobortis nec sodales lacinia, interdum in leo. 
                                    Sed enim quam, egestas vitae pellentesque eget, condimentum ut lectus. 
                                    Aenean id orci orci, ut <span class="label label-warning">fringilla</span> quam. Donec at suscipit nisl. 
                                    Sed nibh tortor, fringilla at mattis vitae, gravida non nisi.
                                    Nunc quam urna, <span class="label">interdum a bibendum</span> eu, sollicitudin sit amet massa.
                                    Vivamus egestas ullamcorper quam vitae adipiscing. Vestibulum non ultricies elit. 
                                    Aliquam pretium gravida ipsum, gravida facilisis nulla feugiat et.
                                </p>

                            </div>
                        </div>
                        <!--Labels end-->

                </div><!-- end container -->


                <div class="container-fluid">

                        <div class="form-legend" id="Badges">Badges</div>

                        <!--Badges begin-->
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Nunc <span class="badge badge-important">commodo elementum</span> dapibus.
                                    Pellentesque sed lacus dui, sit amet viverra velit. 
                                    Vivamus ut nunc in ante convallis rhoncus. 
                                    Phasellus <span class="badge badge-success">scelerisque</span> pretium tellus, et tincidunt tellus scelerisque at. 
                                    Nam in lacus velit. Nam mattis convallis ligula, in ultricies nibh pretium porttitor. 
                                    Nunc in ligula dolor.
                                </p>
                                <p>
                                    Praesent id nibh sapien.
                                    Ut laoreet sem non orci consequat in scelerisque lacus fermentum. 
                                    Etiam <span class="badge badge-info">odio</span> enim, consequat in adipiscing non, pulvinar eu orci. 
                                    Suspendisse nec nulla pretium turpis pellentesque eleifend. 
                                    <span class="badge badge-inverse">Nulla</span> pellentesque metus id purus tincidunt luctus id et magna. 
                                    Praesent tortor lorem, lobortis nec sodales lacinia, interdum in leo. 
                                    Sed enim quam, egestas vitae pellentesque eget, condimentum ut lectus. 
                                    Aenean id orci orci, ut <span class="badge badge-warning">fringilla</span> quam. Donec at suscipit nisl. 
                                    Sed nibh tortor, fringilla at mattis vitae, gravida non nisi.
                                    Nunc quam urna, <span class="badge">interdum a bibendum</span> eu, sollicitudin sit amet massa.
                                    Vivamus egestas ullamcorper quam vitae adipiscing. Vestibulum non ultricies elit. 
                                    Aliquam pretium gravida ipsum, gravida facilisis nulla feugiat et.
                                </p>

                            </div>
                        </div>
                        <!--Badges end-->

                </div><!-- end container -->


                <div class="container-fluid">

                        <div class="form-legend" id="Emphasis">Emphasis</div>

                        <!--Emphasis begin-->
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <p>
                                    <strong>Some bold text example.</strong>
                                </p>
                                <p>
                                    <em>Some italic text example.</em>
                                </p>
                                <p>
                                    <small>Some fine print text example.</small>
                                </p>
                                <p class="muted">
                                    Some dimmed text example.
                                </p>
                                <p class="text-info">
                                    Some informative text example.
                                </p>
                                <p class="text-success">
                                    Some success text notification example.
                                </p>
                                <p class="text-warning">
                                    Some warning text example.
                                </p>
                                <p class="text-error">
                                    Some error text example.
                                </p>

                            </div>
                        </div>
                        <!--Emphasis end-->

                </div><!-- end container -->


                <div class="container-fluid">

                        <div class="form-legend" id="Lists">Lists</div>

                        <!--Lists begin-->
                        <div class="row-fluid row-lists">
                            <div class="span4 span-inset">
                                <h4>Unordered List</h4>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Nunc commodo elementum dapibus</li>
                                    <li>Vivamus ut nunc in ante</li>
                                    <li>Tellus scelerisque at</li>
                                </ul>
                            </div>
                            <div class="span4 span-inset">
                                <h4>Ordered List</h4>
                                <ol>
                                    <li>Tellus scelerisque at</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Nunc commodo elementum dapibus</li>
                                    <li>Vivamus ut nunc in ante</li>
                                </ol>
                            </div>
                            <div class="span4 span-inset">
                                <h4>Letter List</h4>
                                <ol class="upper-alpha">
                                    <li>Vivamus ut nunc in ante</li>
                                    <li>Tellus scelerisque at</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Nunc commodo elementum dapibus</li>
                                </ol>
                            </div>
                        </div>
                        <div class="row-fluid row-lists">
                            <div class="span4 span-inset">
                                <h4>Roman List</h4>
                                <ol class="upper-roman">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Nunc commodo elementum dapibus</li>
                                    <li>Vivamus ut nunc in ante</li>
                                    <li>Tellus scelerisque at</li>
                                </ol>
                            </div>
                            <div class="span4 span-inset">
                                <h4>Ordered List w/ Leading Zero</h4>
                                <ol class="decimal-leading-zero">
                                    <li>Tellus scelerisque at</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Nunc commodo elementum dapibus</li>
                                    <li>Vivamus ut nunc in ante</li>
                                </ol>
                            </div>
                            <div class="span4 span-inset">
                                <h4>Letter Lowercase List</h4>
                                <ol class="lower-alpha">
                                    <li>Vivamus ut nunc in ante</li>
                                    <li>Tellus scelerisque at</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Nunc commodo elementum dapibus</li>
                                </ol>
                            </div>
                        </div>
                        <div class="row-fluid row-lists">
                            <div class="span4 span-inset">
                                <h4>Background Image Icons List</h4>
                                <ul class="image-icons-list">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Nunc commodo elementum dapibus</li>
                                    <li>Vivamus ut nunc in ante</li>
                                    <li>Tellus scelerisque at</li>
                                </ul>
                            </div>
                            <div class="span4 span-inset">
                                <h4>Font Icons List</h4>
                                <ul class="font-icons-list">
                                    <li class='check'>Tellus scelerisque at</li>
                                    <li class='check'>Consectetur adipiscing elit</li>
                                    <li class='check'>Lorem ipsum dolor sit amet</li>
                                    <li class='check'>Nunc commodo elementum dapibus</li>
                                    <li class='check'>Vivamus ut nunc in ante</li>
                                </ul>
                            </div>
                            <div class="span4 span-inset">
                                <h4>Inline Font Icons List</h4>
                                <ul class="inline-font-icons-list">
                                    <li><i class='icon-photon cog'></i>Vivamus ut nunc in ante</li>
                                    <li><i class='icon-photon aperture'></i>Tellus scelerisque at</li>
                                    <li><i class='icon-photon pin'></i>Consectetur adipiscing elit</li>
                                    <li><i class='icon-photon arrow_right'></i>Lorem ipsum dolor sit amet</li>
                                    <li><i class='icon-photon key_stroke'></i>Nunc commodo elementum dapibus</li>
                                </ul>
                            </div>
                        </div>
                        <!--Lists end-->

                </div><!-- end container -->

                <div class="container-fluid">

                        <div class="form-legend" id="Syntax_Highlighter">Syntax Highlighter</div>

                        <!--Syntax Highlighter begin-->
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <pre class="prettyprint">
$().ready(function() {

    // Bar Graph Widget

    var d1 = [];
    for (var i = 0; i &lt;= 30; i += 1)
        d1.push([i, parseInt(Math.random() * 30)]);

    var d2 = [];
    for (var i = 0; i &lt;= 30; i += 1)
        d2.push([i, parseInt(Math.random() * 30)]);

    $.plot($("#placeholder"), [ d1, d2 ], {
        grid: { show: true, borderWidth: 0.2 },
        xaxis: { show: true, ticks: 0 },
        yaxis: { show: true, ticks: 8, color: '#bbb'},
        colors: ["#aad5f5", "#008fde"],
        series: {
            stack: 0,
            fill: 1,
            bars: { show: true, barWidth: 0.9, lineWidth: 0, fill: 1 }
        }
    });
});
                                </pre>

                            </div>
                        </div>
                        <!--Syntax Highlighter end-->
                </div><!-- end container -->
            </form>
        </div>
    <?php include 'library/common/ga.php';?>
    </body>
</html>