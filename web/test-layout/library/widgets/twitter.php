<!-- Twitter Widget begins -->
<script>
    $().ready(function() {
        if (widgetsLoaded['tweet-widget']) return;
        widgetsLoaded['tweet-widget'] = true;

        jqtweet.loadTweets({
            user: 'envato',
            numTweets: 1
        });

        $(".tweet-widget select").select2();
    });
</script>
<div class="widget-holder">
    <div class="widget-flipper">
        <div class="widget-area tweet-widget widget-front">
            <div class="widget-head">
                Twitter
                <div>
                    <a href="javascript:;" onclick="flipit(this)"><i class='icon-photon cog'></i></a>
                    <img src="images/photon/w_twitter@2x.png" alt="twitter"/>
                </div>
            </div>
            <p class="widget-description"><a href="https://twitter.com/envato" target="_blank">@envato</a>'s latest tweet:</p>    
            <div id="jqtwitter"></div>
        </div>

        <div class="widget-area tweet-widget widget-back">
            <div class="widget-savehead">
                <a href="javascript:;" class="btn btn-mini btn-inverse" onclick="flipit(this)"><i class='icon-photon cog'></i>Done</a>
            </div>
            <form>
                <div class="container-fluid widget-settings">
                    <div class="control-group row-fluid">
                        <div class="span12">
                            <label class="control-label">Show Users:</label>
                        </div>
                    </div>
                    <div class="control-group row-fluid">
                        <div class="span12">
                            <div class="controls">
                                <select>
                                    <option selected="" value="All">All</option>
                                    <option value="Only Following">Only Following</option>
                                    <option value="Only Followers">Only Followers</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Twitter Widget ends -->
