<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  
<!-- Mirrored from foxythemes.net/preview/products/beagle/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Mar 2019 06:35:45 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="trabalho 23">
    <meta name="author" content="Valter Cinquenta">
    <link rel="shortcut icon" href="{{asset('bleagle2/img/book.png')}}">
    <title>Trabalho 3</title>

<!-- Boostrap -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

<!-- INDEX.HTML & INDEX-2.HTML -->
    <link rel="stylesheet" type="text/css" href="{{asset('bleagle2/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('bleagle2/lib/material-design-icons/css/material-design-iconic-font.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('bleagle2/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('bleagle2/lib/jqvmap/jqvmap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('bleagle2/lib/datetimepicker/css/bootstrap-datetimepicker.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('bleagle2/css/app.css')}}" type="text/css"/>

<!-- FORM-ELEMENT.HTML-->
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('bleagle2/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}"/> -->
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('bleagle2/lib/material-design-icons/css/material-design-iconic-font.min.css')}}"/> -->
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('bleagle2/lib/datetimepicker/css/bootstrap-datetimepicker.min.css')}}"/> -->
    <link rel="stylesheet" type="text/css" href="{{asset('bleagle2/lib/select2/css/select2.min.css')}}"/>
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('bleagle2/lib/bootstrap-slider/css/bootstrap-slider.min.css')}}"/> -->
    <!-- <link rel="stylesheet" href="{{asset('bleagle2/css/app.css')}}" type="text/css"/> -->

<!-- CHARTS-CHARTJS.HTML -->
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('bleagle2/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}"/> -->
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('bleagle2/lib/material-design-icons/css/material-design-iconic-font.min.css')}}"/> -->
    <!-- <link rel="stylesheet" href="{{asset('bleagle2/css/app.css')}}" type="text/css"/> -->

<!-- TABLES-GENERAL.HTML -->
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('bleagle2/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}')}}"/> -->
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('bleagle2/lib/material-design-icons/css/material-design-iconic-font.min.css')}}')}}"/> -->
    <!-- <link rel="stylesheet" href="{{asset('bleagle2/css/app.css')}}')}}" type="text/css"/> -->

<!-- TABLES-DATATABLES.HTML -->
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('bleagle2/lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css')}}"/> -->
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('bleagle2/lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}"/> -->

<!-- FORM-WIZARD.HTML -->
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('bleagle2/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}"/> -->
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('bleagle2/lib/material-design-icons/css/material-design-iconic-font.min.css')}}"/> -->
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('bleagle2/lib/select2/css/select2.min.css')}}"/> -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/lib/bootstrap-slider/css/bootstrap-slider.min.css')}}"/> -->
    <!-- <link rel="stylesheet" href="{{asset('bleagle2/css/app.css')}}" type="text/css"/> -->

<!-- FORM-MULTISELECT.HTML -->
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('bleagle2/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}"/> -->
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('bleagle2/lib/material-design-icons/css/material-design-iconic-font.min.css')}}"/> -->
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('bleagle2/lib/multiselect/css/multi-select.css')}}"/> -->
    <link rel="stylesheet" href="{{asset('bleagle2/css/app.css')}}" type="text/css"/>

<!-- PAGES-LOGIN.HTML -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.css"/> -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/> -->
    <!-- <link rel="stylesheet" href="assets/css/app.css" type="text/css"/> -->

<!-- PAGES-GALLERY.HTML -->
    <link rel="stylesheet" type="text/css" href="{{asset('bleagle2/lib/jquery.magnific-popup/magnific-popup.css')}}"/>

