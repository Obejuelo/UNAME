<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Claustro Docente-Universidad Nacionalista México</title>
    <meta name="author" content="Obed Vicente Hernández Ramírez">
    <meta name="owner" content="Universidad Nacionalista México">
    <meta name="theme-color" content="rgb(12,83,59)">
    <link rel="icon" type="image/png" href="../image/logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400" rel="stylesheet">
    <link rel="stylesheet" href="../css/estilos.bach.css">
    <link rel="stylesheet" href="../css/galeria.css">
    <link rel="stylesheet" href="../css/thumbnail-gallery.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="../js/fontawesome-all.min.js"></script>
</head>
<body>  
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navegacion" id="posicion">
        <div class="container">
            <a href="../index" class="navbar-brand"><img src="../image/unm.png" alt="universidad" class="img-nav"></a>
            <div class="unm mr-5"><a href="../index"><h1 id="unm">Universidad Nacionalista México</h1></a></div>
            <div class="uname mr-5"><a href="../index"><h1 id="uname">UNM</h1></a></div>
            <div class="social">
                <a href="https://www.facebook.com/UNIVERSIDADNACIONALISTAMEXICO/" target="_blank"><i class="fab fa-facebook-square icono" id="icono1"></i></a>
                <a href="https://www.instagram.com/universidad_mexico/?hl=es-la" target="_blank"><i class="fab fa-instagram icono" id="icono2"></i></a>
                <a href="https://twitter.com/Universidad_mex?lang=es"><i class="fab fa-twitter-square icono" id="icono3"></i></a>
                <a href="https://www.youtube.com/channel/UC7-y9I0oNAAhYj5JHKxVBUw"><i class="fab fa-youtube-square icono" id="icono4"></i></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbar" aria-expanded="false" aria-label="mi menu" id="show-menu">
                <span class="navbar-toggler-icon" id="btn-menu"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="../index" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="../somos/somos" class="nav-link dropdown-toggle" id="mi_menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">¿Quienes somos?</a>
                        <div class="dropdown-menu" aria-labelledby="mi_menu">
                            <div class="sub-menu"><a href="../somos/claus_lic" class="dropdown-item">Directorio</a>
                                <div class="menu-sub"><a href="claus_lic">Claustro docente</a></div>
                                <div class="menu-sub2"><a href="directivos">Directivos</a></div>
                            </div>
                            <a href="../somos/instalaciones" class="dropdown-item">Instalaciones</a>
                            <a href="../somos/filosofia" class="dropdown-item">Filosofía Institucional</a>
                            <a href="../somos/historia" class="dropdown-item">Historia</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                            <a href="../oferta.html" class="nav-link dropdown-toggle" id="mi_menu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Oferta académica</a>
                            <div class="dropdown-menu" aria-labelledby="mi_menu2">
                                <a href="../oferta/posgrado" class="dropdown-item">Posgrados</a>
                                <a href="../oferta/superior" class="dropdown-item">Licenciaturas</a>
                                <a href="../oferta/bachillerato" class="dropdown-item">Bachillerato general</a>
                                <a href="../oferta/spam" class="dropdown-item">Secundaria y Preparatoria Abierta</a>
                                <a href="../oferta/inter" class="dropdown-item">Internacionalización</a>
                            </div>
                        </li>
                    <li class="nav-item">
                        <a href="../noticias" class="nav-link">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a href="../galeria" class="nav-link">Galería</a>
                    </li>
                    <li class="nav-item">
                        <a href="../contacto" class="nav-link">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.sesweb.mx/login.aspx?ReturnUrl=%2f" class="nav-link" target="_blank">Plataforma</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid titulo">
        <div class="row justify-content-center">
            <div class="col-12 align-bach"><p class="h1 text-center">Claustro docente</p></div>
        </div>
    </div>
    
    <section class="container">
        <div class="row mt-3">
            <div class="col-12">
                <div class="list-group" role="tablist">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-auto mt-2">
                            <!--|||||||GRUPO DE BOTONES PARA LAS LICENCIATURAS|||||||||||||-->
                            <div class="boton-group mb-1">
                                <a class="btn btn-secondary bach text-white" id="maestria">Maestrías</a>
                            </div>
                            <div class="btn-group my-1">
                                <button class="btn btn-secondary dropdown-toggle" id="id-boton" data-toggle="dropdown">Licenciaturas</button>
                                <div class="dropdown-menu" aria-labelledby="id-boton" id="menu-claustro">
                                    <a class="dropdown-item one active" data-toggle="list" href="#elemento1" role="tab" aria-controls="elemento1">Administración / Contaduría</a>
                                    <a class="dropdown-item two" data-toggle="list" href="#elemento2" role="tab" aria-controls="elemento2">Derecho / Criminología</a>
                                    <a class="dropdown-item three" data-toggle="list" href="#elemento3" role="tab" aria-controls="elemento3">Educación Física</a>
                                    <a class="dropdown-item for" data-toggle="list" href="#elemento4" role="tab" aria-controls="elemento4">Filosofía</a>
                                    <a class="dropdown-item five" data-toggle="list" href="#elemento5" role="tab" aria-controls="elemento5">Nutrición</a>
                                    <a class="dropdown-item six" data-toggle="list" href="#elemento6" role="tab" aria-controls="elemento6">Pedagogía</a>
                                    <a class="dropdown-item seven" data-toggle="list" href="#elemento7" role="tab" aria-controls="elemento7">Psicología Social</a>
                                    <a class="dropdown-item eight" data-toggle="list" href="#elemento8" role="tab" aria-controls="elemento8">Sistemas</a>
                                </div>
                            </div>
                            <div class="boton-group mb-1">
                                <a class="btn btn-secondary bach text-white" id="bachillerato">Bachillerato</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                    <!--MAESTROS POR LICENCIATURA-->
                <div class="tab-content" id="nav-tabContent">

                    <div class="tab-pane fade show active" id="elemento1" role="tabpanel" aria-labelledby="elemento1">
                        <div class="row justify-content-center" id="admon">
                        <div class="col-12 mt-3"><hr><p class="text-center h3">Administración - Contaduría</p></div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="elemento2" role="tabpanel" aria-labelledby="elemento2">
                        <div class="row justify-content-center" id="derecho">
                        <div class="col-12 mt-3"><hr><p class="text-center h3">Derecho - Criminología</p></div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="elemento3" role="tabpanel" aria-labelledby="elemento3">
                        <div class="row justify-content-center" id="fisica">
                        <div class="col-12 mt-3"><hr><p class="text-center h3">Educación Física</p></div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="elemento4" role="tabpanel" aria-labelledby="elemento4">
                        <div class="row justify-content-center" id="filosofia">
                        <div class="col-12 mt-3"><hr><p class="text-center h3">Filosofía</p></div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="elemento5" role="tabpanel" aria-labelledby="elemento5">
                        <div class="row justify-content-center" id="nutricion">
                        <div class="col-12 mt-3"><hr><p class="text-center h3">Nutrición y Educación Alimentaria</p></div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="elemento6" role="tabpanel" aria-labelledby="elemento6">
                        <div class="row justify-content-center" id="pedagogia">
                        <div class="col-12 mt-3"><hr><p class="text-center h3">Pedagogía</p></div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="elemento7" role="tabpanel" aria-labelledby="elemento7">
                        <div class="row justify-content-center" id="psicologia">
                        <div class="col-12 mt-3"><hr><p class="text-center h3">Psicología</p></div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="elemento8" role="tabpanel" aria-labelledby="elemento8">
                        <div class="row justify-content-center" id="sistemas">
                        <div class="col-12 mt-3"><hr><p class="text-center h3">Sistemas Computacionales</p></div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="elemento9" role="tabpanel" aria-labelledby="elemento9">
                        <div class="row justify-content-center">
                        <div class="col-12 mt-3"><hr><p class="text-center h3">Bachillerato General</p></div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="elemento10" role="tabpanel" aria-labelledby="elemento10">
                        <div class="row justify-content-center">
                        <div class="col-12 mt-3"><hr><p class="text-center h3">Maestrías</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script>
