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
            $(document).ready(function(){
                $("#icon_pack img").hover(function(){
                    name = $(this).attr("src");
                    $(this).attr("src", name.replace("/icons/default/", "/icons/hover/"));
                }, function(){
                    name = $(this).attr("src");
                    $(this).attr("src", name.replace("/icons/hover/", "/icons/default/"));
                });
            });
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

                        <div class="form-legend" id="Notifications">Notifications</div>

                        <!--Notifications begin-->
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <div class="alert alert-info alert-block">
                                    <i class="icon-alert icon-alert-info"></i>
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>This is Information notification</strong>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac risus vel lorem lobortis mattis nec eu est.</span>
                                </div>
                                <div class="alert alert-success alert-block">
                                    <i class="icon-alert icon-alert-info"></i>
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>This is Success Notification</strong>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac risus vel lorem lobortis mattis nec eu est.</span>
                                </div>
                                <div class="alert alert-block">
                                    <i class="icon-alert icon-alert-info"></i>
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>This is Alert Notification</strong>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac risus vel lorem lobortis mattis nec eu est.</span>
                                </div>
                                <div class="alert alert-error alert-block">
                                    <i class="icon-alert icon-alert-info"></i>
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>This is Error Notification</strong>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac risus vel lorem lobortis mattis nec eu est.</span>
                                </div>
                            </div>
                        </div>
                        <!--Notifications end-->

                </div><!-- end container -->


                <div class="container-fluid">
                <!--Progress Bars begin-->

                        <div class="form-legend" id="Progress_Bars">Progress Bars Thin</div>
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <div class="progress progress-info progress-thin">
                                    <div class="bar" style="width: 25%"></div>
                                </div>
                                <div class="progress progress-success progress-thin">
                                    <div class="bar" style="width: 50%"></div>
                                </div>
                                <div class="progress progress-warning progress-thin">
                                    <div class="bar" style="width: 75%"></div>
                                </div>
                                <div class="progress progress-danger progress-thin">
                                    <div class="bar" style="width: 100%"></div>
                                </div>
                            </div>
                        </div>

                </div><!-- end container -->

                <div class="container-fluid">

                        <div class="form-legend">Progress Bars Thick</div>
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <div class="progress progress-info">
                                    <div class="bar" style="width: 25%"></div>
                                </div>
                                <div class="progress progress-success">
                                    <div class="bar" style="width: 50%"></div>
                                </div>
                                <div class="progress progress-warning">
                                    <div class="bar" style="width: 75%"></div>
                                </div>
                                <div class="progress progress-danger">
                                    <div class="bar" style="width: 100%"></div>
                                </div>
                            </div>
                        </div>

                </div><!-- end container -->

                <div class="container-fluid">

                        <div class="form-legend">Progress Bars Striped (Active and Static)</div>
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <div class="progress progress-info progress-striped progress-thin active">
                                    <div class="bar" style="width: 25%"></div>
                                </div>
                                <div class="progress progress-success progress-striped active">
                                    <div class="bar" style="width: 50%"></div>
                                </div>
                                <div class="progress progress-warning progress-striped progress-thin">
                                    <div class="bar" style="width: 75%"></div>
                                </div>
                                <div class="progress progress-danger progress-striped">
                                    <div class="bar" style="width: 100%"></div>
                                </div>
                            </div>
                        </div>

                <!--Progress Bars end-->
                </div><!-- end container -->


                <div id="Sliders" class="container-fluid">

                        <div class="form-legend">Sliders</div>
                      
                        <!--Sliders begin-->
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <div class="slider slider-blue"></div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <div class="slider-range slider-blue"></div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <div class="slider slider-green"></div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <div class="slider-range slider-green"></div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <div class="slider slider-orange"></div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <div class="slider-range slider-orange"></div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <div class="slider slider-red"></div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <div class="slider-range slider-red"></div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <div class="slider-vertical slider-blue">
                                    <span>88</span>
                                    <span>77</span>
                                    <span>55</span>
                                    <span>33</span>
                                    <span>40</span>
                                    <span>45</span>
                                    <span>70</span>
                                    <span>88</span>
                                    <span>77</span>
                                    <span>55</span>
                                    <span>33</span>
                                    <span>40</span>
                                    <span>45</span>
                                    <span>70</span>
                                    <span>88</span>
                                    <span>77</span>
                                    <span>55</span>
                                    <span>33</span>
                                    <span>40</span>
                                    <span>45</span>
                                    <span>70</span>
                                </div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <div class="slider-vertical slider-green">
                                    <span>88</span>
                                    <span>77</span>
                                    <span>55</span>
                                    <span>33</span>
                                    <span>40</span>
                                    <span>45</span>
                                    <span>70</span>
                                    <span>88</span>
                                    <span>77</span>
                                    <span>55</span>
                                    <span>33</span>
                                    <span>40</span>
                                    <span>45</span>
                                    <span>70</span>
                                    <span>88</span>
                                    <span>77</span>
                                    <span>55</span>
                                    <span>33</span>
                                    <span>40</span>
                                    <span>45</span>
                                    <span>70</span>
                                </div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <div class="slider-vertical slider-orange">
                                    <span>88</span>
                                    <span>77</span>
                                    <span>55</span>
                                    <span>33</span>
                                    <span>40</span>
                                    <span>45</span>
                                    <span>70</span>
                                    <span>88</span>
                                    <span>77</span>
                                    <span>55</span>
                                    <span>33</span>
                                    <span>40</span>
                                    <span>45</span>
                                    <span>70</span>
                                    <span>88</span>
                                    <span>77</span>
                                    <span>55</span>
                                    <span>33</span>
                                    <span>40</span>
                                    <span>45</span>
                                    <span>70</span>
                                </div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <div class="slider-vertical slider-red">
                                    <span>88</span>
                                    <span>77</span>
                                    <span>55</span>
                                    <span>33</span>
                                    <span>40</span>
                                    <span>45</span>
                                    <span>70</span>
                                    <span>88</span>
                                    <span>77</span>
                                    <span>55</span>
                                    <span>33</span>
                                    <span>40</span>
                                    <span>45</span>
                                    <span>70</span>
                                    <span>88</span>
                                    <span>77</span>
                                    <span>55</span>
                                    <span>33</span>
                                    <span>40</span>
                                    <span>45</span>
                                    <span>70</span>
                                </div>
                            </div>
                        </div>
                        <!--Sliders end-->

                </div><!--end container-->

                <script>
                    $(function(){
                        
                        var sliderSet = 50;
                        var sliderSet2 = 100;
                        $( ".slider" ).each(function() {
                            $(this).slider({
                                range: "min",
                                value: sliderSet,
                                min: 1,
                                max: 500,
                                slide: function( event, ui ) {}
                            });
                            sliderSet += 50;
                        });
                        $( ".slider-range" ).each(function() {
                            $(this).slider({
                                range: true,
                                min: 1,
                                max: 500,
                                values: [ sliderSet2, sliderSet2+150 ],
                                slide: function( event, ui ) {}
                            });
                            sliderSet2 += 50;
                        });
                        $( ".slider-vertical > span" ).each(function() {
                            // read initial values from markup and remove that
                            var value = parseInt( $( this ).text(), 10 );
                            $( this ).empty().slider({
                                value: value,
                                range: "min",
                                animate: true,
                                orientation: "vertical"
                            });
                        });
                    });
                </script>

                <div class="container-fluid">

                        <div class="form-legend" id="Tooltip_Positioning">Tooltip Positioning</div>

                        <!--Tooltip Positioning begin-->
                        <div class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label">
                                    Top tooltip:<a href="javascript:;" class="bootstrap-tooltip" data-placement="top" data-original-title="Top!">
                                        <i class="icon-photon info-circle"></i>
                                    </a>
                                </label>
                            </div>
                            <div class="span3">
                                <label class="control-label">
                                    Left tooltip:<a href="javascript:;" class="bootstrap-tooltip" data-placement="left" data-original-title="Left!">
                                        <i class="icon-photon info-circle"></i>
                                    </a>
                                </label>
                            </div>
                            <div class="span3">
                                <label class="control-label">
                                    Right tooltip:<a href="javascript:;" class="bootstrap-tooltip" data-placement="right" data-original-title="Right!">
                                        <i class="icon-photon info-circle"></i>
                                    </a>
                                </label>
                            </div>
                            <div class="span3">
                                <label class="control-label">
                                    Bottom tooltip:<a href="javascript:;" class="bootstrap-tooltip" data-placement="bottom" data-original-title="Below!">
                                        <i class="icon-photon info-circle"></i>
                                    </a>
                                </label>
                            </div>
                        </div>
                        <!--Tooltip Positioning end-->

                </div><!--end container-->

                <!--start container-->
                <div class="container-fluid">

                        <div class="form-legend" id="Tabs">Tabs</div>

                        <!--Tabs begin-->
                        <div class="control-group row-fluid span-inset">
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active"><a data-toggle="tab" href="#tab-example1">Example Tab 1</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-example2">Example Tab 2</a></li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="javascript:;">Dropdown Example Tab<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="tab" href="#dropdown1">Dropdown Item 1</a></li>
                                        <li><a data-toggle="tab" href="#dropdown2">Dropdown Item 2</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-example1" class="tab-pane fade active in">
                                    <h3>This is the first tab!</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                        Curabitur id erat vel nibh ultrices placerat. 
                                        Ut lobortis justo sed enim viverra porttitor. 
                                        Suspendisse potenti. Proin at elit est, eu mollis justo. 
                                        Nullam non nunc sed ante condimentum semper quis pellentesque quam. 
                                        Nunc non eros ac lacus auctor eleifend id non nibh. 
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. 
                                        Sed nisi dui, congue eu tincidunt in, auctor a odio. 
                                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                                        Donec vitae orci eu orci tempus sagittis. Maecenas lobortis neque non nulla suscipit tincidunt. 
                                        Aenean orci risus, pretium vel rutrum rutrum, aliquam nec lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    </p> 
                                </div>
                                <div id="tab-example2" class="tab-pane fade">
                                    <h3> This is the second tab!</h3>
                                    <p>Consectetur adipiscing elit. Duis egestas consequat diam, vel accumsan urna egestas eu. Mauris condimentum hendrerit dolor, id congue quam fermentum et. Cras eget elit nec metus adipiscing bibendum. Aliquam ac lacus lorem. In hac habitasse platea dictumst. Praesent in nibh vel felis consequat tincidunt. Donec pulvinar imperdiet enim id tincidunt. Sed tempus leo eget risus fermentum mattis vitae non augue. Mauris augue nisi, lacinia a lobortis et, luctus quis sapien.</p>
                                    <h4>Heading 4</h4> 
                                    <p>Malesuada sit amet feugiat vitae, porta nec nibh. Suspendisse ut est id elit placerat congue vestibulum ac nisl. Sed et varius velit. Aliquam quam risus, ornare sed suscipit quis, viverra vitae turpis. Curabitur aliquet semper orci eget blandit. Sed fermentum ante et felis porta accumsan. Suspendisse adipiscing commodo eros eget ullamcorper. Integer at turpis mi. Nam vestibulum lectus id eros mollis vulputate. Praesent eget arcu tellus, sed hendrerit urna.</p>
                                </div>
                                <div id="dropdown1" class="tab-pane fade">
                                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                                </div>
                                <div id="dropdown2" class="tab-pane fade">
                                    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
                                </div>
                            </div>
                        </div>
                        <!--Tabs end-->

                </div><!--end container-->

                <!--start container-->
                <div class="container-fluid">

                        <div class="form-legend" id="Icon_Packs">Icon Packs</div>

                        <!--Icon Packs begin-->
                        <div class="control-group row-fluid span-inset">
                            <div class="bs-docs-example">
                                <ul class="nav nav-tabs" id="iconsTab">
                                    <li class="active"><a data-toggle="tab" href="#icon_pack">Transparent PNG</a></li>
                                    <li class=""><a data-toggle="tab" href="#sprite_pack">Transparent PNG Sprite</a></li>
                                    <li class=""><a data-toggle="tab" href="#iconic-demo">Font-embedded - Iconic</a></li>
                                    <li class=""><a data-toggle="tab" href="#entypo-demo">Font-embedded - Entypo</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="icon_pack" class="tab-pane fade active in">
                                        <ul>
                                            <li><img src="images/photon/icons/default/ID.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/Scissors.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/add-item.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/addressbook.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/agent.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/apple.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/arrow-round.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/badge.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/bar-chart-02.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/bar-chart.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/battery-full.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/bird.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/boat.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/bookmark.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/briefcase.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/calculator.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/calendar.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/cassette.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/chain.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/chat-.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/chat-02.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/cloud-filled.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/cloud-outline.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/computer.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/configuration.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/configuration02.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/connected.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/connections.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/container.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/copy-item.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/database.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/delete-item.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/disc.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/dollar.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/download.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/edit.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/email.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/fan.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/fancy-globe.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/female-user.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/fire.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/first-aid.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/flag.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/flower.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/full-screen.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/glasses.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/globe.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/happy-face.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/headphone.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/heart.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/home.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/ipod.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/lab.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/lady.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/lamp.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/leaves.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/light.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/line-globe.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/lock.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/lookup.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/male-user.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/microphone.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/mobile.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/mobile2.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/mouse.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/multi-agents.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/music-node.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/network-pc.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/network.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/next-item.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/phone.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/pie-chart.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/pin.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/plane.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/print.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/processing-02.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/processing.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/push-pin.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/recycle-empty.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/recycle-full.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/reload.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/rss.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/satellite.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/save.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/scale.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/screen.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/search.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/server.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/shield.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/shut-down.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/star.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/tag.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/tap.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/tree.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/umbrella.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/unlock.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/usb.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/van.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/wifi.png" alt="icon"></li>
                                            <li><img src="images/photon/icons/default/world.png" alt="icon"></li>
                                        </ul>
                                    </div>
                                    <div id="sprite_pack" class="tab-pane fade">
                                        <ul id="mimi_glyphs">
                                            <li class="i_1 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_2 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_3 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_4 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_5 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_6 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_7 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_8 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_9 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_10 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_11 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_12 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_13 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_14 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_15 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_16 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_17 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_18 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_19 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_20 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_21 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_22 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_23 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_24 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_25 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_26 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_27 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_28 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_29 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_30 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_31 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_32 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_33 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_34 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_35 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_36 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_37 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_38 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_39 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_40 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_41 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_42 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_43 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_44 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_45 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_46 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_47 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_48 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_49 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_50 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_51 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_52 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_53 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_54 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_55 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_56 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_57 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_58 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_59 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_60 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_61 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_62 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_63 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_64 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_65 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_66 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_67 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_68 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_69 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_70 right" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowRight 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_71 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_72 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_73 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_74 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_75 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_76 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_77 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_78 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_79 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                            <li class="i_80 left" style="-webkit-transform: translateX(0); opacity: 1; -webkit-animation: firstRowLeft 1.2s cubic-bezier(0.2, 0.6, 0.3, 1); "></li>
                                        </ul>
                                    </div>
                                    <div id="iconic-demo" class="tab-pane fade iconic">
                                        <span class="lightbulb"></span>
                                        <span class="equalizer"></span>
                                        <span class="map_pin_stroke"></span>
                                        <span class="brush_alt"></span>
                                        <span class="move"></span>
                                        <span class="paperclip"></span>
                                        <span class="pen_alt_stroke"></span>
                                        <span class="move_vertical"></span>
                                        <span class="book_alt2"></span>
                                        <span class="layers"></span>
                                        <span class="pause"></span>
                                        <span class="layers_alt"></span>
                                        <span class="cloud_upload"></span>
                                        <span class="chart_alt"></span>
                                        <span class="fullscreen_exit_alt"></span>
                                        <span class="cloud_download"></span>
                                        <span class="comment_alt2_stroke"></span>
                                        <span class="mail"></span>
                                        <span class="check_alt"></span>
                                        <span class="document_stroke"></span>
                                        <span class="battery_charging"></span>
                                        <span class="stop"></span>
                                        <span class="arrow_up"></span>
                                        <span class="move_horizontal"></span>
                                        <span class="compass"></span>
                                        <span class="minus_alt"></span>
                                        <span class="battery_empty"></span>
                                        <span class="map_pin_alt"></span>
                                        <span class="unlock_stroke"></span>
                                        <span class="lock_stroke"></span>
                                        <span class="question_mark"></span>
                                        <span class="list"></span>
                                        <span class="upload"></span>
                                        <span class="reload"></span>
                                        <span class="loop_alt4"></span>
                                        <span class="loop_alt3"></span>
                                        <span class="loop_alt2"></span>
                                        <span class="loop_alt1"></span>
                                        <span class="left_quote"></span>
                                        <span class="x"></span>
                                        <span class="last"></span>
                                        <span class="document_alt_stroke"></span>
                                        <span class="bars"></span>
                                        <span class="arrow_left"></span>
                                        <span class="arrow_down"></span>
                                        <span class="download"></span>
                                        <span class="home"></span>
                                        <span class="calendar"></span>
                                        <span class="right_quote_alt"></span>
                                        <span class="fullscreen"></span>
                                        <span class="dial"></span>
                                        <span class="plus_alt"></span>
                                        <span class="clock"></span>
                                        <span class="movie"></span>
                                        <span class="steering_wheel"></span>
                                        <span class="pen"></span>
                                        <span class="tag_stroke"></span>
                                        <span class="pin"></span>
                                        <span class="denied"></span>
                                        <span class="left_quote_alt"></span>
                                        <span class="volume_mute"></span>
                                        <span class="arrow_up_alt2"></span>
                                        <span class="list_nested"></span>
                                        <span class="arrow_up_alt1"></span>
                                        <span class="comment_stroke"></span>
                                        <span class="undo"></span>
                                        <span class="umbrella"></span>
                                        <span class="bolt"></span>
                                        <span class="article"></span>
                                        <span class="read_more"></span>
                                        <span class="beaker"></span>
                                        <span class="beaker_alt"></span>
                                        <span class="battery_full"></span>
                                        <span class="arrow_right"></span>
                                        <span class="new_window"></span>
                                        <span class="plus"></span>
                                        <span class="cog"></span>
                                        <span class="key_stroke"></span>
                                        <span class="first"></span>
                                        <span class="comment_alt1_stroke"></span>
                                        <span class="trash_stroke"></span>
                                        <span class="image"></span>
                                        <span class="chat_alt_stroke"></span>
                                        <span class="cd"></span>
                                        <span class="right_quote"></span>
                                        <span class="brush"></span>
                                        <span class="cloud"></span>
                                        <span class="eye"></span>
                                        <span class="play_alt"></span>
                                        <span class="transfer"></span>
                                        <span class="pen_alt2"></span>
                                        <span class="camera"></span>
                                        <span class="move_horizontal_alt2"></span>
                                        <span class="curved_arrow"></span>
                                        <span class="move_horizontal_alt1"></span>
                                        <span class="aperture"></span>
                                        <span class="reload_alt"></span>
                                        <span class="magnifying_glass"></span>
                                        <span class="iphone"></span>
                                        <span class="fork"></span>
                                        <span class="box"></span>
                                        <span class="bars_alt"></span>
                                        <span class="heart_stroke"></span>
                                        <span class="volume"></span>
                                        <span class="x_alt"></span>
                                        <span class="link"></span>
                                        <span class="moon_stroke"></span>
                                        <span class="eyedropper"></span>
                                        <span class="spin"></span>
                                        <span class="rss"></span>
                                        <span class="info"></span>
                                        <span class="target"></span>
                                        <span class="cursor"></span>
                                        <span class="minus"></span>
                                        <span class="book_alt"></span>
                                        <span class="headphones"></span>
                                        <span class="hash"></span>
                                        <span class="arrow_left_alt1"></span>
                                        <span class="arrow_left_alt2"></span>
                                        <span class="fullscreen_exit"></span>
                                        <span class="share"></span>
                                        <span class="fullscreen_alt"></span>
                                        <span class="at"></span>
                                        <span class="chat"></span>
                                        <span class="move_vertical_alt2"></span>
                                        <span class="move_vertical_alt1"></span>
                                        <span class="check"></span>
                                        <span class="mic"></span>
                                        <span class="calendar_alt_stroke"></span>
                                        <span class="book"></span>
                                        <span class="move_alt1"></span>
                                        <span class="move_alt2"></span>
                                        <span class="award_stroke"></span>
                                        <span class="wrench"></span>
                                        <span class="play"></span>
                                        <span class="stars"></span>
                                        <span class="chart"></span>
                                        <span class="rain"></span>
                                        <span class="folder_stroke"></span>
                                        <span class="sun_stroke"></span>
                                        <span class="user"></span>
                                        <span class="battery_half"></span>
                                        <span class="aperture_alt"></span>
                                        <span class="eject"></span>
                                        <span class="arrow_down_alt1"></span>
                                        <span class="pilcrow"></span>
                                        <span class="arrow_down_alt2"></span>
                                        <span class="arrow_right_alt1"></span>
                                        <span class="arrow_right_alt2"></span>
                                        <span class="rss_alt"></span>
                                        <span class="spin_alt"></span>
                                    </div>

                                    <div id="entypo-demo" class="tab-pane fade entypo">
                                        <span title="phone">📞</span>
                                        <span title="mobile">📱</span>
                                        <span title="mouse"></span>
                                        <span title="address"></span>
                                        <span title="mail">✉</span>
                                        <span title="paper-plane">🔿</span>
                                        <span title="pencil">✎</span>
                                        <span title="feather">✒</span>
                                        <span title="attach">📎</span>
                                        <span title="inbox"></span>
                                        <span title="reply"></span>
                                        <span title="reply-all"></span>
                                        <span title="forward">➦</span>
                                        <span title="user">👤</span>
                                        <span title="users">👥</span>
                                        <span title="add-user"></span>
                                        <span title="vcard"></span>
                                        <span title="export"></span>
                                        <span title="location"></span>
                                        <span title="map"></span>
                                        <span title="compass">➢</span>
                                        <span title="direction"></span>
                                        <span title="hair-cross">🎯</span>
                                        <span title="share"></span>
                                        <span title="shareable"></span>
                                        <span title="heart">♥</span>
                                        <span title="heart-empty">♡</span>
                                        <span title="star">★</span>
                                        <span title="star-empty">☆</span>
                                        <span title="thumbs-up">👍</span>
                                        <span title="thumbs-down">👎</span>
                                        <span title="chat"></span>
                                        <span title="comment"></span>
                                        <span title="quote">❞</span>
                                        <span title="home">⌂</span>
                                        <span title="popup"></span>
                                        <span title="search">🔍</span>
                                        <span title="flashlight">🔦</span>
                                        <span title="print"></span>
                                        <span title="bell">🔔</span>
                                        <span title="link">🔗</span>
                                        <span title="flag">⚑</span>
                                        <span title="cog">⚙</span>
                                        <span title="tools">⚒</span>
                                        <span title="trophy">🏆</span>
                                        <span title="tag"></span>
                                        <span title="camera">📷</span>
                                        <span title="megaphone">📣</span>
                                        <span title="moon">☽</span>
                                        <span title="palette">🎨</span>
                                        <span title="leaf">🍂</span>
                                        <span title="note">♪</span>
                                        <span title="beamed-note">♫</span>
                                        <span title="new">💥</span>
                                        <span title="graduation-cap">🎓</span>
                                        <span title="book">📕</span>
                                        <span title="newspaper">📰</span>
                                        <span title="bag">👜</span>
                                        <span title="airplane">✈</span>
                                        <span title="lifebuoy"></span>
                                        <span title="eye"></span>
                                        <span title="clock">🕔</span>
                                        <span title="mic">🎤</span>
                                        <span title="calendar">📅</span>
                                        <span title="flash">⚡</span>
                                        <span title="thunder-cloud">⛈</span>
                                        <span title="droplet">💧</span>
                                        <span title="cd">💿</span>
                                        <span title="briefcase">💼</span>
                                        <span title="air">💨</span>
                                        <span title="hourglass">⏳</span>
                                        <span title="gauge">🛇</span>
                                        <span title="language">🎔</span>
                                        <span title="network"></span>
                                        <span title="key">🔑</span>
                                        <span title="battery">🔋</span>
                                        <span title="bucket">📾</span>
                                        <span title="magnet"></span>
                                        <span title="drive">📽</span>
                                        <span title="cup">☕</span>
                                        <span title="rocket">🚀</span>
                                        <span title="brush"></span>
                                        <span title="suitcase">🛆</span>
                                        <span title="traffic-cone">🛈</span>
                                        <span title="globe">🌎</span>
                                        <span title="keyboard">⌨</span>
                                        <span title="browser"></span>
                                        <span title="publish"></span>
                                        <span title="progress-3"></span>
                                        <span title="progress-2"></span>
                                        <span title="progress-1"></span>
                                        <span title="progress-0"></span>
                                        <span title="light-down">🔅</span>
                                        <span title="light-up">🔆</span>
                                        <span title="adjust">◑</span>
                                        <span title="code"></span>
                                        <span title="monitor">💻</span>
                                        <span title="infinity">∞</span>
                                        <span title="light-bulb">💡</span>
                                        <span title="credit-card">💳</span>
                                        <span title="database">📸</span>
                                        <span title="voicemail">✇</span>
                                        <span title="clipboard">📋</span>
                                        <span title="cart"></span>
                                        <span title="box">📦</span>
                                        <span title="ticket">🎫</span>
                                        <span title="rss"></span>
                                        <span title="signal">📶</span>
                                        <span title="thermometer">📿</span>
                                        <span title="water">💦</span>
                                        <span title="sweden"></span>
                                        <span title="line-graph">📈</span>
                                        <span title="pie-chart">◴</span>
                                        <span title="bar-graph">📊</span>
                                        <span title="area-graph">🔾</span>
                                        <span title="lock">🔒</span>
                                        <span title="lock-open">🔓</span>
                                        <span title="logout"></span>
                                        <span title="login"></span>
                                        <span title="check">✓</span>
                                        <span title="cross">❌</span>
                                        <span title="squared-minus">⊟</span>
                                        <span title="squared-plus">⊞</span>
                                        <span title="squared-cross">❎</span>
                                        <span title="circled-minus">⊖</span>
                                        <span title="circled-plus">⊕</span>
                                        <span title="circled-cross">✖</span>
                                        <span title="minus">➖</span>
                                        <span title="plus">➕</span>
                                        <span title="erase">⌫</span>
                                        <span title="block">🚫</span>
                                        <span title="info">ℹ</span>
                                        <span title="circled-info"></span>
                                        <span title="help"> ❓ </span>
                                        <span title="circled-help"></span>
                                        <span title="warning">⚠</span>
                                        <span title="cycle">🔄</span>
                                        <span title="cw">⟳</span>
                                        <span title="ccw">⟲</span>
                                        <span title="shuffle">🔀</span>
                                        <span title="back">🔙</span>
                                        <span title="level-down">↳</span>
                                        <span title="retweet"></span>
                                        <span title="loop">🔁</span>
                                        <span title="back-in-time"></span>
                                        <span title="level-up">↰</span>
                                        <span title="switch">⇆</span>
                                        <span title="numbered-list"></span>
                                        <span title="add-to-list"></span>
                                        <span title="layout">⚏</span>
                                        <span title="list">☰</span>
                                        <span title="text-doc">📄</span>
                                        <span title="text-doc-inverted"></span>
                                        <span title="doc"></span>
                                        <span title="docs"></span>
                                        <span title="landscape-doc"></span>
                                        <span title="picture">🌄</span>
                                        <span title="video">🎬</span>
                                        <span title="music">🎵</span>
                                        <span title="folder">📁</span>
                                        <span title="archive"></span>
                                        <span title="trash"></span>
                                        <span title="upload">📤</span>
                                        <span title="download">📥</span>
                                        <span title="save">💾</span>
                                        <span title="install"></span>
                                        <span title="cloud">☁</span>
                                        <span title="upload-cloud"></span>
                                        <span title="bookmark">🔖</span>
                                        <span title="bookmarks">📑</span>
                                        <span title="open-book">📖</span>
                                        <span title="play">▶</span>
                                        <span title="paus">‖</span>
                                        <span title="record">●</span>
                                        <span title="stop">■</span>
                                        <span title="ff">⏩</span>
                                        <span title="fb">⏪</span>
                                        <span title="to-start">⏮</span>
                                        <span title="to-end">⏭</span>
                                        <span title="resize-full"></span>
                                        <span title="resize-small"></span>
                                        <span title="volume">⏷</span>
                                        <span title="sound">🔊</span>
                                        <span title="mute">🔇</span>
                                        <span title="flow-cascade">🕨</span>
                                        <span title="flow-branch">🕩</span>
                                        <span title="flow-tree">🕪</span>
                                        <span title="flow-line">🕫</span>
                                        <span title="flow-parallel">🕬</span>
                                        <span title="left-bold"></span>
                                        <span title="down-bold"></span>
                                        <span title="up-bold"></span>
                                        <span title="right-bold"></span>
                                        <span title="left">⬅</span>
                                        <span title="down">⬇</span>
                                        <span title="up">⬆</span>
                                        <span title="right">➡</span>
                                        <span title="circled-left"></span>
                                        <span title="circled-down"></span>
                                        <span title="circled-up"></span>
                                        <span title="circled-right"></span>
                                        <span title="triangle-left">◂</span>
                                        <span title="triangle-down">▾</span>
                                        <span title="triangle-up">▴</span>
                                        <span title="triangle-right">▸</span>
                                        <span title="chevron-left"></span>
                                        <span title="chevron-down"></span>
                                        <span title="chevron-up"></span>
                                        <span title="chevron-right"></span>
                                        <span title="chevron-small-left"></span>
                                        <span title="chevron-small-down"></span>
                                        <span title="chevron-small-up"></span>
                                        <span title="chevron-small-right"></span>
                                        <span title="chevron-thin-left"></span>
                                        <span title="chevron-thin-down"></span>
                                        <span title="chevron-thin-up"></span>
                                        <span title="chevron-thin-right"></span>
                                        <span title="left-thin">←</span>
                                        <span title="down-thin">↓</span>
                                        <span title="up-thin">↑</span>
                                        <span title="right-thin">→</span>
                                        <span title="arrow-combo"></span>
                                        <span title="three-dots">⏶</span>
                                        <span title="two-dots">⏵</span>
                                        <span title="dot">⏴</span>
                                        <span title="cc">🕅</span>
                                        <span title="cc-by">🕆</span>
                                        <span title="cc-nc">🕇</span>
                                        <span title="cc-nc-eu">🕈</span>
                                        <span title="cc-nc-jp">🕉</span>
                                        <span title="cc-sa">🕊</span>
                                        <span title="cc-nd">🕋</span>
                                        <span title="cc-pd">🕌</span>
                                        <span title="cc-zero">🕍</span>
                                        <span title="cc-share">🕎</span>
                                        <span title="cc-remix">🕏</span>
                                        <span title="db-logo">🗹</span>
                                        <span title="db-shape">🗺</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Icon Packs end-->

                    <script type="text/javascript">
                        $('#icon_pack li').each(function () {
                            var title = $(this).find('img').attr('src');
                            var fileNameIndex = title.lastIndexOf("/") + 1;
                            var title = "Filename:<br>" + title.substr(fileNameIndex);
                            $(this).tooltip({
                                title: title,
                                html: true
                            });
                        });
                        $('#sprite_pack li').each(function () {
                            var title = "Sprite background position:<br>" + $(this).css('background-position-x') + ' ' + $(this).css('background-position-y');
                            $(this).tooltip({
                                title: title,
                                html: true
                            });
                        });
                        $('.iconic span').each(function () {
                            var title = $(this).attr('class');
                            $(this).tooltip({
                                title: title
                            });
                        });
                        $('.entypo span').tooltip({});
                    </script>
                </div>
                <!--end container-->

                <!--start container-->
                <div class="container-fluid">

                        <div class="form-legend" id="Spinners">Spinners</div>

                        <!--Spinners begin-->
                        <div class="control-group row-fluid">
                            <div class="span12">
                                <ul class="spinners">
                                    <li><img src="images/photon/preloader/130.gif" alt="loader" /></li>
                                    <li><img src="images/photon/preloader/2.gif" alt="loader"/></li>
                                    <li><img src="images/photon/preloader/20.gif" alt="loader"/></li>
                                    <li><img src="images/photon/preloader/22.gif" alt="loader"/></li>
                                    <li><img src="images/photon/preloader/239.gif" alt="loader"/></li>
                                    <li><img src="images/photon/preloader/282.gif" alt="loader"/></li>
                                    <li><img src="images/photon/preloader/284.gif" alt="loader"/></li>
                                    <li><img src="images/photon/preloader/3.gif" alt="loader"/></li>
                                    <li><img src="images/photon/preloader/301.gif" alt="loader"/></li>
                                    <li><img src="images/photon/preloader/320.gif" alt="loader"/></li>
                                    <li><img src="images/photon/preloader/325.gif" alt="loader"/></li>
                                    <li><img src="images/photon/preloader/328.gif" alt="loader"/></li>
                                    <li><img src="images/photon/preloader/332.gif" alt="loader"/></li>
                                    <li><img src="images/photon/preloader/334.gif" alt="loader"/></li>
                                    <li><img src="images/photon/preloader/76.gif" alt="loader"/></li>
                                    <li><img src="images/photon/preloader/82.gif" alt="loader"/></li>
                                </ul>
                            </div>
                        </div>
                        <!--Spinners end-->

                </div><!--end container-->

                <!--start container-->
                <div class="container-fluid">

                        <div class="form-legend" id="Dialogs">Dialogs</div>

                        <!--Dialogs begin-->
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <a href="#modal-dialog" role="button" class="btn" data-toggle="modal">Modal Dialog</a>
                                <button type="button" data-toggle="modal" data-target="#modal-notification" class="btn btn-success">Modal Notification</button>
                            </div>
                        </div>
                        <!--Dialogs end-->

                </div><!--end container-->

                <!--start container-->
                <div class="container-fluid">

                        <div class="form-legend" id="Growl-like_Notifications">Growl-like Notifications</div>

                        <!--Growl-like Notifications begin-->
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <button class="btn btn-success" onclick="$.pnotify({
                                    title: 'Basic Notification',
                                    type: 'info',
                                    text: 'I am your basic notification.'
                                }); return false;">Basic Notification</button>
                                <button class="btn" onclick="$.pnotify({
                                title: 'Transparent Notification',
                                text: 'I am a transparent notification. You can hardly see me, good for less important stuff.',
                                type: 'info',
                                opacity: .75
                            }); return false;">Transparent Notification</button>
                                <button class="btn btn-danger" onclick="$.pnotify({
                            title: 'Sticky Notification',
                            text: 'I am a sticky notification. I won\'t go away, you\'ll have to close me yourself!',
                            type: 'error',
                            type: 'info',
                            hide: false
                        }); return false;">Sticky Notification</button>
                                <button class="btn btn-warning" onclick="$.pnotify({
                        title: 'Long-Life Notification',
                        text: 'I am a long-life notification, I\'ll stay around longer than others.',
                        type: 'info',
                        delay: '10000'
                    }); return false;">Long-life Notification</button>
                                <button class="btn btn-info" onclick="$.pnotify({
                    title: 'Non-blocking Notification',
                    text: 'I am a non-blocking notification. You can click behind me, I won\'t bother you.',
                    type: 'info',
                    nonblock: true,
                    nonblock_opacity: .2
                }); return false;">Non-blocking Notification</button>
                            </div>
                        </div>
                        <!--Growl-like Notifications end-->

                </div><!--end container-->

                <div class="container-fluid no-outter-border">

                    <!--Accordion begin-->
                    <div id="Accordion" class="accordion">
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#Accordion" href="#collapseOne">
                                    Accordion Section 1
                                </a>
                            </div>
                            <div id="collapseOne" class="accordion-body collapse in">
                                <div class="accordion-inner">
                                    <p>
                                        Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#Accordion" href="#collapseTwo">
                                    Accordion Section 2
                                </a>
                            </div>
                            <div id="collapseTwo" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>
                                        Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In suscipit faucibus urna.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#Accordion" href="#collapseThree">
                                    Accordion Section 3
                                </a>
                            </div>
                            <div id="collapseThree" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>
                                        Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#Accordion" href="#collapseFour">
                                    Accordion Section 4
                                </a>
                            </div>
                            <div id="collapseFour" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>
                                        Cras dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia mauris vel est.
                                        Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                                    </p>
                                    <p>
                                        Nam enim risus, molestie et, porta ac.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Accordion end-->
                </div><!-- end container -->

                <!--start container-->
                <div class="container-fluid">

                        <div class="form-legend" id="Pagination">Pagination</div>

                        <!--Pagination begin-->
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <div class="pagination pagination-large">
                                    <ul>
                                        <li><a href="javascript:;">«</a></li>
                                        <li><a href="javascript:;">1</a></li>
                                        <li><a href="javascript:;">2</a></li>
                                        <li><a href="javascript:;">3</a></li>
                                        <li><a href="javascript:;">4</a></li>
                                        <li><a href="javascript:;">»</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <div class="pagination">
                                    <ul>
                                        <li><a href="javascript:;">«</a></li>
                                        <li><a href="javascript:;">1</a></li>
                                        <li><a href="javascript:;">2</a></li>
                                        <li><a href="javascript:;">3</a></li>
                                        <li><a href="javascript:;">4</a></li>
                                        <li><a href="javascript:;">5</a></li>
                                        <li><a href="javascript:;">6</a></li>
                                        <li><a href="javascript:;">»</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span12 span-inset">
                                <div class="pagination pagination-mini">
                                    <ul>
                                        <li><a href="javascript:;">«</a></li>
                                        <li><a href="javascript:;">1</a></li>
                                        <li><a href="javascript:;">2</a></li>
                                        <li><a href="javascript:;">3</a></li>
                                        <li><a href="javascript:;">4</a></li>
                                        <li><a href="javascript:;">5</a></li>
                                        <li><a href="javascript:;">6</a></li>
                                        <li><a href="javascript:;">»</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Pagination end-->

                </div><!--end container-->

            </form>
        </div>

        <!--Modal Dialogs' HTML begin-->
        <div id="modal-dialog" class="modal hide fade">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3>Modal Dialog</h3>
            </div>
            <div class="modal-body">
                <p>Malesuada sit amet feugiat vitae, porta nec nibh. Suspendisse ut est id elit placerat congue vestibulum ac nisl. Sed et varius velit. Aliquam quam risus, ornare sed suscipit quis, viverra vitae turpis. Curabitur aliquet semper orci eget blandit. Sed fermentum ante et felis porta accumsan. Suspendisse adipiscing commodo eros eget ullamcorper. Integer at turpis mi.</p>
            </div>
            <div class="modal-footer">
                <a href="javascript:;" class="btn btn-primary">Save Changes</a>
                <a href="javascript:;" class="btn" data-dismiss="modal">Ignore Changes</a>
            </div>
        </div>
        <div id="modal-notification" class="modal hide fade">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3>Modal Notification</h3>
            </div>
            <div class="modal-body">
                <p>Sed et varius velit. Aliquam quam risus, ornare sed suscipit quis mi.</p>
            </div>
            <div class="modal-footer modal-centered">
                <a href="javascript:;" class="btn btn-large btn-success" data-dismiss="modal">Great!</a>
            </div>
        </div>
        <!--Modal Dialogs' HTML end-->

    <?php include 'library/common/ga.php';?>
    </body>
</html>