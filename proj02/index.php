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

<!-- INDEX.HTML & INDEX-2.HTML -->
    <link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/jqvmap/jqvmap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" href="assets/css/app.css" type="text/css"/>

<!-- FORM-ELEMENT.HTML-->
    <link rel="stylesheet" type="text/css" href="assets/lib/select2/css/select2.min.css"/>


<!-- FORM-MULTISELECT.HTML -->
    <link rel="stylesheet" href="assets/css/app.css" type="text/css"/>



<!-- PAGES-GALLERY.HTML -->
    <link rel="stylesheet" type="text/css" href="assets/lib/jquery.magnific-popup/magnific-popup.css"/>

<!-- SESSAO DE ESTILOS PARA OS ULTIMOS DETALHES -->
<style>
 
 
</style>
</head>
  <body>


      <!-- Menu e base-->
      <div class="main-content container-fluid">
           <div class="row">
            <div class="col-12 col-lg-10 offset-lg-1">
            <div class="col-12 col-lg-12">
              <div class="card">
                <div class="card-header">trab_prat_02</div>
                <div class="tab-container">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" href="#home" data-toggle="tab" role="tab">Rotação</a></li>
                    <li class="nav-item "><a class="nav-link" href="#messages" data-toggle="tab" role="tab">Escala (Redimensionar)</a></li>
                    <li class="nav-item"><a onclick="clickDetectCorners()" class="nav-link" href="#messages1" data-toggle="tab" role="tab">clipping (Recortar)</a></li>
                    <li class="nav-item"><a class="nav-link" href="#messages2" data-toggle="tab" role="tab">Diversos</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel">
                       <h4>Rotação</h4>
                        <div class="mt-4 mb-2">
                            <div class="btn-toolbar">
                              <div class="btn-group btn-group-justified mb-2" role="group">
                                <button id="rodar_direita">Esquerda</button>
                                <button id="rodar_esquerda">Direita</button>
                              </div>
                            </div>
                        </div>
                        <canvas style="position:relative; cursor: move;" class="dragme" id="canvas1" width=796 height=500></canvas>
                         <br>
                         <br> 
                         <br>
                         <br>
                         <br> 
                         <br>
                          <br>
                         <br> 
                         <br>
                         <br>
                         <br> 
                         <br>

                    </div>
                    
                    <div class="tab-pane" id="messages" role="tabpanel">
                      <h4>Escala (Redimensionar)</h4>
                     <div class="mt-4 mb-2">
                            <div class="btn-toolbar">
                              <div class="btn-group btn-group-justified mb-2" role="group">
                                <!-- <a id="rodar_esquerda" class="btn btn-secondary" >Tela cinza</a>
                                <a id="rodar_direita" class="btn btn-secondary" >Preto e branco</a> -->
                                <input id="escala" value="150" type="number" name="">
                                <button onclick="scale()">Escala (Redimensionar)</button>
                                <button onclick="reset()">Repor</button>
                              </div>
                            </div>
                        </div>
                      


                    </div>
                     <div class="tab-pane" id="messages1" role="tabpanel">
                       <h4>clipping (Recortar)</h4>
                           <div class="mt-4 mb-2">
                            <div class="btn-toolbar">
                              <div class="btn-group btn-group-justified mb-2" role="group">
                               
                                <input id="x1" value="50" type="number">
                                <input id="y1" value="108" type="number">
                                <input id="x2" value="90" type="number">
                                <input id="y2" value="60" type="number">
                                  <button  onclick="clickSelectCropArea()">Preview</button>
                                  <button  onclick="clickAutoCropCrop()">Recortar</button>
                                  <button onclick="clickAutoCropReset()">Repor</button>

                              </div>
                            </div>
                        </div>
                         <canvas style="position:relative; cursor: move;" class="dragme" id="canvas2" width=796 height=500></canvas>
                         <br>
                         <br> 
                         <br>
                         <br>
                         <br> 
                         <br>
                          <br>
                         <br> 
                         <br>
                         <br>
                         <br> 
                         <br>
                     

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
                                <!-- <a class="btn btn-secondary" onclick="crop()">Recortar</a> -->
                                <!-- <a class="btn btn-secondary" onclick="scale()">Escala (Redimensionar)</a> -->
                                <a class="btn btn-secondary" onclick="reset()">Repor</a>
                              </div>
                            </div>
                        </div>


                      </div>
                    </div>
                    <div class="col-12 col-lg-10 offset-lg-1 "> 
                        <!-- <canvas id="canvas" width="796" height="500"></canvas><br/> -->
                        <canvas id="canvas" style="position:relative; cursor: move;" class="dragme" width="796" height="500"></canvas>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      

  <!-- bootstrap -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</script>
