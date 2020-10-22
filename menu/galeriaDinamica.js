    /**
     * Array con las imagenes y enlaces que se iran mostrando en la web
     */
    var imagenes=new Array(
        ['../imagenes/skatePagina.jpg','http://www.lawebdelprogramador.com/cursos/'],
        ['../imagenes/skatePagina2.jpg','http://www.lawebdelprogramador.com/foros/'],
        ['../imagenes/amigoSkate.jpg','http://www.lawebdelprogramador.com/pdf/'],
        ['../imagenes/amigoSkate2.jpg','http://www.lawebdelprogramador.com/utilidades/'],
        ['../imagenes/amigoSkate3.jpg','http://www.lawebdelprogramador.com/utilidades/'],
        ['../imagenes/amigoSkate4.jpg','http://www.lawebdelprogramador.com/utilidades/']
    );
    var contador=0;
 
    /**
     * Funcion para cambiar la imagen y link
     */
    function rotarImagenes()
    {
        // cambiamos la imagen y la url
        contador++;
 
        
        const imagen = document.getElementById('imagen');
    imagen.style.opacity = "0";
setTimeout(() => {
   
        document.getElementById("imagen").src=imagenes[contador%imagenes.length][0];
        document.getElementById("link").href=imagenes[contador%imagenes.length][1];

  imagen.style.opacity = "1";
}, 1000);
    }
 
    /**
     * Función que se ejecuta una vez cargada la página
     */
    onload=function()
    {
        // Cargamos una imagen aleatoria
        rotarImagenes();
 
        // Indicamos que cada 5 segundos cambie la imagen
        setInterval(rotarImagenes,5000);
    }