mostrarMaestros();
function mostrarMaestros(){
  const xhr = new XMLHttpRequest();
  xhr.open('GET', 'licenciatura.json', true);
  xhr.onload = function(){
    if (this.status === 200){
      const maestro = JSON.parse(this.responseText);
      mostrarMaestrosAdmon(maestro.administracion);
      mostrarMaestrosDerecho(maestro.derecho);
      mostrarMaestrosFisica(maestro.fisica);
      mostrarMaestrosFilosofia(maestro.filosofia);
      mostrarMaestrosNutricion(maestro.nutricion);
      mostrarMaestrosPedagogia(maestro.pedagogia);
      mostrarMaestrosPsicologia(maestro.psicologia);
      mostrarMaestrosSistemas(maestro.sistemas);
    }
  }
  xhr.send();
}
//Trabajando con funciones
function mostrarMaestrosAdmon(maestro) {
  metodoModal(maestro, 'admon', 'la-lcp');
}

function mostrarMaestrosDerecho(maestro) {
  metodoModal(maestro, 'derecho', 'ld-lcc');
}

function mostrarMaestrosFisica(maestro) {
  metodoModal(maestro, 'fisica', 'lef');
}

function mostrarMaestrosFilosofia(maestro) {
  metodoModal(maestro, 'filosofia', 'lf');
}