<!-- SESSAO DE ESTILOS PARA OS ULTIMOS DETALHES -->
<style>
 
 
</style>
</head>
  <body>
    <!-- <div class="be-wrapper be-fixed-sidebar"> -->

      <!-- Cabecalho -->
      @guest
     <!--    <nav class="navbar navbar-expand fixed-top be-top-header">
        <div  class="container-fluid">
          <div style="background-color: rgb(255,255,255);" class="be-navbar-header">
          </div>
          <div class="page-title"><span>Trabalho02</span></div>
          <div class="be-right-navbar">
            <ul class="nav navbar-nav float-right be-user-nav">
               <li class="nav-item">
                  </a>
                </li>       
            </ul>
          </div>
        </div>
      </nav>
       -->

     @else  <!--  Else do guest -->
      
     @endguest

      <!-- Menu e base-->
      <div class="main-content container-fluid">
           <div class="row">
            <div class="col-12 col-lg-10 offset-lg-1">
            <div class="col-12 col-lg-12">
              <div class="card">
                <div class="card-header">trab_prat_02</div>
                <div class="tab-container">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" href="#home" data-toggle="tab" role="tab">Translação</a></li>
                    <li class="nav-item"><a class="nav-link" href="#profile" data-toggle="tab" role="tab">Rotação</a></li>
                    <li class="nav-item"><a class="nav-link" href="#messages" data-toggle="tab" role="tab">Escala</a></li>
                    <li class="nav-item"><a class="nav-link" href="#messages1" data-toggle="tab" role="tab">clipping (Recortar)</a></li>
                    <li class="nav-item"><a class="nav-link" href="#messages2" data-toggle="tab" role="tab">Diversos</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel">
                      <h4>Translação</h4>
                     


                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel">
                      <h4>Rotação</h4>
                        <div class="mt-4 mb-2">
                            <div class="btn-toolbar">
                              <div class="btn-group btn-group-justified mb-2" role="group">
                                <a id="rodar_esquerda" class="btn btn-secondary" >Tela cinza</a>
                                <a id="rodar_direita" class="btn btn-secondary" >Preto e branco</a>
                                <button id="rodar_esquerda">Esquerda</button>
                                <button id="rodar_direita">Direita</button>
                                <!-- <a class="btn btn-secondary" onclick="thresholding()">Limiar</a>
                                <a class="btn btn-secondary" onclick="sepia()">Sépia</a>
                                <a class="btn btn-secondary" onclick="emboss()">Gravar</a>
                                <a class="btn btn-secondary" onclick="halftone()">Meio-tom</a> -->
                              </div>
                            </div>
                        </div>
                      


                    </div>
                    <div class="tab-pane" id="messages" role="tabpanel">
                      <h4>Escala</h4>
                       <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Input Text</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                          <input class="form-control" type="text">
                          <div class="input-group-append"><span class="input-group-text">.00</span></div>
                        </div>
                      </div>
                      <div>
                        <button class="btn btn-secondary" onclick="scale()">Escala (Redimensionar)</button>
                      </div>
                    </div>
                      


                    </div>
                     <div class="tab-pane" id="messages1" role="tabpanel">
                       <h4>clipping</h4>
                           <div class="mt-4 mb-2">
                            <div class="btn-toolbar">
                              <div class="btn-group btn-group-justified mb-2" role="group">
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                  <input class="form-control" type="text">
                                  <div class="input-group-append"><span class="input-group-text">.00</span></div>
                                </div>
                                <a class="btn btn-secondary" onclick="edgeDetection1()">Detecção de borda 1</a>
                                <a class="btn btn-secondary" onclick="edgeDetection1()">Detecção de borda 1</a>
                                <a class="btn btn-secondary" onclick="edgeDetection2()">Detecção de borda 2</a>
                                <a class="btn btn-secondary" onclick="crop()">Recortar</a>
                                <a class="btn btn-secondary" onclick="reset()">Repor</a>
                              </div>
                            </div>
                        </div>
                     

                    </div>
                     <div class="tab-pane" id="messages2" role="tabpanel">
                      <h4>Diversos</h4>
                      <div>
                        <div class="mt-4 mb-2">
                            <div class="btn-toolbar">
                              <div class="btn-group btn-group-justified mb-2" role="group">
                                <a class="btn btn-secondary" onclick="grayScale()">Tela cinza</a>
                                <a class="btn btn-secondary" onclick="blackAndWhite()">Preto e branco</a>
                                <a class="btn btn-secondary" onclick="thresholding()">Limiar</a>
                                <a class="btn btn-secondary" onclick="sepia()">Sépia</a>
                                <a class="btn btn-secondary" onclick="emboss()">Gravar</a>
                                <a class="btn btn-secondary" onclick="halftone()">Meio-tom</a>
                              </div>
                               <div class="btn-group btn-group-justified mb-2" role="group">
                                <a class="btn btn-secondary" onclick="invert()">Inverter</a>
                                <a class="btn btn-secondary" onclick="edgeDetection1()">Detecção de borda 1</a>
                                <a class="btn btn-secondary" onclick="edgeDetection2()">Detecção de borda 2</a>
                                <a class="btn btn-secondary" onclick="crop()">Recortar</a>
                                <a class="btn btn-secondary" onclick="scale()">Escala (Redimensionar)</a>
                                <a class="btn btn-secondary" onclick="reset()">Repor</a>
                              </div>
                            </div>
                        </div>


                      </div>
                    </div>
                    <div class="col-12 col-lg-10 offset-lg-1 ">
                        <canvas id="canvas" width="796" height="500"></canvas><br/>
                    </div>
                     <button id="rodar_esquerda">Esquerda</button>
                     <button id="rodar_direita">Direita</button>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      


