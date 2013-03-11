<!-- Overall Views Graph Widget begins -->
<script>
    $(window).load(function () {
        if (widgetsLoaded['overall-views-graph']) return;
        widgetsLoaded['overall-views-graph'] = true;
        var d1 = [];
        for (var i = 0; i <= 30; i += 1)
            d1.push([i, parseInt(Math.random() * 30)]);
        var d2 = [];
        for (var i = 0; i <= 30; i += 1)
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

        $(".overall-views-graph select").select2();
    });
</script>
<div class="widget-holder widget-white">
    <div class="widget-flipper">
        <div class="widget-area overall-views-graph skin-white widget-front">
            <div class="widget-head">
                Overall Views Graph
                <div>
                    <a href="javascript:;" onclick="flipit(this)"><i class='icon-photon cog'></i></a>
                </div>
            </div>
            <p class="widget-description">Morbi consequat felis vitae <a href="javascript:;">enim</a></p>
            <div id="placeholder" style="width:260px;height:133px;"></div>
            <img class="widget-white-shadow" src="images/photon/w_shadow.png" alt="shadow"/>
        </div>
        <div class="widget-area overall-views-graph widget-back">
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
<!-- Overall Views Graph Widget ends -->