<!-- INDEX.HTML & INDEX-2.HTML -->
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>
   
    <script src="assets/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="assets/lib/countup/countUp.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>

<!-- FORM-ELEMENT.HTML-->
    <!-- <script src="assets/lib/bootstrap-slider/bootstrap-slider.min.js" type="text/javascript"></script> -->


<!-- UI-MODALS -->
    <script src="assets/lib/jquery.niftymodals/js/jquery.niftymodals.js" type="text/javascript"></script>
    <script type="text/javascript">
      $.fn.niftyModal('setDefaults',{
        overlaySelector: '.modal-overlay',
        contentSelector: '.modal-content',
        closeSelector: '.modal-close',
        classAddAfterOpen: 'modal-show'
      });
      
      $(document).ready(function(){

      });
    </script>




    <script src="assets/lib/jquery.magnific-popup/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <script src="assets/lib/masonry-layout/masonry.pkgd.min.js" type="text/javascript"></script>


    <script src="https://www.marvinj.org/releases/marvinj-0.9.js"></script>
    <script src="assets/marvinj-1.0.min.js" type="text/javascript"></script>

    <script type="text/javascript">
      
      var canvas = document.getElementById("canvas");
        var original = new MarvinImage();
        var image;

        var caminho = "https://images.theconversation.com/files/288509/original/file-20190819-123727-g4fre1.jpg?ixlib=rb-1.1.0&rect=1270%2C246%2C3687%2C2632&q=45&auto=format&w=496&fit=clip";

        original.load(caminho, function(){
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
          var x1 = document.getElementById("x1").value;
          var y1 = document.getElementById("y1").value;
          var x2 = document.getElementById("x2").value;
          var y2 = document.getElementById("y2").value;
          image = original.clone();
          // Marvin.crop(original, image, 140, 165, 125, 50);
          
          Marvin.crop(original, image, x1, y1, x2, y2);
          canvas.getContext("2d").clearRect(0,0,canvas.width, canvas.height);
          image.draw(canvas);
        }

          
        function scale(){
          var escala = document.getElementById("escala").value;
          image = original.clone();
          // Marvin.scale(original, image, 200);
          Marvin.scale(original, image, escala);
          canvas.getContext("2d").clearRect(0,0,canvas.width, canvas.height);
          image.draw(canvas);
        }

        function reset(){
          original.draw(canvas);
        }



        //site: http://jsfiddle.net/m1erickson/6ZsCz/

        var canvas1=document.getElementById("canvas1");
        var ctx=canvas1.getContext("2d");

        var angleInDegrees=0;

        var image1=document.createElement("img");
        image1.onload=function(){
            ctx.drawImage(image1,canvas1.width/2-image1.width/2,canvas1.height/2-image1.width/2);
        }
        image1.src=caminho;



        $("#rodar_esquerda").click(function(){ 
            angleInDegrees+=90;
            drawRotated(angleInDegrees);
        });

        $("#rodar_direita").click(function(){ 
            angleInDegrees-=90;
            drawRotated(angleInDegrees);
        });

        function drawRotated(degrees){
            ctx.clearRect(0,0,canvas1.width,canvas1.height);
            ctx.save();
            ctx.translate(canvas1.width/2,canvas1.height/2);
            ctx.rotate(degrees*Math.PI/180);
            ctx.drawImage(image1,-image1.width/2,-image1.width/2);
            ctx.restore();
        }


    </script>





    <script type="text/javascript">
      
                    /**********************************************************************
           * GLOBAL VARIABLES
           *********************************************************************/
          var imageExampleFilters,
            imageExampleFiltersOut,
            imageAutoCrop,
            imageFractals;
            
            
            
          /**********************************************************************
           * LOADING METHODS imagem: ttps://i.imgur.com/lgO7TRl.png
           *********************************************************************/

          // exampleFilters();
          exampleAutoCrop();
          // exampleFractals();


          function exampleAutoCrop(){
            imageAutoCrop = new MarvinImage();
            imageAutoCrop.load(caminho, function(){
              imageAutoCrop.draw(document.getElementById("canvas2"));
            });
          }


          var exampleFeaturesCornersMap;
          var exampleFeaturesCropRect;

          function clickDetectCorners(){
            var factor = 796/200;
            var image = new MarvinImage(300, 158);
            Marvin.scale(imageAutoCrop, image, 100);
            exampleFeaturesCornersMap = Marvin.moravec(image.clone(), image, 5, 10000);
            
            var ctx = document.getElementById("canvas2").getContext("2d");
            ctx.fillStyle = "#ff0000";
            for(var x=0; x<exampleFeaturesCornersMap.length; x++){
              for(var y=0; y<exampleFeaturesCornersMap.length; y++){
                if(exampleFeaturesCornersMap[x][y] > 0){
                  // scale up the corners coordinates
                  ctx.fillRect(Math.floor(x*factor),Math.floor(y*factor),10,10);
                }
              }
            }
            clickAutoCropReset();
          }

          function clickSelectCropArea(){
            imageAutoCrop.draw(document.getElementById("canvas2"));
            
            var factor = 1000/300;
            // var x1=9999;
            // var x2=0;
            // var y1=9999;
            // var y2=0;
          var x1 = document.getElementById("x1").value;
          var y1 = document.getElementById("y1").value;
          var x2 = document.getElementById("x2").value;
          var y2 = document.getElementById("y2").value;

            for(var x=0; x<exampleFeaturesCornersMap.length; x++){
              
              var minY=9999;
              var maxY=0;
              for(var y=0; y<exampleFeaturesCornersMap.length; y++){
                if(exampleFeaturesCornersMap[x][y]){
                  if(y < minY){ minY = y; }
                  if(y > maxY){ maxY = y; }
                }
              }
              
              if(maxY-minY > 30){
                if(x < x1){     x1 = x;   }
                if(x > x2){     x2 = x;   }
                if(minY < y1){    y1 = minY;  }
                if(maxY > y2){    y2 = maxY;  }
              }
            }
            
            // Scale up to the original resolution
            x1 = Math.floor(x1*factor);
            x2 = Math.floor(x2*factor);
            y1 = Math.floor(y1*factor);
            y2 = Math.floor(y2*factor);
            
            // Add some margin
            x1 -= Math.floor((x2-x1)*0.2);
            x2 += Math.floor((x2-x1)*0.2);
            y1 -= Math.floor((y2-y1)*0.05);
            y2 += Math.floor((y2-y1)*0.05);
            
            exampleFeaturesCropRect = [x1,y1,x2-x1,y2-y1];
            
            console.log("x1:"+x1+",x2:"+x2+",y1:"+y1+",y2:"+y2);
            var ctx = document.getElementById("canvas2").getContext("2d");
            ctx.strokeStyle = "#ff0000";
            ctx.lineWidth=4;
            ctx.rect(x1, y1, x2-x1, y2-y1);
            ctx.stroke();
          }

          function clickAutoCropCrop(){
            var image = new MarvinImage(1,1);
            Marvin.crop(imageAutoCrop, image, exampleFeaturesCropRect[0], exampleFeaturesCropRect[1], exampleFeaturesCropRect[2], exampleFeaturesCropRect[3]);
            
            // Clear canvas
            var canvas = document.getElementById("canvas2");
            canvas.getContext("2d").clearRect(0, 0, canvas.width, canvas.height);
            
            image.draw(document.getElementById("canvas2"), exampleFeaturesCropRect[0], exampleFeaturesCropRect[1]);
          }

          function clickAutoCropReset(){
            imageAutoCrop.draw(document.getElementById("canvas2"));
          }


    </script>
  

  <!-- DRUG IMAGE -->
  <script type="text/javascript">

      function startDrag(e) {
        // determine event object
        if (!e) {
          var e = window.event;
        }
        if(e.preventDefault) e.preventDefault();

        // IE uses srcElement, others use target
        targ = e.target ? e.target : e.srcElement;

        if (targ.className != 'dragme') {return};
        // calculate event X, Y coordinates
          offsetX = e.clientX;
          offsetY = e.clientY;

        // assign default values for top and left properties
        if(!targ.style.left) { targ.style.left='0px'};
        if (!targ.style.top) { targ.style.top='0px'};

        // calculate integer values for top and left 
        // properties
        coordX = parseInt(targ.style.left);
        coordY = parseInt(targ.style.top);
        drag = true;

        // move div element
          document.onmousemove=dragDiv;
                return false;
        
      }

      function dragDiv(e) {
        if (!drag) {return};
        if (!e) { var e= window.event};
        // var targ=e.target?e.target:e.srcElement;
        // move div element
        targ.style.left=coordX+e.clientX-offsetX+'px';
        targ.style.top=coordY+e.clientY-offsetY+'px';
        return false;
      }

      function stopDrag() {
        drag=false;
      }

      window.onload = function() {
        document.onmousedown = startDrag;
        document.onmouseup = stopDrag;
      }
  </script>

  </body>
</html>