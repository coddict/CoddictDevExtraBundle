<!-- Countdown Widget begins -->
<script>
    $().ready(function() {
        if (widgetsLoaded['countdown']) return;
        widgetsLoaded['countdown'] = true;

        $('#counter').countdown({
            image: 'images/photon/digits.png',
            startTime: '12:05',
            format: 'mm:ss'
        });

        $(".countdown select").select2();
    });
</script>
<div class="widget-holder widget-white">
    <div class="widget-flipper">
        <div class="widget-area countdown skin-white widget-front">
            <div class="widget-head">
                Time Until Next Release
                <div>
                    <a href="javascript:;" onclick="flipit(this)"><i class='icon-photon cog'></i></a>
                </div>
            </div>
            <p class="widget-description">Morbi consequat felis vitae <a href="javascript:;">enim</a></p>    
            <div id="counter"></div>
            <img class="widget-white-shadow" src="images/photon/w_shadow.png" alt="shadow"/>
        </div>
        <div class="widget-area countdown widget-back">
            <div class="widget-savehead">
                <a href="javascript:;" class="btn btn-mini btn-inverse" onclick="flipit(this)"><i class='icon-photon cog'></i>Done</a>
            </div>
            <form>
                <div class="container-fluid widget-settings">
                    <div class="control-group row-fluid">
                        <div class="span12">
                            <label class="control-label">Estimated Time Before:</label>
                        </div>
                    </div>
                    <div class="control-group row-fluid">
                        <div class="span12">
                            <div class="controls">
                                <select>
                                    <option selected="" value="Alpha">Alpha</option>
                                    <option value="Beta">Beta</option>
                                    <option value="Live">Live</option>
                                    <option value="Version 1.1">Version 1.1</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Countdown Widget ends -->