<!-- </div> -->

<!-- TABLE FILTER -->
  <!-- <script type="text/javascript" language="javascript" src="{{asset('tablefilter/src/tablefilter.js')}}"></script>   -->
  <!-- <script type="text/javascript" src="{{asset('tablefilter/tablefilter.js')}}"></script> -->

  <!-- bootstrap -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</script>
<!-- INDEX.HTML & INDEX-2.HTML -->
    <script src="{{asset('bleagle2/lib/jquery/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('bleagle2/lib/perfect-scrollbar/js/perfect-scrollbar.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('bleagle2/lib/bootstrap/dist/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('bleagle2/js/app.js')}}" type="text/javascript"></script>
   
    <script src="{{asset('bleagle2/lib/jquery.sparkline/jquery.sparkline.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('bleagle2/lib/countup/countUp.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('bleagle2/lib/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        //-initialize the javascript
        App.init();
        App.dashboard();
      
      });
    </script>

<!-- FORM-ELEMENT.HTML-->
    <!-- <script src="{{asset('bleagle2/lib/jquery/jquery.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/perfect-scrollbar/js/perfect-scrollbar.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/bootstrap/dist/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/js/app.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/jquery.nestable/jquery.nestable.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/moment.js/min/moment.min.js')}}" type="text/javascript"></script> -->
    <script src="{{asset('bleagle2/lib/datetimepicker/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
    <!-- <script src="{{asset('bleagle2/lib/select2/js/select2.min.js')}}" type="text/javascript"></script> -->
    <script src="{{asset('bleagle2/lib/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('bleagle2/lib/bootstrap-slider/bootstrap-slider.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        //-initialize the javascript
        // App.init();
        App.formElements();
      });
    </script>

<!-- CHARTS-CHARTJS.HTML -->
    <!-- <script src="{{asset('bleagle2/lib/jquery/jquery.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/perfect-scrollbar/js/perfect-scrollbar.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/bootstrap/dist/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/js/app.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/chartjs/Chart.min.js')}}" type="text/javascript"></script> -->
    <!-- <script type="text/javascript">
      $(document).ready(function(){
        //-initialize the javascript
        // App.init();
        App.ChartJs();
      });
    </script> -->


<!-- TABLES-GENERAL.HTML -->
      <!-- <script src="{{asset('bleagle2/lib/jquery/jquery.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/perfect-scrollbar/js/perfect-scrollbar.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/bootstrap/dist/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/js/app.js')}}" type="text/javascript"></script> -->
    <!-- <script type="text/javascript">
      $(document).ready(function(){
        //-initialize the javascript
        App.init();
      });
    </script> -->


<!-- UI-MODALS -->
    <!-- <script src="{{asset('bleagle2/lib/jquery/jquery.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/perfect-scrollbar/js/perfect-scrollbar.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/bootstrap/dist/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/js/app.js')}}" type="text/javascript"></script> -->
    <script src="{{asset('bleagle2/lib/jquery.niftymodals/js/jquery.niftymodals.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
      $.fn.niftyModal('setDefaults',{
        overlaySelector: '.modal-overlay',
        contentSelector: '.modal-content',
        closeSelector: '.modal-close',
        classAddAfterOpen: 'modal-show'
      });
      
      $(document).ready(function(){
        //-initialize the javascript
        // App.init();
      });
    </script>


