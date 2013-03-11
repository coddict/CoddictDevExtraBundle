
<div class="panel<?=($_COOKIE["jsTreeMenu"] == 'retracted' ? ' retracted' : '');?>">
    <div class="panel-content filler">
        <div class="panel-logo"></div>
        <div class="panel-header">
            <h1><small><?=$config[$filename]['title'];?></small></h1>
<? if ($config[$filename]['addnew']): ?>
            <button type="submit" class="btn btn-mini"><i class="icon-photon move_alt2"></i> Add New</button>
<? endif; ?>
        </div>
        <div class="panel-search container-fluid">
            <form class="form-horizontal" action="javascript:;">
                <input id="panelSearch" placeholder="Search" type="text" name="panelSearch">
                <button class="btn btn-search"></button>
                <script>
                    $().ready(function(){
                        var searchTags = [
                            "Dashboard",
                            "Form Elements",
                            "Graphs and Statistics",
                            "Typography",
                            "Grid",
                            "Tables",
                            "Maps",
                            "Sidebar Widgets",
                            "Error Pages",
                            "Help",
                            "Input Fields",
                            "Masked Input Fields",
                            "Autotabs",
                            "Text Areas",
                            "Select Menus",
                            "Other Form Elements",
                            "Form Validation",
                            "UI Elements",
                            "Graphs",
                            "Statistical Elements",
                            "400 Bad Request",
                            "401 Unauthorized",
                            "403 Forbidden",
                            "404 Page Not Found",
                            "500 Internal Server Error",
                            "503 Service Unavailable"
                        ];
                        $( "#panelSearch" ).autocomplete({
                            source: searchTags
                        });
                    });            
                </script>
            </form>
        </div>
        <?if (file_exists('library/jstree_menu/' . $filename . '.php')) include 'library/jstree_menu/' . $filename . '.php'; else include 'library/jstree_menu/default.php';?>
    </div>
    <div class="panel-slider">
        <div class="panel-slider-center">
            <div class="panel-slider-arrow"></div>
        </div>
    </div>
</div>
