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

                        <div class="form-legend">Input Fields</div>

                        <!--Input Data-->
                        <div id="Date" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputDate">Date<a href="javascript:;" class="bootstrap-tooltip" data-placement="top" data-original-title="(##/##/####)"><i class="icon-photon info-circle"></i></a></label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input id="inputDate" type="text" name="inputDate" />
                                    <script>
                                        $(document).ready(function(){
                                            $('#inputDate').mask('99/99/9999');
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!--end Input Data-->

                        <!--Input Phone-->
                        <div id="Phone" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputPhone">Phone<a href="javascript:;" class="bootstrap-tooltip" data-placement="top" data-original-title="(###) ###-####"><i class="icon-photon info-circle"></i></a></label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input id="inputPhone" type="tel" name="inputPhone" />
                                    <script>
                                        $(document).ready(function(){
                                            $('#inputPhone').mask('(999) 999-9999');
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!--end Input Phone-->

                        <!--Input PhoneExit-->
                        <div id="Phone_and_Exit" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputPhoneExit">Phone and Exit<a href="javascript:;" class="bootstrap-tooltip" data-placement="top" data-original-title="(###) ###-#### x#####"><i class="icon-photon info-circle"></i></a></label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input id="inputPhoneExit" type="tel" name="inputPhoneExit" />
                                    <script>
                                        $(document).ready(function(){
                                            $('#inputPhoneExit').mask("(999) 999-9999? x99999");
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!--end Input PhoneExit-->

                        <!--Input IntPhone-->
                        <div id="Int_Phone" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputIntPhone">Int Phone<a href="javascript:;" class="bootstrap-tooltip" data-placement="top" data-original-title="+33 (###) ###-####"><i class="icon-photon info-circle"></i></a></label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input id="inputIntPhone" type="tel" name="inputIntPhone" />
                                    <script>
                                        $(document).ready(function(){
                                            $('#inputIntPhone').mask("+33 (999) (999-9999)");
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!--end Input IntPhone-->

                        <!--Input TaxID-->
                        <div id="Tax_ID" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputTaxID">Tax ID<a href="javascript:;" class="bootstrap-tooltip" data-placement="top" data-original-title="##-#######"><i class="icon-photon info-circle"></i></a></label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input id="inputTaxID" type="text" name="inputTaxID" />
                                    <script>
                                        $(document).ready(function(){
                                            $('#inputTaxID').mask("99-9999999");
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!--end Input TaxID-->

                        <!--Input SSN-->
                        <div id="SSN" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputSSN">SSN<a href="javascript:;" class="bootstrap-tooltip" data-placement="top" data-original-title="###-##-####"><i class="icon-photon info-circle"></i></a></label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input id="inputSSN" type="text" name="inputSSN" />
                                    <script>
                                        $(document).ready(function(){
                                            $('#inputSSN').mask("999-99-9999");
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!--end Input SSN-->

                        <!--Input ProductKey-->
                        <div id="Product_Key" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputProductKey">Product Key<a href="javascript:;" class="bootstrap-tooltip" data-placement="top" data-original-title="a*-###-a###"><i class="icon-photon info-circle"></i></a></label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input id="inputProductKey" type="text" name="inputProductKey" />
                                    <script>
                                        $(document).ready(function(){
                                            $('#inputProductKey').mask("a*-999-a999");
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!--end Input ProductKey-->

                        <!--Input EyeScript-->
                        <div id="Eye_Script" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputEyeScript">Eye Script<a href="javascript:;" class="bootstrap-tooltip" data-placement="top" data-original-title="~#.## ~#.## ###"><i class="icon-photon info-circle"></i></a></label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input id="inputEyeScript" type="text" name="inputEyeScript" />
                                    <script>
                                        $(document).ready(function(){
                                            $('#inputEyeScript').mask("~9.99 ~9.99 999");
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!--end Input EyeScript-->

                        <!--Input PurchaseOrder-->
                        <div id="Purchase_Order" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputPurchaseOrder">Purchase Order<a href="javascript:;" class="bootstrap-tooltip" data-placement="top" data-original-title="aaa-###-***"><i class="icon-photon info-circle"></i></a></label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input id="inputPurchaseOrder" type="text" name="inputPurchaseOrder" />
                                    <script>
                                        $(document).ready(function(){
                                            $('#inputPurchaseOrder').mask("aaa-999-***");
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!--end Input PurchaseOrder-->

                        <!--Input Percent-->
                        <div id="Percent" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputPercent">Percent<a href="javascript:;" class="bootstrap-tooltip" data-placement="top" data-original-title="##%"><i class="icon-photon info-circle"></i></a></label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input id="inputPercent" type="text" name="inputPercent" />
                                    <script>
                                        $(document).ready(function(){
                                            $('#inputPercent').mask("99%");
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!--end Input Percent-->

                        <!--Input CharacterRanges-->
                        <div id="Character_Ranges" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputCharacterRanges">Character Ranges<a href="javascript:;" class="bootstrap-tooltip" data-placement="top" data-original-title="[1-9]#%"><i class="icon-photon info-circle"></i></a></label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input id="inputCharacterRanges" type="text" name="inputCharacterRanges" />
                                    <script>
                                        $(document).ready(function(){
                                            $.mask.definitions['^']='[1-9]';
                                            $('#inputCharacterRanges').mask("^9%");
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!--end Input CharacterRanges-->
                        <!--Input MaskEscaping-->
                        <div id="Mask_Escaping" class="control-group row-fluid">
                            <div class="span3">
                                <label class="control-label" for="inputMaskEscaping">Mask Escaping<a href="javascript:;" class="bootstrap-tooltip" data-placement="top" data-original-title="##-#### ?a\"><i class="icon-photon info-circle"></i></a></label>
                            </div>
                            <div class="span9">
                                <div class="controls">
                                    <input id="inputMaskEscaping" type="text" name="inputMaskEscaping" />
                                    <script>
                                        $(document).ready(function(){
                                            $('#inputMaskEscaping').mask("99-999 ?a");
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!--end Input MaskEscaping-->

                </div><!-- end container -->
            </form>
        </div>
    <?php include 'library/common/ga.php';?>
    </body>
</html>