<!-- TABLES-DATATABLES.HTML -->
        <!-- <script src="{{asset('bleagle2/lib/datatables/datatables.net/js/jquery.dataTables.js')}}" type="text/javascript"></script> -->
        <!-- <script src="{{asset('bleagle2/lib/datatables/datatables.net-bs4/js/dataTables.bootstrap4.js')}}" type="text/javascript"></script> -->
        <!-- <script src="{{asset('bleagle2/lib/datatables/datatables.net-buttons/js/dataTables.buttons.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/datatables/datatables.net-buttons/js/buttons.flash.min.js')}}" type="text/javascript"></script> -->
        <!-- <script src="{{asset('bleagle2/lib/datatables/jszip/jszip.min.js')}}" type="text/javascript"></script> -->
        <!-- <script src="{{asset('bleagle2/lib/datatables/pdfmake/pdfmake.min.js')}}" type="text/javascript"></script> -->
        <!-- <script src="{{asset('bleagle2/lib/datatables/pdfmake/vfs_fonts.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/datatables/datatables.net-buttons/js/buttons.colVis.min.js')}}" type="text/javascript"></script> -->
        <!-- <script src="{{asset('bleagle2/lib/datatables/datatables.net-buttons/js/buttons.print.min.js')}}" type="text/javascript"></script> -->
        <!-- <script src="{{asset('bleagle2/lib/datatables/datatables.net-buttons/js/buttons.html5.min.js')}}" type="text/javascript"></script> -->
        <!-- <script src="{{asset('bleagle2/lib/datatables/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/datatables/datatables.net-responsive/js/dataTables.responsive.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="assets/lib/datatables/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}" type="text/javascript"></script> -->
   <!--  <script type="text/javascript">
      $(document).ready(function(){
        //-initialize the javascript
        App.init();
            App.dataTables();
      });
    </script> -->



<!-- FORM-WIZARD.HTML -->
    <!-- <script src="{{asset('bleagle2/lib/jquery/jquery.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/perfect-scrollbar/js/perfect-scrollbar.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/bootstrap/dist/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/js/app.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/fuelux/js/wizard.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/select2/js/select2.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/select2/js/select2.full.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/bootstrap-slider/bootstrap-slider.min.js')}}" type="text/javascript"></script> -->
    <!-- <script type="text/javascript">
      $(document).ready(function(){
        //-initialize the javascript
        // App.init();
        // App.wizard();
      });
    </script> -->


<!-- FORM-MULTISELECT.HTML -->
    <!-- <script src="{{asset('bleagle2/lib/jquery/jquery.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/perfect-scrollbar/js/perfect-scrollbar.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/bootstrap/dist/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/js/app.js')}}" type="text/javascript"></script> -->
        <!-- <script src="{{asset('bleagle2/lib/multiselect/js/jquery.multi-select.js')}}" type="text/javascript"></script> -->
        <!-- <script src="{{asset('bleagle2/lib/quicksearch/jquery.quicksearch.min.js')}}" type="text/javascript"></script> -->
   <!--  <script type="text/javascript"> 
        $(document).ready(function(){
          //-initialize the javascript
          // App.init();
              //  App.formMultiselect();
        });
    </script> -->

<!-- PAGES-PROFILE.HTML -->
    <!-- <script src="{{asset('bleagle2/lib/jquery/jquery.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/perfect-scrollbar/js/perfect-scrollbar.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/bootstrap/dist/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/js/app.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/jquery-flot/jquery.flot.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/jquery-flot/jquery.flot.pie.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/jquery-flot/jquery.flot.time.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/jquery-flot/jquery.flot.resize.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/jquery-flot/plugins/jquery.flot.orderBars.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/jquery-flot/plugins/curvedLines.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/jquery-flot/plugins/jquery.flot.tooltip.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script> -->
    <script type="text/javascript">
      $(document).ready(function(){
        //-initialize the javascript
        // App.init();
        App.pageProfile();
      });
    </script>

<!-- PAGES-LOGIN.HTML -->
    <!-- <script src="{{asset('bleagle2/lib/jquery/jquery.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/perfect-scrollbar/js/perfect-scrollbar.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/bootstrap/dist/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/js/app.js')}}" type="text/javascript"></script> -->
   <!--  <script type="text/javascript">
      $(document).ready(function(){
        //-initialize the javascript
        // App.init();
      });
      
    </script> -->

