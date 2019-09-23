<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  
<!-- Mirrored from foxythemes.net/preview/products/beagle/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Mar 2019 06:35:45 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="trabalho 2">
    <meta name="author" content="Valter Cinquenta">
    <link rel="shortcut icon" href="{{asset('bleagle2/img/book.png')}}">
    <title>Trabalho 2</title>

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
    <div class="be-wrapper be-fixed-sidebar">

      <!-- Cabecalho -->
      @guest
        <nav class="navbar navbar-expand fixed-top be-top-header">
        <div  class="container-fluid">
          <div style="background-color: rgb(255,255,255);" class="be-navbar-header">
           <!--  <a  class="navbar-brand"> <img style="width: 150px; height: 50px" src="{{asset('/bleagle2/img/logo-samcol.jpg')}}"></a> -->
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
      

     @else  <!--  Else do guest -->
      
     @endguest

      <!-- Menu e base-->
      <div class="main-content container-fluid">
           <div class="row">
            <div class="col-12 col-lg-10 offset-lg-1">
            <div class="col-12 col-lg-12">
              <div class="card">
                <div class="card-header">Default Tabs</div>
                <div class="tab-container">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" href="#home" data-toggle="tab" role="tab">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#profile" data-toggle="tab" role="tab">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="#messages" data-toggle="tab" role="tab">Messages</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel">
                      <h4>Top Tabs</h4>
                      <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta lacus ipsum, tempus consequat turpis auctor sit amet. Pellentesque porta mollis nisi, pulvinar convallis tellus tristique nec.</p>
                      <p> Nam aliquet consequat quam sit amet dignissim. Quisque vel massa est. Donec dictum nisl dolor, ac malesuada tellus efficitur non. Pellentesque pellentesque odio neque, eget imperdiet eros vehicula lacinia.</p>
                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel">
                      <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima praesentium laudantium ipsa, enim maxime placeat, dolores quos sequi nisi iste velit perspiciatis rerum eveniet voluptate laboriosam perferendis ipsum. Expedita, maiores.</p>
                      <p> Consectetur adipisicing elit. Minima praesentium laudantium ipsa, enim maxime placeat, dolores quos sequi nisi iste velit perspiciatis rerum eveniet voluptate laboriosam perferendis ipsum. Expedita, maiores.</p>
                    </div>
                    <div class="tab-pane" id="messages" role="tabpanel">
                      <p>Consectetur adipisicing elit. Ipsam ut praesentium, voluptate quidem necessitatibus quam nam officia soluta aperiam, recusandae.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos facilis laboriosam, vitae ipsum tenetur atque vel repellendus culpa reiciendis velit quas, unde soluta quidem voluptas ipsam, rerum fuga placeat rem error voluptate eligendi modi. Delectus, iure sit impedit? Facere provident expedita itaque, magni, quas assumenda numquam eum! Sequi deserunt, rerum.</p><a href="#">Read more  </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      


</div>

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


<!-- PESQUISA AVANCADA -->
    <script>
      function pesquisar(idTabela, idTxt) {
          var input, filter, table, tr, td, i;
          input = document.getElementById(idTxt);
          filter = input.value.toUpperCase();
          table = document.getElementById(idTabela);
          tr = table.getElementsByTagName("tr");
          for (i = 1; i < tr.length; i++) {
            // Hide the row initially.
            tr[i].style.display = "none";

            td = tr[i].getElementsByTagName("td");
            for (var j = 0; j < td.length; j++) {
              cell = tr[i].getElementsByTagName("td")[j];
              if (cell) {
                if (cell.innerHTML.toUpperCase().indexOf(filter) > -1) {
                  tr[i].style.display = "";
                  break;
                } 
              }
            }
        }
      }


      function pesquisar2(classeTabela, idTxt) {
          var input, filter, table, tr, td, i;
          input = document.getElementById(idTxt);
          filter = input.value.toUpperCase();
          table = document.getElementById(classeTabela);
          tr = table.getElementsByTagName("tr");
          
              for (i = 1; i < tr.length; i++) {
                // Hide the row initially.
                tr[i].style.display = "none";

                td = tr[i].getElementsByTagName("td");
                for (var j = 0; j < td.length; j++) {
                  cell = tr[i].getElementsByTagName("td")[j];
                  if (cell) {
                    if (cell.innerHTML.toUpperCase().indexOf(filter) > -1) {
                      tr[i].style.display = "";
                      break;
                    } 
                  }
                }
            }
      }
    </script>

    
  

  </body>
</html>