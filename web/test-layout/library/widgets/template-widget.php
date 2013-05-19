<!-- Template widget begins -->
<script>
    $().ready(function() {
        // CHECK IF WIDGET IS ALREADY INITIATED, IF IT IS, DON'T TRY TO INITIATE IT AGAIN
        // USE YOUR OWN WIDGET NAME INSTEAD OF template-widget
        if (widgetsLoaded['template-widget']) return;
        widgetsLoaded['template-widget'] = true;
       
       // WIDGET INITIATION CODE GOES HERE
    });
</script>
<div class="widget-holder">
	<div class="widget-flipper">
	    <div class="widget-area template-widget widget-front">
            <div class="widget-head">
                Front Side Title Here
                <div>
                    <a href="javascript:;" onclick="flipit(this)"><i class='icon-photon cog'></i></a>
                </div>
            </div>
           <!-- front side body html -->
	    </div>
        <div class="widget-area template-widget widget-back">
            <div class="widget-head">
                Back Side Title Here
                <div>
                    <a href="javascript:;" onclick="flipit(this)"><i class='icon-photon cog'></i></a>
                </div>
            </div>
               <!-- back side body html -->
        </div>
	</div>
</div>
<!-- Template widget ends -->