<!-- UI-ICONS.HTML -->
    <!-- <script src="{{asset('bleagle2/lib/jquery/jquery.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/perfect-scrollbar/js/perfect-scrollbar.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/bootstrap/dist/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/js/app.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/select2/js/select2.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/select2/js/select2.full.min.js')}}" type="text/javascript"></script> -->
    <script type="text/javascript">
      $(document).ready(function(){
        //-initialize the javascript
        // App.init();
        App.IconsFilter();
      });
    </script>

<!-- PAGES-GALLERY.HTML -->
    <!-- <script src="{{asset('bleagle2/lib/jquery/jquery.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/perfect-scrollbar/js/perfect-scrollbar.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/lib/bootstrap/dist/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('bleagle2/js/app.js')}}" type="text/javascript"></script> -->
    <script src="{{asset('bleagle2/lib/jquery.magnific-popup/jquery.magnific-popup.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('bleagle2/lib/masonry-layout/masonry.pkgd.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        //-initialize the javascript
        // App.init();
        
      });
      
      $(window).on('load',function(){
        App.pageGallery();
      });
    </script>


    <script src="https://www.marvinj.org/releases/marvinj-0.9.js"></script>
    <script src="{{asset('bleagle2/marvinj-1.0.min.js')}}" type="text/javascript"></script>

    <script type="text/javascript">
      
      var canvas = document.getElementById("canvas");
        var original = new MarvinImage();
        var image;

        original.load("https://i.imgur.com/lgO7TRl.png", function(){
           // Draw the original image 
           original.draw(canvas);
        });

        function grayScale(){
          image = original.clone();
          Marvin.grayScale(original, image);
          image.draw(canvas);
        }

        function blackAndWhite(){
          image = original.clone();
          Marvin.blackAndWhite(original, image, 20);
          image.draw(canvas);
        }

        function thresholding(){
          image = original.clone();
          Marvin.thresholding(original, image, 160);
          image.draw(canvas);
        }

        function sepia(){
          image = original.clone();
          Marvin.sepia(original, image, 30);
          image.draw(canvas);
        }

        function emboss(){
          image = original.clone();
          Marvin.emboss(original, image, 30);
          image.draw(canvas);
        }

        function halftone(){
          image = original.clone();
          Marvin.halftoneErrorDiffusion(original, image);
          image.draw(canvas);
        }

        function invert(){
          image = original.clone();
          Marvin.invertColors(original, image);
          image.draw(canvas);
        }

        function edgeDetection1(){
          image = original.clone();
          image.clear(0xFF000000);
          Marvin.prewitt(original, image);
          image.draw(canvas);
        }

        function edgeDetection2(){
          image = original.clone();
          image.clear(0xFF000000);
          Marvin.prewitt(original, image);
          Marvin.invertColors(image, image);
          Marvin.thresholding(image, image, 200);
          image.draw(canvas);
        }

        function crop(){
          image = original.clone();
          Marvin.crop(original, image, 140, 165, 125, 50);
          canvas.getContext("2d").clearRect(0,0,canvas.width, canvas.height);
          image.draw(canvas);
        }

        function scale(){
          image = original.clone();
          Marvin.scale(original, image, 200);
          canvas.getContext("2d").clearRect(0,0,canvas.width, canvas.height);
          image.draw(canvas);
        }

        function reset(){
          original.draw(canvas);
        }



        //site: http://jsfiddle.net/m1erickson/6ZsCz/

        $("#rodar_esquerda").click(function(){ 
            angleInDegrees+=90;
            drawRotated(angleInDegrees);
        });

        $("#rodar_direita").click(function(){ 
            angleInDegrees-=90;
            drawRotated(angleInDegrees);
        });

        function drawRotated(degrees){
            original.clearRect(0,0,canvas.width,canvas.height);
            original.save();
            original.translate(canvas.width/2,canvas.height/2);
            original.rotate(degrees*Math.PI/180);
            original.drawImage(image,-image.width/2,-image.width/2);
            original.restore();
        }


    </script>
  

  </body>
</html>