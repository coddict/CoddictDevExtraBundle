<!-- Clock Widget begins -->
<script>
    $().ready(function() {
        if (widgetsLoaded['clock-widget']) return;
        widgetsLoaded['clock-widget'] = true;

        $('#clock').clock({
            offset: '+0'
        });

        $(".clock-widget select").select2();
    });
</script>
<div class="widget-holder widget-white">
    <div class="widget-flipper">
        <div class="widget-area clock-widget skin-white widget-front">
            <div class="widget-head">
                Clock
                <div>
                    <a href="javascript:;" onclick="flipit(this)"><i class='icon-photon cog'></i></a>
                </div>
            </div>
            <ul id="clock" class="analog">	
                <li class="hour"></li>
                <li class="min"></li>
                <li class="sec"></li>
                <li class="meridiem"></li>
                <li class="timezone">LONDON</li>
            </ul>
            <img class="widget-white-shadow" src="images/photon/w_shadow.png" alt="shadow"/>
        </div>
        <div class="widget-area clock-widget widget-back">
            <div class="widget-savehead">
                <a href="javascript:;" class="btn btn-mini btn-inverse" onclick="flipit(this)"><i class='icon-photon cog'></i>Done</a>
            </div>
            <form>
                <div class="container-fluid widget-settings">
                    <div class="control-group row-fluid">
                        <div class="span12">
                            <label class="control-label">Timezone:</label>
                        </div>
                    </div>
                    <div class="control-group row-fluid">
                        <div class="span12">
                            <div class="controls">
                                <select>
                                    <option selected="" value="UTC">UTC</option>
                                    <option value="UTC1">UTC + 1</option>
                                    <option value="UTC2">UTC + 2</option>
                                    <option value="UTC3">UTC + 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Clock Widget ends -->
