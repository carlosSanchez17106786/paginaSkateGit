<?php
require_once 'header.php';
require_once 'menu.php';
?>
<header id="headerIndex">
    <video src="../imagenes/D_slide_conan_woman_-1.mp4" muted="muted" loop="loop" preload="none" controlslist="nodownload" playsinline autoplay="autoplay"
           id="videoEncabezado">
               
    </video>
    <h1 id="tituloEncabezado">SKATEBOARDING </h1>
</header>
<div class="container">
    <div class="row" id="rowUno">
        <div class="col-sm-6 efectoI">
            <a id="link" href=""></a> <img  src="" class="img1" id="imagen"/>
        </div>
        <div class="col-sm-6" id="col1">
            <p id="parrafo1"> “De alguna manera hemos llegado a creer que la grandeza es sólo para los pocos elegidos,
                para las superestrellas.
                La verdad es que la grandeza es para todos nosotros.
                Esto no se trata de reducir las expectativas;
                se trata de criarlos para cada uno de nosotros. La grandeza no está en un lugar especial, 
                y no está en una persona especial. La grandeza es donde alguien está tratando de encontrarlo. 
                Encuentra tu grandeza. “</p>
             <div id="divParaDecorar">
            
        </div>
        </div>
       
    </div>
    <div class="row"  id=rowDos">
        <div class="card-group">
            <a class="card" href="skate.php">
                <img class="card-img-top" src="../imagenes/sk8.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">SKATE</h5>
                </div>
            </a>
            <a class="card" href="cruiser.php">
                <img class="card-img-top" src="../imagenes/cou.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">CRUISER</h5>
                </div>
            </a>
            <a class="card" href="longBoard.php">
                <img class="card-img-top" src="../imagenes/long.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">LONGBOARD</h5>        
                </div>
            </a>
        </div>
    </div>


</div>

<?php require_once 'footer.php'; ?>