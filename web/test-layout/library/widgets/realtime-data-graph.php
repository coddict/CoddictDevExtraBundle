<!-- Realtime Data Graph Widget begins -->
<script>
    $(window).load(function () {
        if (widgetsLoaded['realtime-data-graph']) return;
        widgetsLoaded['realtime-data-graph'] = true;

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
        var updateInterval = 600;
        var options = {
            series: {   shadowSize: 0, 
                lines: { show: true, fill:true, fillColor: { colors: [{opacity: 0.25}, {opacity: 0}] } }, 
                points: { show: true, radius: 2, color: '#008fde' }
            },
            grid: { show: true, borderWidth: 0.2 },
            xaxis: { show: true, ticks: 0 },
            yaxis: { show: true, min: 0, max: 100, ticks:8, color: '#bbb'},
            colors: ["#aad5f5"]
        };
        var plot = $.plot($("#realtime"), [ getRandomData() ], options);
        function update() {
            plot.setData([ getRandomData() ]);
            plot.draw();
            setTimeout(update, updateInterval);
        }
        update();

        $(".realtime-data-graph select").select2();
    });
</script>
<div class="widget-holder widget-white">
    <div class="widget-flipper">
        <div class="widget-area realtime-data-graph skin-white widget-front">
            <div class="widget-head">
                Realtime Data Graph
                <div>
                    <a href="javascript:;" onclick="flipit(this)"><i class='icon-photon cog'></i></a>
                </div>
            </div>
            <p class="widget-description">Morbi consequat felis vitae <a href="javascript:;">enim</a></p>    
            <div id="realtime" style="width:260px;height:133px;"></div>
            <img class="widget-white-shadow" src="images/photon/w_shadow.png" alt="shadow"/>
        </div>
        <div class="widget-area realtime-data-graph widget-back">
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
<!-- Realtime Data Graph Widget ends -->
