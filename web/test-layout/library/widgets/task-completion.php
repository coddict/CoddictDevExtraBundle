<!-- Task Completion Widget begins -->
<script>
    $().ready(function() {
        if (widgetsLoaded['task-completion']) return;
        widgetsLoaded['task-completion'] = true;
        setTimeout(function() {
            var target = parseInt($('.processed-pct .bar').attr('data-target'));
            $('.processed-pct .bar').attr('style', 'width: ' + target + '%');
        }, 1000);

        $(".task-completion select").select2();
    });
</script>
<div class="widget-holder">
    <div class="widget-flipper">
        <div class="widget-area task-completion widget-front">
            <div class="widget-head">
                Task Completion
                <div>
                    <a href="javascript:;" onclick="flipit(this)"><i class='icon-photon cog'></i></a>
                    <img src="images/photon/w_task@2x.png" alt="arrows"/>
                </div>
            </div>
            <ul>
                <li>
                    Processed orders
                    <span>56</span>
                </li>
                <li>Pending orders
                    <span>14</span>
                </li>
                <li>Unproc. orders
                    <span>12</span>
                </li>
                <li class="processed-pct">
                    Processed orders:&nbsp;&nbsp;<span>63</span>
                    <div class="progress progress-info">
                        <div class="bar" data-target="63" style="width: 0;"></div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="widget-area task-completion widget-back">
            <div class="widget-savehead">
                <a href="javascript:;" class="btn btn-mini btn-inverse" onclick="flipit(this)"><i class='icon-photon cog'></i>Done</a>
            </div>
            <form>
                <div class="container-fluid widget-settings">
                    <div class="control-group row-fluid">
                        <div class="span12">
                            <label class="control-label">Filter by Task:</label>
                        </div>
                    </div>
                    <div class="control-group row-fluid">
                        <div class="span12">
                            <div class="controls">
                                <select>
                                    <option selected="" value="Any">Any</option>
                                    <option value="Strategic">Strategic</option>
                                    <option value="Operational">Operational</option>
                                    <option value="Tactical">Tactical</option>
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
<!-- Task Completion Widget ends -->
