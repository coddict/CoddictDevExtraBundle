<? include 'library/functions.php'; ?>
<? $filename = basename(__FILE__, ".php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?=$config[$filename]['pagetitle'];?></title>
        <?php include 'library/common/head.php'; ?>
        <?php include 'library/common/javascript.php'; ?>
        <script>
            $(document).ready(function(){
                $("#validation_form").validate({
                    errorElement: "span",
                    errorClass: "error",
                    onclick: true,
                    rules: {
                        "req": {
                            required: true
                        },
                        "numbers": {
                            required: false,
                            digits: true
                        },
                        "numbers_range": {
                            range: [1, 7]
                        },
                        "email": {
                            email: true
                        },
                        "url": {
                            url: true
                        }, 
                        "date": {
                            date: true
                        }
                    }
                });
            });
        </script>
        
    </head>

    <body class="body-inner">
        <? include 'library/common/main_menu.php'; ?>
        <? include 'library/common/user_menu.php'; ?>
        <? include 'library/common/panel.php'; ?>
        <div class="main-content<?=($_COOKIE["jsTreeMenu"] == 'retracted' ? ' retracted' : '');?>">
            <? include 'library/common/breadcrumbs.php'; ?>
            <header>
                <i class="icon-big-notepad"></i>
                <h2><small><?=$config[$filename]['h2'];?></small></h2>
                <h3><small><?=$config[$filename]['h3'];?></small></h3>
            </header>
            <form class="form-horizontal" id="validation_form">
                <div class="container-fluid">

                        <div class="form-legend" id="Inline_Validation">Inline Validation</div>
                        <!--Inline Validation begin-->
                        <div class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="req">Required Field</label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input id="req" class="required" name="req" type="text"/>
                                </div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="numbers">Numbers Only</label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input id="numbers" class=" required number" name="numbers" type="text"/>
                                </div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="numbers_range">Enter Number From 1 to 7</label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input id="numbers_range" name="numbers_range" type="text"/>
                                </div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="email">E-Mail</label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input id="email" name="email" type="text"/>
                                </div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="url">URL</label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input id="url" name="url" type="text"/>
                                </div>
                            </div>
                        </div>
                        <div class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="date">Date</label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input id="date" name="date" type="text"/>
                                </div>
                            </div>
                        </div>

                    <!--Inline Validation end-->
                </div><!-- end container -->
            </form>
        </div>
    <?php include 'library/common/ga.php';?>
    </body>
</html>