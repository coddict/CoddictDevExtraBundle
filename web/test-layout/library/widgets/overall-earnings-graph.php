<!-- Overall Earnings Graph Widget begins -->
<script>
    $(window).load(function () {
        if (widgetsLoaded['overall-earnings-graph']) return;
        widgetsLoaded['overall-earnings-graph'] = true;
        var data = [];
        for( var i = 0; i < 3; i++) {
            data[i] = { label: "&nbsp;Series&nbsp;"+(i+1), data: Math.floor(Math.random()*100)+1 }
        }
        $.plot($("#donut"), data, {
            colors: ["#aad5f5", "#008fde", '#c6d695'],
            legend: { backgroundOpacity: 0 }, 
            series: {
                pie: { 
                    innerRadius: 0.5,
                    show: true
                }
            }
        });
        $(".overall-earnings-graph select").select2();
    });
</script>
<div class="widget-holder widget-white">
    <div class="widget-flipper">
        <div class="widget-area overall-earnings-graph skin-white widget-front">
            <div class="widget-head">
                Overall Earnings Graph
                <div>
                    <a href="javascript:;" onclick="flipit(this)"><i class='icon-photon cog'></i></a>
                </div>
            </div>
            <p class="widget-description">Morbi consequat felis vitae <a href="javascript:;">enim</a></p>
            <div id="donut" style="width:260px;height:129px;"></div>    
            <img class="widget-white-shadow" src="images/photon/w_shadow.png" alt="shadow"/>
        </div>
        <div class="widget-area overall-earnings-graph widget-back">
            <div class="widget-savehead">
                <a href="javascript:;" class="btn btn-mini btn-inverse" onclick="flipit(this)"><i class='icon-photon cog'></i>Done</a>
            </div>
            <form>
                <div class="container-fluid widget-settings">
                    <div class="control-group row-fluid">
                        <div class="span12">
                            <label class="control-label">Filter by Location:</label>
                        </div>
                    </div>
                    <div class="control-group row-fluid">
                        <div class="span12">
                            <div class="controls">
                                <select>
                                    <option selected="" value="Any">Any</option>
                                    <option value="Europe">Europe</option>
                                    <option value="Asia">Asia</option>
                                    <option value="North America">America</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="control-group row-fluid">
                        <div class="span12">
                            <label class="control-label">Filter by Period</label>
                        </div>
                    </div>
                    <div class="control-group row-fluid">
                        <div class="span12">
                            <div class="controls">
                                <select>
                                    <option selected="" value="Last Year">Last Year</option>
                                    <option value="Last Quarter">Last Quarter</option>
                                    <option value="Last Month">Last Month</option>
                                    <option value="Last Week">Last Week</option>
                                    <option value="Yesterday">Yesterday</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="control-group row-fluid">
                        <div class="span12">
                            <label class="control-label">Show Hidden</label>
                        </div>
                    </div>
                    <div class="control-group row-fluid">
                        <div class="span12">
                            <div class="controls">
                                <select>
                                    <option selected="" value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Only if Viking">Only if Viking</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Overall Earnings Graph Widget ends -->
