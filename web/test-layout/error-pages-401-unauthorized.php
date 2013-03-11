<?include 'library/functions.php';?>
<?$filename = basename(__FILE__, ".php");?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?=$config[$filename]['pagetitle'];?></title>
        <?php include 'library/common/head.php';?>
        <?php include 'library/common/javascript.php';?>
        
    </head>

    <body class="body-inner">
        <div class="error-page error-4">
            <div class="error-block-wrapper">
                <div class="error-block">
                    <div class="error-left">
                        <h1 data-text="401">401</h1>
                        <span class="error-message">Sorry, there's been an error.</span>
                        <span class="error-details">
                            Unauthorized.<a href="#" class="bootstrap-tooltip" data-placement="top" data-original-title="The request was a valid request, but authentication is required and has failed or has not yet been provided."><i class="icon-photon info-circle"></i></a>
                        </span>
                    </div>
                    <div class="error-right">
                        <a href="dashboard.php"><i class="icon-photon home"></i></a>
                    </div>
                    <div class="error-search container-fluid">
                        <form class="form-horizontal" action="javascript:;">
                            <input id="panelSearch" placeholder="Search" type="text" name="panelSearch">
                            <button class="btn btn-search"></button>
                        </form>
                    </div>
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
                </div>
            </div>
        </div>
        <div class="dashboard-watermark"></div>
    <?php include 'library/common/ga.php';?>
    </body>
</html>