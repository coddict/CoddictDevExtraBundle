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
               <div id="Basic_Non-responsive_Table" class="row-fluid">
                   <div class="span12 span-table-title">
                       <div class="alert alert-info alert-block">
                           <i class="icon-alert icon-alert-info"></i>
                           <strong>Basic Non-responsive Table</strong>
                       </div>
                   </div>
               </div>


               <div class="container-fluid">

                       <!--Basic Non-responsive Table begin-->
                       <div class="row-fluid">
                           <div class="span12">
                               <table class="table table-striped">
                                   <thead class="">
                                       <tr>
                                           <th>#</th>
                                           <th>First Name</th>
                                           <th>Last Name</th>
                                           <th>Location</th>
                                           <th>Username</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <tr>
                                           <td>1</td>
                                           <td>Mark</td>
                                           <td>Otto</td>
                                           <td>North Charleston, USA</td>
                                           <td>@mdo</td>
                                       </tr>
                                       <tr>
                                           <td>2</td>
                                           <td>Angelica</td>
                                           <td>Otto</td>
                                           <td>North Charleston, USA</td>
                                           <td>@ango</td>
                                       </tr>
                                       <tr>
                                           <td>3</td>
                                           <td>Magdelena</td>
                                           <td>von Thornton</td>
                                           <td>Hamburg, Germany</td>
                                           <td>@fat</td>
                                       </tr>
                                       <tr>
                                           <td>4</td>
                                           <td>Larry</td>
                                           <td>the Bird</td>
                                           <td>Toronto, Canada</td>
                                           <td>@twitter</td>
                                       </tr>
                                   </tbody>
                               </table>
                           </div>
                       </div>
                       <!--Basic Non-responsive Table end-->

               </div><!-- end container -->


               <div id="Basic_Non-responsive_Bordered_Table" class="row-fluid">
                   <div class="span12 span-table-title">
                       <div class="alert alert-info alert-block">
                           <i class="icon-alert icon-alert-info"></i>
                           <strong>Basic Non-responsive Bordered Table</strong>
                       </div>
                   </div>
               </div>


               <div class="container-fluid">

                       <!--Basic Non-responsive Bordered Table begin-->
                       <div class="row-fluid">
                           <div class="span12">
                               <table class="table table-bordered table-striped">
                                   <thead class="">
                                       <tr>
                                           <th>#</th>
                                           <th>First Name</th>
                                           <th>Last Name</th>
                                           <th>Location</th>
                                           <th>Username</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <tr>
                                           <td>1</td>
                                           <td>Mark</td>
                                           <td>Otto</td>
                                           <td>North Charleston, USA</td>
                                           <td>@mdo</td>
                                       </tr>
                                       <tr>
                                           <td>2</td>
                                           <td>Angelica</td>
                                           <td>Otto</td>
                                           <td>North Charleston, USA</td>
                                           <td>@ango</td>
                                       </tr>
                                       <tr>
                                           <td>3</td>
                                           <td>Magdelena</td>
                                           <td>von Thornton</td>
                                           <td>Hamburg, Germany</td>
                                           <td>@fat</td>
                                       </tr>
                                       <tr>
                                           <td>4</td>
                                           <td>Larry</td>
                                           <td>the Bird</td>
                                           <td>Toronto, Canada</td>
                                           <td>@twitter</td>
                                       </tr>
                                   </tbody>
                               </table>
                           </div>
                       </div>
                       <!--Basic Non-responsive Bordered Table end-->

               </div><!-- end container -->


               <div id="Sortable_Non-responsive_Table" class="row-fluid">
                   <div class="span12 span-table-title">
                       <div class="alert alert-info alert-block">
                           <i class="icon-alert icon-alert-info"></i>
                           <strong>Sortable Non-responsive Table</strong>
                       </div>
                   </div>
               </div>


               <div class="container-fluid">

                       <!--Sortable Non-responsive Table begin-->
                       <div class="row-fluid">
                           <div class="span12">
                               <table class="table table-striped" id="tableSortable">
                                   <thead>
                                       <tr>
                                           <th>Rendering engine</th>
                                           <th>Browser</th>
                                           <th>Platform(s)</th>
                                           <th>Engine version</th>
                                           <th>CSS grade</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <tr class="gradeX">
                                           <td>Trident</td>
                                           <td>
                                               Internet
                                               Explorer 
                                               4.0
                                           </td>
                                           <td>Win 95+</td>
                                           <td class="center">4</td>
                                           <td class="center">X</td>
                                       </tr>
                                       <tr class="gradeC">
                                           <td>Trident</td>
                                           <td>Internet
                                               Explorer 5.0</td>
                                           <td>Win 95+</td>
                                           <td class="center">5</td>
                                           <td class="center">C</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Trident</td>
                                           <td>Internet
                                               Explorer 5.5</td>
                                           <td>Win 95+</td>
                                           <td class="center">5.5</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Trident</td>
                                           <td>Internet
                                               Explorer 6</td>
                                           <td>Win 98+</td>
                                           <td class="center">6</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Trident</td>
                                           <td>Internet Explorer 7</td>
                                           <td>Win XP SP2+</td>
                                           <td class="center">7</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Trident</td>
                                           <td>AOL browser (AOL desktop)</td>
                                           <td>Win XP</td>
                                           <td class="center">6</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Firefox 1.0</td>
                                           <td>Win 98+ / OSX.2+</td>
                                           <td class="center">1.7</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Firefox 1.5</td>
                                           <td>Win 98+ / OSX.2+</td>
                                           <td class="center">1.8</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Firefox 2.0</td>
                                           <td>Win 98+ / OSX.2+</td>
                                           <td class="center">1.8</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Firefox 3.0</td>
                                           <td>Win 2k+ / OSX.3+</td>
                                           <td class="center">1.9</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Camino 1.0</td>
                                           <td>OSX.2+</td>
                                           <td class="center">1.8</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Camino 1.5</td>
                                           <td>OSX.3+</td>
                                           <td class="center">1.8</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Netscape 7.2</td>
                                           <td>Win 95+ / Mac OS 8.6-9.2</td>
                                           <td class="center">1.7</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Netscape Browser 8</td>
                                           <td>Win 98SE+</td>
                                           <td class="center">1.7</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Netscape Navigator 9</td>
                                           <td>Win 98+ / OSX.2+</td>
                                           <td class="center">1.8</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Mozilla 1.0</td>
                                           <td>Win 95+ / OSX.1+</td>
                                           <td class="center">1</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Mozilla 1.1</td>
                                           <td>Win 95+ / OSX.1+</td>
                                           <td class="center">1.1</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Mozilla 1.2</td>
                                           <td>Win 95+ / OSX.1+</td>
                                           <td class="center">1.2</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Mozilla 1.3</td>
                                           <td>Win 95+ / OSX.1+</td>
                                           <td class="center">1.3</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Mozilla 1.4</td>
                                           <td>Win 95+ / OSX.1+</td>
                                           <td class="center">1.4</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Mozilla 1.5</td>
                                           <td>Win 95+ / OSX.1+</td>
                                           <td class="center">1.5</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Mozilla 1.6</td>
                                           <td>Win 95+ / OSX.1+</td>
                                           <td class="center">1.6</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Mozilla 1.7</td>
                                           <td>Win 98+ / OSX.1+</td>
                                           <td class="center">1.7</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Mozilla 1.8</td>
                                           <td>Win 98+ / OSX.1+</td>
                                           <td class="center">1.8</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Seamonkey 1.1</td>
                                           <td>Win 98+ / OSX.2+</td>
                                           <td class="center">1.8</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Epiphany 2.20</td>
                                           <td>Gnome</td>
                                           <td class="center">1.8</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Webkit</td>
                                           <td>Safari 1.2</td>
                                           <td>OSX.3</td>
                                           <td class="center">125.5</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Webkit</td>
                                           <td>Safari 1.3</td>
                                           <td>OSX.3</td>
                                           <td class="center">312.8</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Webkit</td>
                                           <td>Safari 2.0</td>
                                           <td>OSX.4+</td>
                                           <td class="center">419.3</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Webkit</td>
                                           <td>Safari 3.0</td>
                                           <td>OSX.4+</td>
                                           <td class="center">522.1</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Webkit</td>
                                           <td>OmniWeb 5.5</td>
                                           <td>OSX.4+</td>
                                           <td class="center">420</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Webkit</td>
                                           <td>iPod Touch / iPhone</td>
                                           <td>iPod</td>
                                           <td class="center">420.1</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Webkit</td>
                                           <td>S60</td>
                                           <td>S60</td>
                                           <td class="center">413</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Presto</td>
                                           <td>Opera 7.0</td>
                                           <td>Win 95+ / OSX.1+</td>
                                           <td class="center">-</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Presto</td>
                                           <td>Opera 7.5</td>
                                           <td>Win 95+ / OSX.2+</td>
                                           <td class="center">-</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Presto</td>
                                           <td>Opera 8.0</td>
                                           <td>Win 95+ / OSX.2+</td>
                                           <td class="center">-</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Presto</td>
                                           <td>Opera 8.5</td>
                                           <td>Win 95+ / OSX.2+</td>
                                           <td class="center">-</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Presto</td>
                                           <td>Opera 9.0</td>
                                           <td>Win 95+ / OSX.3+</td>
                                           <td class="center">-</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Presto</td>
                                           <td>Opera 9.2</td>
                                           <td>Win 88+ / OSX.3+</td>
                                           <td class="center">-</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Presto</td>
                                           <td>Opera 9.5</td>
                                           <td>Win 88+ / OSX.3+</td>
                                           <td class="center">-</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Presto</td>
                                           <td>Opera for Wii</td>
                                           <td>Wii</td>
                                           <td class="center">-</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Presto</td>
                                           <td>Nokia N800</td>
                                           <td>N800</td>
                                           <td class="center">-</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Presto</td>
                                           <td>Nintendo DS browser</td>
                                           <td>Nintendo DS</td>
                                           <td class="center">8.5</td>
                                           <td class="center">C/A<sup>1</sup></td>
                                       </tr>
                                       <tr class="gradeC">
                                           <td>KHTML</td>
                                           <td>Konqureror 3.1</td>
                                           <td>KDE 3.1</td>
                                           <td class="center">3.1</td>
                                           <td class="center">C</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>KHTML</td>
                                           <td>Konqureror 3.3</td>
                                           <td>KDE 3.3</td>
                                           <td class="center">3.3</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>KHTML</td>
                                           <td>Konqureror 3.5</td>
                                           <td>KDE 3.5</td>
                                           <td class="center">3.5</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeX">
                                           <td>Tasman</td>
                                           <td>Internet Explorer 4.5</td>
                                           <td>Mac OS 8-9</td>
                                           <td class="center">-</td>
                                           <td class="center">X</td>
                                       </tr>
                                       <tr class="gradeC">
                                           <td>Tasman</td>
                                           <td>Internet Explorer 5.1</td>
                                           <td>Mac OS 7.6-9</td>
                                           <td class="center">1</td>
                                           <td class="center">C</td>
                                       </tr>
                                       <tr class="gradeC">
                                           <td>Tasman</td>
                                           <td>Internet Explorer 5.2</td>
                                           <td>Mac OS 8-X</td>
                                           <td class="center">1</td>
                                           <td class="center">C</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Misc</td>
                                           <td>NetFront 3.1</td>
                                           <td>Embedded devices</td>
                                           <td class="center">-</td>
                                           <td class="center">C</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Misc</td>
                                           <td>NetFront 3.4</td>
                                           <td>Embedded devices</td>
                                           <td class="center">-</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeX">
                                           <td>Misc</td>
                                           <td>Dillo 0.8</td>
                                           <td>Embedded devices</td>
                                           <td class="center">-</td>
                                           <td class="center">X</td>
                                       </tr>
                                       <tr class="gradeX">
                                           <td>Misc</td>
                                           <td>Links</td>
                                           <td>Text only</td>
                                           <td class="center">-</td>
                                           <td class="center">X</td>
                                       </tr>
                                       <tr class="gradeX">
                                           <td>Misc</td>
                                           <td>Lynx</td>
                                           <td>Text only</td>
                                           <td class="center">-</td>
                                           <td class="center">X</td>
                                       </tr>
                                       <tr class="gradeC">
                                           <td>Misc</td>
                                           <td>IE Mobile</td>
                                           <td>Windows Mobile 6</td>
                                           <td class="center">-</td>
                                           <td class="center">C</td>
                                       </tr>
                                       <tr class="gradeC">
                                           <td>Misc</td>
                                           <td>PSP browser</td>
                                           <td>PSP</td>
                                           <td class="center">-</td>
                                           <td class="center">C</td>
                                       </tr>
                                       <tr class="gradeU">
                                           <td>Other browsers</td>
                                           <td>All others</td>
                                           <td>-</td>
                                           <td class="center">-</td>
                                           <td class="center">U</td>
                                       </tr>
                                   </tbody>
                               </table>
                           </div>
                       </div>
                       <!--Sortable Non-responsive Table end-->


                   <script>
                       $(document).ready(function() {
                           $('#tableSortable, #tableSortableRes, #tableSortableResMed').dataTable( {
                               "sPaginationType": "bootstrap",
                               "fnInitComplete": function(){
                                   $(".dataTables_wrapper select").select2({
                                       dropdownCssClass: 'noSearch'
                                   });
                               }
                           });
                           //                            $("#simpleSelectBox").select2({
                           //                                dropdownCssClass: 'noSearch'
                           //                            }); 
                       });
                   </script>
               </div><!-- end container -->


               <div id="Basic_Responsive_Table" class="row-fluid">
                   <div class="span12 span-table-title">
                       <div class="alert alert-info alert-block">
                           <i class="icon-alert icon-alert-info"></i>
                           <strong>Basic Responsive Table</strong>
                       </div>
                   </div>
               </div>


               <div class="container-fluid">

                       <!--Basic Responsive Table begin-->
                       <div class="row-fluid">
                           <div class="span12">
                               <table class="table table-striped table-responsive">
                                   <thead class="">
                                       <tr>
                                           <th>#</th>
                                           <th>First Name</th>
                                           <th>Last Name</th>
                                           <th>Location</th>
                                           <th>Username</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <tr>
                                           <td>1</td>
                                           <td>Mark</td>
                                           <td>Otto</td>
                                           <td>North Charleston, USA</td>
                                           <td>@mdo</td>
                                       </tr>
                                       <tr>
                                           <td>2</td>
                                           <td>Angelica</td>
                                           <td>Otto</td>
                                           <td>North Charleston, USA</td>
                                           <td>@ango</td>
                                       </tr>
                                       <tr>
                                           <td>3</td>
                                           <td>Magdelena</td>
                                           <td>von Thornton</td>
                                           <td>Hamburg, Germany</td>
                                           <td>@fat</td>
                                       </tr>
                                       <tr>
                                           <td>4</td>
                                           <td>Larry</td>
                                           <td>the Bird</td>
                                           <td>Toronto, Canada</td>
                                           <td>@twitter</td>
                                       </tr>
                                   </tbody>
                               </table>
                           </div>
                       </div>
                       <!--Basic Responsive Table end-->

               </div><!-- end container -->


               <div id="Sortable_Responsive_Table" class="row-fluid">
                   <div class="span12 span-table-title">
                       <div class="alert alert-info alert-block">
                           <i class="icon-alert icon-alert-info"></i>
                           <strong>Sortable Responsive Table</strong>
                       </div>
                   </div>
               </div>


               <div class="container-fluid">


                       <!--Sortable Responsive Table begin-->
                       <div class="row-fluid">
                           <div class="span12">
                               <table class="table table-striped table-responsive" id="tableSortableRes">
                                   <thead>
                                       <tr>
                                           <th>Rendering engine</th>
                                           <th>Browser</th>
                                           <th>Platform(s)</th>
                                           <th>Engine version</th>
                                           <th>CSS grade</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <tr class="gradeX">
                                           <td>Trident</td>
                                           <td>
                                               Internet
                                               Explorer 
                                               4.0
                                           </td>
                                           <td>Win 95+</td>
                                           <td class="center">4</td>
                                           <td class="center">X</td>
                                       </tr>
                                       <tr class="gradeC">
                                           <td>Trident</td>
                                           <td>Internet
                                               Explorer 5.0</td>
                                           <td>Win 95+</td>
                                           <td class="center">5</td>
                                           <td class="center">C</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Trident</td>
                                           <td>Internet
                                               Explorer 5.5</td>
                                           <td>Win 95+</td>
                                           <td class="center">5.5</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Trident</td>
                                           <td>Internet
                                               Explorer 6</td>
                                           <td>Win 98+</td>
                                           <td class="center">6</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Trident</td>
                                           <td>Internet Explorer 7</td>
                                           <td>Win XP SP2+</td>
                                           <td class="center">7</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Trident</td>
                                           <td>AOL browser (AOL desktop)</td>
                                           <td>Win XP</td>
                                           <td class="center">6</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Firefox 1.0</td>
                                           <td>Win 98+ / OSX.2+</td>
                                           <td class="center">1.7</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Firefox 1.5</td>
                                           <td>Win 98+ / OSX.2+</td>
                                           <td class="center">1.8</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Firefox 2.0</td>
                                           <td>Win 98+ / OSX.2+</td>
                                           <td class="center">1.8</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Firefox 3.0</td>
                                           <td>Win 2k+ / OSX.3+</td>
                                           <td class="center">1.9</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Camino 1.0</td>
                                           <td>OSX.2+</td>
                                           <td class="center">1.8</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Camino 1.5</td>
                                           <td>OSX.3+</td>
                                           <td class="center">1.8</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Netscape 7.2</td>
                                           <td>Win 95+ / Mac OS 8.6-9.2</td>
                                           <td class="center">1.7</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Netscape Browser 8</td>
                                           <td>Win 98SE+</td>
                                           <td class="center">1.7</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Netscape Navigator 9</td>
                                           <td>Win 98+ / OSX.2+</td>
                                           <td class="center">1.8</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Mozilla 1.0</td>
                                           <td>Win 95+ / OSX.1+</td>
                                           <td class="center">1</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Mozilla 1.1</td>
                                           <td>Win 95+ / OSX.1+</td>
                                           <td class="center">1.1</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Mozilla 1.2</td>
                                           <td>Win 95+ / OSX.1+</td>
                                           <td class="center">1.2</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Mozilla 1.3</td>
                                           <td>Win 95+ / OSX.1+</td>
                                           <td class="center">1.3</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Mozilla 1.4</td>
                                           <td>Win 95+ / OSX.1+</td>
                                           <td class="center">1.4</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Mozilla 1.5</td>
                                           <td>Win 95+ / OSX.1+</td>
                                           <td class="center">1.5</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Mozilla 1.6</td>
                                           <td>Win 95+ / OSX.1+</td>
                                           <td class="center">1.6</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Mozilla 1.7</td>
                                           <td>Win 98+ / OSX.1+</td>
                                           <td class="center">1.7</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Mozilla 1.8</td>
                                           <td>Win 98+ / OSX.1+</td>
                                           <td class="center">1.8</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Seamonkey 1.1</td>
                                           <td>Win 98+ / OSX.2+</td>
                                           <td class="center">1.8</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Gecko</td>
                                           <td>Epiphany 2.20</td>
                                           <td>Gnome</td>
                                           <td class="center">1.8</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Webkit</td>
                                           <td>Safari 1.2</td>
                                           <td>OSX.3</td>
                                           <td class="center">125.5</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Webkit</td>
                                           <td>Safari 1.3</td>
                                           <td>OSX.3</td>
                                           <td class="center">312.8</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Webkit</td>
                                           <td>Safari 2.0</td>
                                           <td>OSX.4+</td>
                                           <td class="center">419.3</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Webkit</td>
                                           <td>Safari 3.0</td>
                                           <td>OSX.4+</td>
                                           <td class="center">522.1</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Webkit</td>
                                           <td>OmniWeb 5.5</td>
                                           <td>OSX.4+</td>
                                           <td class="center">420</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Webkit</td>
                                           <td>iPod Touch / iPhone</td>
                                           <td>iPod</td>
                                           <td class="center">420.1</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Webkit</td>
                                           <td>S60</td>
                                           <td>S60</td>
                                           <td class="center">413</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Presto</td>
                                           <td>Opera 7.0</td>
                                           <td>Win 95+ / OSX.1+</td>
                                           <td class="center">-</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Presto</td>
                                           <td>Opera 7.5</td>
                                           <td>Win 95+ / OSX.2+</td>
                                           <td class="center">-</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Presto</td>
                                           <td>Opera 8.0</td>
                                           <td>Win 95+ / OSX.2+</td>
                                           <td class="center">-</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Presto</td>
                                           <td>Opera 8.5</td>
                                           <td>Win 95+ / OSX.2+</td>
                                           <td class="center">-</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Presto</td>
                                           <td>Opera 9.0</td>
                                           <td>Win 95+ / OSX.3+</td>
                                           <td class="center">-</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Presto</td>
                                           <td>Opera 9.2</td>
                                           <td>Win 88+ / OSX.3+</td>
                                           <td class="center">-</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Presto</td>
                                           <td>Opera 9.5</td>
                                           <td>Win 88+ / OSX.3+</td>
                                           <td class="center">-</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Presto</td>
                                           <td>Opera for Wii</td>
                                           <td>Wii</td>
                                           <td class="center">-</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Presto</td>
                                           <td>Nokia N800</td>
                                           <td>N800</td>
                                           <td class="center">-</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Presto</td>
                                           <td>Nintendo DS browser</td>
                                           <td>Nintendo DS</td>
                                           <td class="center">8.5</td>
                                           <td class="center">C/A<sup>1</sup></td>
                                       </tr>
                                       <tr class="gradeC">
                                           <td>KHTML</td>
                                           <td>Konqureror 3.1</td>
                                           <td>KDE 3.1</td>
                                           <td class="center">3.1</td>
                                           <td class="center">C</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>KHTML</td>
                                           <td>Konqureror 3.3</td>
                                           <td>KDE 3.3</td>
                                           <td class="center">3.3</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>KHTML</td>
                                           <td>Konqureror 3.5</td>
                                           <td>KDE 3.5</td>
                                           <td class="center">3.5</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeX">
                                           <td>Tasman</td>
                                           <td>Internet Explorer 4.5</td>
                                           <td>Mac OS 8-9</td>
                                           <td class="center">-</td>
                                           <td class="center">X</td>
                                       </tr>
                                       <tr class="gradeC">
                                           <td>Tasman</td>
                                           <td>Internet Explorer 5.1</td>
                                           <td>Mac OS 7.6-9</td>
                                           <td class="center">1</td>
                                           <td class="center">C</td>
                                       </tr>
                                       <tr class="gradeC">
                                           <td>Tasman</td>
                                           <td>Internet Explorer 5.2</td>
                                           <td>Mac OS 8-X</td>
                                           <td class="center">1</td>
                                           <td class="center">C</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Misc</td>
                                           <td>NetFront 3.1</td>
                                           <td>Embedded devices</td>
                                           <td class="center">-</td>
                                           <td class="center">C</td>
                                       </tr>
                                       <tr class="gradeA">
                                           <td>Misc</td>
                                           <td>NetFront 3.4</td>
                                           <td>Embedded devices</td>
                                           <td class="center">-</td>
                                           <td class="center">A</td>
                                       </tr>
                                       <tr class="gradeX">
                                           <td>Misc</td>
                                           <td>Dillo 0.8</td>
                                           <td>Embedded devices</td>
                                           <td class="center">-</td>
                                           <td class="center">X</td>
                                       </tr>
                                       <tr class="gradeX">
                                           <td>Misc</td>
                                           <td>Links</td>
                                           <td>Text only</td>
                                           <td class="center">-</td>
                                           <td class="center">X</td>
                                       </tr>
                                       <tr class="gradeX">
                                           <td>Misc</td>
                                           <td>Lynx</td>
                                           <td>Text only</td>
                                           <td class="center">-</td>
                                           <td class="center">X</td>
                                       </tr>
                                       <tr class="gradeC">
                                           <td>Misc</td>
                                           <td>IE Mobile</td>
                                           <td>Windows Mobile 6</td>
                                           <td class="center">-</td>
                                           <td class="center">C</td>
                                       </tr>
                                       <tr class="gradeC">
                                           <td>Misc</td>
                                           <td>PSP browser</td>
                                           <td>PSP</td>
                                           <td class="center">-</td>
                                           <td class="center">C</td>
                                       </tr>
                                       <tr class="gradeU">
                                           <td>Other browsers</td>
                                           <td>All others</td>
                                           <td>-</td>
                                           <td class="center">-</td>
                                           <td class="center">U</td>
                                       </tr>
                                   </tbody>
                               </table>
                           </div>
                       </div>
                       <!--Sortable Responsive Table end-->

               </div><!-- end container -->


               <div id="Sortable_Responsive_Media_Table" class="row-fluid">
                   <div class="span12 span-table-title">
                       <div class="alert alert-info alert-block">
                           <i class="icon-alert icon-alert-info"></i>
                           <strong>Sortable Responsive Media Table</strong>
                       </div>
                   </div>
               </div>


               <div class="container-fluid">


                       <!--Sortable Responsive Media Table begin-->
                       <div class="row-fluid">
                           <div class="span12">
                               <table class="table table-striped table-responsive" id="tableSortableResMed">
                                   <thead class="cf sorthead">
                                       <tr>
                                           <th>Image</th>
                                           <th>Date Modified</th>
                                           <th>size</th>
                                           <th>Kind</th>
                                           <th>Comments</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <tr class="gradeX">
                                           <td>
                                               <img src="images/photon/user1.jpg" alt="user" />
                                           </td>
                                           <td>Today, 11:17 PM</td>
                                           <td>212kb</td>
                                           <td class="center">JPEG image</td>
                                           <td class="center">Consectetur adipisicing elit</td>
                                       </tr>
                                       <tr class="gradeX">
                                           <td>
                                               <img src="images/photon/user2.jpg" alt="user" />
                                           </td>
                                           <td>Oct 14, 2012 11:17 PM</td>
                                           <td>167kb</td>
                                           <td class="center">JPEG image</td>
                                           <td class="center">Do eiusmod tempor incididunt</td>
                                       </tr>
                                       <tr class="gradeX">
                                           <td>
                                               <img src="images/photon/user3.jpg" alt="user" />
                                           </td>
                                           <td>Oct 14, 2012 10:11 PM</td>
                                           <td>202kb</td>
                                           <td class="center">JPEG image</td>
                                           <td class="center">Labore et dolore magna</td>
                                       </tr>
                                       <tr class="gradeX">
                                           <td>
                                               <img src="images/photon/user4.jpg" alt="user" />
                                           </td>
                                           <td>Oct 14, 2012 09:27 PM</td>
                                           <td>194kb</td>
                                           <td class="center">JPEG image</td>
                                           <td class="center">Ut enim ad minim veniam</td>
                                       </tr>
                                       <tr class="gradeX">
                                           <td>
                                               <img src="images/photon/user5.jpg" alt="user" />
                                           </td>
                                           <td>Oct 14, 2012 08:53 PM</td>
                                           <td>167kb</td>
                                           <td class="center">JPEG image</td>
                                           <td class="center">Aliquip ex ea commodo</td>
                                       </tr>
                                   </tbody>
                               </table>

                           </div>
                       </div>
                       <!--Sortable Responsive Media Table end-->

           </div><!-- end container -->
       </form>
   </div>
    <?php include 'library/common/ga.php';?>
    </body>
</html>