function mostrarMaestrosNutricion(maestro) {
  metodoModal(maestro, 'nutricion', 'ln');
}

function mostrarMaestrosPedagogia(maestro) {
  metodoModal(maestro, 'pedagogia', 'lp');
}

function mostrarMaestrosPsicologia(maestro) {
  metodoModal(maestro, 'psicologia', 'lps');
}

function mostrarMaestrosSistemas(maestro) {
  metodoModal(maestro, 'sistemas', 'lsc');
}

//FUNCION UTILIZANDO LA CONCATENACION ANTIGUA DE JAVASCRIPT.
function metodoModal(maestro, id, carpeta){
  const contenido = document.getElementById(id);
  maestro.forEach(function(dato){
    contenido.innerHTML += '<div class="col-md-4 col-lg-3 mt-3 claustro">'+
            '<img class="rounded-circle" src="../image/claustro/'+carpeta+'/'+dato.foto+'" alt="perfil" width="90" height="90">'+
            '<p>'+dato.nombre+'</p>'+
            '<p><a class="btn btn-secondary btn-sm" href="#" role="button" data-toggle="modal" data-target="#'+dato.id+'">Ver más &raquo;</a></p>'+
            '<div class="modal fade" id="'+dato.id+'" tabindex="-1" role="dialog" aria-labelledby="'+dato.id+'" aria-hidden="true">'+
              '<div class="modal-dialog">'+
                '<div class="modal-content d-flex align-items-center">'+
                  '<div class="modal-body modal-claus">'+
                    '<p class="text-justify text-muted">'+dato.descripcion+'</p>'+
                  '</div>'+
                  '<div class="modal-footer">'+
                    '<button class="btn btn-success" data-dismiss="modal">Cerrar</button>'+
                  '</div>'+
                '</div>'+
              '</div>'+
            '</div>'+
          '</div>';
  })
}

//correccion del dropdown claustro
let dropdown1 = document.querySelector('.dropdown-item.one');
let dropdown2 = document.querySelector('.dropdown-item.two');
let dropdown3 = document.querySelector('.dropdown-item.three');
let dropdown4 = document.querySelector('.dropdown-item.for');
let dropdown5 = document.querySelector('.dropdown-item.five');
let dropdown6 = document.querySelector('.dropdown-item.six');
let dropdown7 = document.querySelector('.dropdown-item.seven');
let dropdown8 = document.querySelector('.dropdown-item.eight');
let bachillerato = document.getElementById('bachillerato');
let bach = document.getElementById('elemento9');
let maestria = document.getElementById('maestria');
let posgrado = document.getElementById('elemento10');

