<!-- QR Code Generation Widget begins -->
<script>
    $().ready(function() {
        if (widgetsLoaded['qr-code-generation']) return;
        widgetsLoaded['qr-code-generation'] = true;

        $('#qrcode').qrcode({
            text: "http://themeforest.net",
            render  : "table",
            width		: 128,
            height		: 128
        });

        $(".qr-code-generation select").select2();
    });
</script>
<div class="widget-holder widget-white">
    <div class="widget-flipper">
        <div class="widget-area qr-code-generation skin-white widget-front">
            <div class="widget-head">
                QR Code Generation
                <div>
                    <a href="javascript:;" onclick="flipit(this)"><i class='icon-photon cog'></i></a>
                </div>
            </div>
            <p class="widget-description">Links to <a href="http://themeforest.net/">http://themeforest.net/</a></p>
            <div id="qrcode"></div>
            <img class="widget-white-shadow" src="images/photon/w_shadow.png" alt="shadow"/>
        </div>
        <div class="widget-area qr-code-generation widget-back">
            <div class="widget-savehead">
                <a href="javascript:;" class="btn btn-mini btn-inverse" onclick="flipit(this)"><i class='icon-photon cog'></i>Done</a>
            </div>
            <form>
                <div class="container-fluid widget-settings">
                    <div class="control-group row-fluid">
                        <div class="span12">
                            <label class="control-label">Filter by Product:</label>
                        </div>
                    </div>
                    <div class="control-group row-fluid">
                        <div class="span12">
                            <div class="controls">
                                <select>
                                    <option selected="" value="Any">Any</option>
                                    <option value="Standard">Standard</option>
                                    <option value="Extended">Extended</option>
                                    <option value="Premium">Premium</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- QR Code Generation Widget ends -->