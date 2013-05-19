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
        <?include 'library/common/main_menu.php';?>
        <?include 'library/common/user_menu.php';?>
        <?include 'library/common/panel.php';?>
        <div class="main-content<?=($_COOKIE["jsTreeMenu"] == 'retracted' ? ' retracted' : '');?>">
            <?include 'library/common/breadcrumbs.php';?>
            <header>
                <i class="icon-big-notepad"></i>
                <h2><small><?=$config[$filename]['h2'];?></small></h2>
                <h3><small><?=$config[$filename]['h3'];?></small></h3>
            </header>
            <form class="form-horizontal">
                <div class="container-fluid">

                        <div class="form-legend" id="Input_Field">Input Fields</div>

                        <!--Input Field begin-->
                        <div class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputField">Input Field</label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input id="inputField" type="text" name="inputField" />
                                </div>
                            </div>
                        </div>
                        <!--Input Field end-->

                        <!--Input Field with Placeholder begin-->
                        <div id="Input_Field_with_Placeholder" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputFieldPlaceholder">Input Field With Placeholder</label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input id="inputFieldPlaceholder" type="text" placeholder="Please enter some data" name="inputFieldPlaceholder" />
                                </div>
                            </div>
                        </div>
                        <!--Input Field with Placeholder end-->

                        <!--Input Field with Auto Complete begin-->
                        <div id="Input_Field_with_Auto_Complete" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputFieldAC">Input Field with Auto Complete</label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input id="inputFieldAC" type="text" name="inputFieldAC" />
                                </div>
                            </div>
                            <!--Input Field with Auto Complete Script-->
                            <script>
                                $().ready(function(){
                                    var availableTags = [
                                        "ActionScript",
                                        "AppleScript",
                                        "Asp",
                                        "BASIC",
                                        "C",
                                        "C++",
                                        "Clojure",
                                        "COBOL",
                                        "ColdFusion",
                                        "Erlang",
                                        "Fortran",
                                        "Groovy",
                                        "Haskell",
                                        "Java",
                                        "JavaScript",
                                        "Lisp",
                                        "Perl",
                                        "PHP",
                                        "Python",
                                        "Ruby",
                                        "Scala",
                                        "Scheme"
                                    ];
                                    $( "#inputFieldAC" ).autocomplete({
                                        source: availableTags
                                    });
                                });            
                            </script>
                        </div>
                        <!--Input Field with Auto Complete end-->

                        <!--Input Field with Tooltip begin-->
                        <div id="Input_Field_with_Tooltip" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputFieldTooltip">
                                    Input Field With Tooltip<a href="javascript:;" class="bootstrap-tooltip" data-placement="top" data-original-title="Please enter some data."><i class="icon-photon info-circle"></i></a>
                                </label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input id="inputFieldTooltip" type="text" name="inputFieldTooltip" />
                                </div>
                            </div>
                        </div>
                        <!--Input Field with Tooltip end-->

                        <!--Input Field Disabled begin-->
                        <div id="Disabled_Input_Field" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputFieldDisabled">Disabled Input Field</label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input disabled id="inputFieldDisabled" type="text" name="inputFieldDisabled" />
                                </div>
                            </div>
                        </div>
                        <!--Input Field Disabled end-->

                        <!--Input Field with Counter begin-->
                        <div id="Input_Field_with_Counter" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputFieldCounter">Input Field with Counter</label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input id="inputFieldCounter" type="text" name="inputFieldCounter" />
                                </div>
                            </div>
                            <script>
                                $().ready(function(){
                                    $("#inputFieldCounter").charCount({
                                        allowed: 50,
                                        warning: 20,
                                        counterText: 'Characters left: '
                                    });
                                });
                            </script>
                        </div>
                        <!--Input Field with Counter end-->

                        <!--File Upload begin-->
                        <div id="File_Upload" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label">File Upload</label>
                            </div>
                            <div class="span9">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="input-append">
                                        <div class="uneditable-input span3"><i class="icon-file fileupload-exists"></i> <span class="fileupload-preview"></span></div><span class="btn btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span><input type="file" /></span><a href="javascript:;" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--File Upload end-->

                        <!--Drag And Drop Upload begin-->
                        <div id="Drag_And_Drop_Upload" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputField">
                                    Drag And Drop Upload<a href="javascript:;" class="bootstrap-tooltip" data-placement="top" data-original-title="Note that Internet Explorer versions earlier than 10 don't support drag and drop uploads or upload progress monitoring. You can still click to upload though."><i class="icon-photon info-circle"></i></a>
                                </label>
                            </div>
                            <div class="span9 row-fluid">
                                <div class="upload-boxes row-fluid">
                                    <div class="span3" id="upload"></div>
                                    <div class="span9" id="uploaded"></div>
                                </div>
                            </div>
                            <script type="text/javascript">
                            $().ready(function() {

                                var errors="";
                                
                                $('#upload').mfupload({
                                    
                                    type        : '',   //all types
                                    maxsize     : 2,
                                    post_upload : "./file-uploader.php",
                                    folder      : "./",
                                    ini_text    : "Drag your file(s) here or click (max: 2MB each)",
                                    over_text   : "Drop Here",
                                    over_col    : '#666666',
                                    over_bkcol  : '#f0f0f0',
                                    
                                    init        : function(){       
                                        $("#uploaded").empty();
                                    },
                                    
                                    start       : function(result){     
                                        $("#uploaded").append("<div id='FILE"+result.fileno+"' class='files'>"+result.filename+"<div class='progress progress-info progress-thin'><div class='bar' id='PRO"+result.fileno+"'></div></div></div>"); 
                                    },

                                    loaded      : function(result){
                                        $("#PRO"+result.fileno).remove();
                                        $("#FILE"+result.fileno).html("Uploaded: "+result.filename+" ("+result.size+")");           
                                    },

                                    progress    : function(result){
                                        $("#PRO"+result.fileno).css("width", result.perc+"%");
                                    },

                                    error       : function(error){
                                        errors += error.filename+": "+error.err_des+"\n";
                                    },

                                    completed   : function(){
                                        if (errors != "") {
                                            alert(errors);
                                            errors = "";
                                        }
                                    }
                                });     
                            })
                        </script>
                        </div>
                        <!--Drag And Drop Upload end-->


                </div><!-- end container -->

                <div class="container-fluid">

                        <div class="form-legend" id="Inside_the_12_Grid_System">Inside the 12 Grid System</div>
                        <!--12 Grid System begin-->
                        <div class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputSpan9">Grid 3 + 9 </label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input id="inputSpan9" type="text" name="inputSpan9" />
                                </div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputSpan8">Grid 3 + 8 </label>
                            </div>
                            <div class="span8">
                                <div class="controls">
                                    <input id="inputSpan8" type="text" name="inputSpan8" />
                                </div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputSpan6">Grid 3 + 6 </label>
                            </div>
                            <div class="span6">
                                <div class="controls">
                                    <input id="inputSpan6" type="text" name="inputSpan6" />
                                </div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputSpan4">Grid 3 + 4 </label>
                            </div>
                            <div class="span4">
                                <div class="controls">
                                    <input id="inputSpan4" type="text" name="inputSpan4" />
                                </div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputSpan2">Grid 3 + 2 </label>
                            </div>
                            <div class="span2">
                                <div class="controls">
                                    <input id="inputSpan2" type="text" name="inputSpan2" />
                                </div>
                            </div>
                        </div>
                        <!--12 Grid System end-->

                </div><!-- end container -->

                <div class="container-fluid">

                        <div class="form-legend" id="Inside_the_12_Grid_System_with_Offset">Inside the 12 Grid System with Offset</div>
                        <!--12 Grid System Offset begin-->
                        <div class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputSpanO2">Grid 3 + 7 + 2 </label>
                            </div>
                            <div class="offset7 span2">
                                <div class="controls">
                                    <input id="inputSpanO2" type="text" name="inputSpanO2" />
                                </div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputSpanO4">Grid 3 + 5 + 4 </label>
                            </div>
                            <div class="offset5 span4">
                                <div class="controls">
                                    <input id="inputSpanO4" type="text" name="inputSpanO4" />
                                </div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputSpanO6">Grid 3 + 3 + 6 </label>
                            </div>
                            <div class="offset3 span6">
                                <div class="controls">
                                    <input id="inputSpanO6" type="text" name="inputSpanO6" />
                                </div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputSpanO8">Grid 3 + 1 + 8 </label>
                            </div>
                            <div class="offset1 span8">
                                <div class="controls">
                                    <input id="inputSpanO8" type="text" name="inputSpanO8" />
                                </div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputSpanO9">Grid 3 + 0 + 9 </label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input id="inputSpanO9" type="text" name="inputSpanO9" />
                                </div>
                            </div>
                        </div>

                </div><!-- end container -->
            </form>
        </div>
    <?php include 'library/common/ga.php';?>
    </body>
</html>