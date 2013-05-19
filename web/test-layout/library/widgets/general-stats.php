<!-- General Stats Widget begin -->
<script>
    $().ready(function() {
        $(".widget-general-stats select").select2();
    });
</script>
<div class="widget-holder">
    <div class="widget-flipper">
        <div class="widget-area widget-general-stats widget-front">
            <div class="widget-head">
                General Stats
                <div>
                    <a href="javascript:;" onclick="flipit(this)"><i class='icon-photon cog'></i></a>
                    <img src="images/photon/w_arrows@2x.png" alt="Arrows"/>
                </div>
            </div>
            <ul>
                <li>
                    <span>1,432</span>&nbsp;Registered Users
                    <div>
                        <span>+0.6%</span>
                        <img src="images/photon/w_arrow_green@2x.png" alt="Arrow up"/>
                    </div>
                </li>
                <li>
                    <span>$1,132</span>&nbsp;Revenue
                    <div>
                        <span>+1.4%</span>
                        <img src="images/photon/w_arrow_green@2x.png" alt="Arrow up"/>
                    </div>
                </li>
                <li>
                    <span>253</span>&nbsp;Viking Users
                    <div>
                        <span>-0.9%</span>
                        <img src="images/photon/w_arrow_red@2x.png" alt="Arrow up"/>
                    </div>
                </li>
                <li>
                    <span>586</span>&nbsp;Lorem ipsum
                    <div>
                        <span>+2.8%</span>
                        <img src="images/photon/w_arrow_green@2x.png" alt="Arrow up"/>
                    </div>
                </li>
                <li>
                    <span>1,245</span> 
                    &nbsp;Dolorem Sit
                    <div>
                        <span>-0.6%</span>
                        <img src="images/photon/w_arrow_red@2x.png" alt="Arrow up"/>
                    </div>
                </li>
            </ul>
        </div>

        <div class="widget-area widget-general-stats widget-back">
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
<!-- General Stats Widget end -->