//console.log(dropdown);
dropdown1.addEventListener('click', function(){
  $(dropdown2).removeClass('active show');
  $(dropdown3).removeClass('active show');
  $(dropdown4).removeClass('active show');
  $(dropdown5).removeClass('active show');
  $(dropdown6).removeClass('active show');
  $(dropdown7).removeClass('active show');
  $(dropdown8).removeClass('active show');
})
dropdown2.addEventListener('click', function(){
  $(dropdown1).removeClass('active show');
  $(dropdown3).removeClass('active show');
  $(dropdown4).removeClass('active show');
  $(dropdown5).removeClass('active show');
  $(dropdown6).removeClass('active show');
  $(dropdown7).removeClass('active show');
  $(dropdown8).removeClass('active show');
})
dropdown3.addEventListener('click', function(){
  $(dropdown1).removeClass('active show');
  $(dropdown2).removeClass('active show');
  $(dropdown4).removeClass('active show');
  $(dropdown5).removeClass('active show');
  $(dropdown6).removeClass('active show');
  $(dropdown7).removeClass('active show');
  $(dropdown8).removeClass('active show');
})
dropdown4.addEventListener('click', function(){
  $(dropdown1).removeClass('active show');
  $(dropdown2).removeClass('active show');
  $(dropdown3).removeClass('active show');
  $(dropdown5).removeClass('active show');
  $(dropdown6).removeClass('active show');
  $(dropdown7).removeClass('active show');
  $(dropdown8).removeClass('active show');
})
dropdown5.addEventListener('click', function(){
  $(dropdown1).removeClass('active show');
  $(dropdown2).removeClass('active show');
  $(dropdown3).removeClass('active show');
  $(dropdown4).removeClass('active show');
  $(dropdown6).removeClass('active show');
  $(dropdown7).removeClass('active show');
  $(dropdown8).removeClass('active show');
})
dropdown6.addEventListener('click', function(){
  $(dropdown1).removeClass('active show');
  $(dropdown3).removeClass('active show');
  $(dropdown4).removeClass('active show');
  $(dropdown5).removeClass('active show');
  $(dropdown2).removeClass('active show');
  $(dropdown7).removeClass('active show');
  $(dropdown8).removeClass('active show');
})
dropdown7.addEventListener('click', function(){
  $(dropdown1).removeClass('active show');
  $(dropdown3).removeClass('active show');
  $(dropdown4).removeClass('active show');
  $(dropdown5).removeClass('active show');
  $(dropdown6).removeClass('active show');
  $(dropdown2).removeClass('active show');
  $(dropdown8).removeClass('active show');
})
dropdown8.addEventListener('click', function(){
  $(dropdown1).removeClass('active show');
  $(dropdown3).removeClass('active show');
  $(dropdown4).removeClass('active show');
  $(dropdown5).removeClass('active show');
  $(dropdown6).removeClass('active show');
  $(dropdown7).removeClass('active show');
  $(dropdown2).removeClass('active show');
});
bachillerato.addEventListener('click', function () {
    $(bach).addClass('show active');
    $('#elemento1').removeClass('active');
    $('#elemento2').removeClass('active');
    $('#elemento3').removeClass('active');
    $('#elemento4').removeClass('active');
    $('#elemento5').removeClass('active');
    $('#elemento6').removeClass('active');
    $('#elemento7').removeClass('active');
    $('#elemento8').removeClass('active');
    $(posgrado).removeClass('active');
    $(dropdown1).removeClass('active show');
    $(dropdown3).removeClass('active show');
    $(dropdown4).removeClass('active show');
    $(dropdown5).removeClass('active show');
    $(dropdown6).removeClass('active show');
    $(dropdown7).removeClass('active show');
    $(dropdown2).removeClass('active show');
    $(dropdown8).removeClass('active show');
});
maestria.addEventListener('click', function () {
    $(posgrado).addClass('show active');
    $('#elemento1').removeClass('active');
    $('#elemento2').removeClass('active');
    $('#elemento3').removeClass('active');
    $('#elemento4').removeClass('active');
    $('#elemento5').removeClass('active');
    $('#elemento6').removeClass('active');
    $('#elemento7').removeClass('active');
    $('#elemento8').removeClass('active');
    $(bach).removeClass('active');
    $(dropdown1).removeClass('active show');
    $(dropdown3).removeClass('active show');
    $(dropdown4).removeClass('active show');
    $(dropdown5).removeClass('active show');
    $(dropdown6).removeClass('active show');
    $(dropdown7).removeClass('active show');
    $(dropdown2).removeClass('active show');
    $(dropdown8).removeClass('active show');
});

</script>
<?php require '../oferta/footer.php' ?>