<?php
require_once 'header.php';
require_once 'menu.php';
?>

<div class="container-fluid">
    <header  id="encabezado">
        <div id="enca1">

        </div>
        <div id="enca2skate">

        </div>
        <div id="enca3">
            <p>SKATEBOARDING</p>
        </div>
    </header>

    <section id="cuerpo" class="row">
        <div id="cuer1" class="col-sm-5">
            <div class="divDecoracion">
            

            </div>
            <p class="textoInformativo">
                deporte que consiste en la habilidad para deslizarse sobre una tabla con ruedas mientras se realizan trucos, 
                figuras y piruetas de gran complejidad. En la mayoría de los trucos, el objetivo es levantar la tabla del suelo para hacer figuras en el aire,
                bien sea valiéndose de impulsos o movimientos, bien ayudándose con las manos o apoyándose en determinadas superficies.
                Como tal, es un deporte fundamentalmente urbano que se puede practicar en casi cualquier superficie donde se pueda rodar.
                En este sentido, puede practicarse principalmente en dos ambientes: el callejero y las rampas. El estilo de calle es aquel asociado a todas 
                las superficies que puedan encontrarse en los trazados urbanos, como calles, vías peatonales, rampas, escaleras, barandillas, etc. 
                Mientras que el estilo de rampa es aquel que se practica en las superficies de medio tubo (half pipe) o un cuarto de tubo (quarter pipe), 
                sobre todo en lo referente a los trucos y figuras que se pueden hacer en los bordes de las rampas.
            </p>
        </div>
        <div id="cuer2" class="col-sm-7">
            <div>
                <img src="../imagenes/sk82.jpg"/>  
            </div>
                
        </div>
    </section>
    <section class="row" id="cuerpoVideo">
        <div id="divVideoDecoracion">
            
        </div>
        <iframe id="videoSkate" src="https://www.youtube.com/embed/F1sjuey25ug" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>

</div>






<?php
require_once 'footer.php';
?>