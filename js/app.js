//FUNCION PARA CAMBIAR EL COLOR DEL NAV CUANDO SE DE SCROLL
let lastScrollTop = 56;
let posicion = document.getElementById('posicion');
let unm = document.getElementById('unm');
let uname = document.getElementById('uname');
let st = window.pageYOffset || document.documentElement.scroll;

window.addEventListener("scroll", function() {
    var st = window.pageYOffset || document.documentElement.scrollTop;
    if (st > lastScrollTop) {
        posicion.className = "navbar navbar-expand-lg fixed-top navegacion navbar-light bg-light";
        unm.style.color = "#000";
        uname.style.color = "#000";
        uname.style.transition = "all .5s";
    }
    let nuevo = st;
    if (nuevo <= lastScrollTop) {
        posicion.style.background = "rgba(10, 107, 60, .3)";
        posicion.className = "navbar navbar-expand-lg fixed-top navegacion navbar-dark";
        unm.style.color = "#fff";
        uname.style.color = "#fff";
    }
}, false);

//FUNCION PARA CAMBIAR DE COLOR LOS ICONOS DE REDES SOCIALES CUANDO SE HAGA SCROLL
window.addEventListener("scroll", function() {
    let icono1 = document.getElementById('icono1');
    let icono2 = document.getElementById('icono2');
    let icono3 = document.getElementById('icono3');
    let icono4 = document.getElementById('icono4');
    let scroll = 56;
    st = window.pageYOffset || document.documentElement.scrollTop;
    if (st > scroll) {
        icono1.style.color = '#3569FF';
        icono2.style.color = '#C00FC0';
        icono3.style.color = '#00A2FF';
        icono4.style.color = '#CE0E0E';
    }
    if (st <= scroll) {
        icono1.style.color = '#fff';
        icono2.style.color = '#fff';
        icono3.style.color = '#fff';
        icono4.style.color = '#fff';
    }
});

//FUNCION PARA CAMBIAR EL COLOR DEL NAV CUANDO SE DE CLICK EN DISPOSITIVOS MOVILES
let click = 0;
let botonMenu = document.getElementById('show-menu');
botonMenu.addEventListener('click', function() {
    click++;
    if (click % 2 == 1) {
        posicion.style.background = "rgb(12,83,59)";
        //$('nav .container').removeClass('width');
    } else {
        setTimeout("retardo()", 300);
    }
});

function retardo() {
    posicion.style.background = "rgba(10, 107, 60, .5)";
    $('nav .container').addClass('width');
}

//QUERY PARA QUE EL SLIDE NO PAUSE AL PASAR EL PUNTERO
//$('.carousel').carousel({
//    interval: 6000,
//    pause: false
//});

//Funcion para que el nav se oculte cuando se haga scrool hacia abajo y se muestre cuando sea hacia arriba
var scrool = 200;
window.addEventListener("scroll", function() {
    var st = window.pageYOffset || document.documentElement.scrollTop;
    if (st > scrool) {
        //posicion.style.display = 'none';
        //$(posicion).slideUp(200);
    } else {
        //posicion.style.display = 'block';
        //$(posicion).slideDown(200);
    }
    scrool = st;
}, false);

//FUNCIÓN PARA AÑADIRLE UNA CLASE AL NAV
document.addEventListener('DOMContentLoaded', function() {
    setInterval(function() {
        let ancho = screen.width;
        if (ancho >= 992) {
            $('nav .container').addClass('width');
        } else {
            $('nav .container').removeClass('width');
        }
        //console.log(ancho);
    }, 10);
});

//Double down
let down = document.querySelector('.down');
let body = document.querySelector('.info');
(function(){
  window.addEventListener("scroll", function(e) {
    let st = window.pageYOffset || document.documentElement.scrollTop;
    if (st >= 50) {
      down.style.opacity = '0';
      down.style.transition = 'opacity .5s';
    } else {
      down.style.opacity = '1';
      down.style.transition = 'opacity 1s linear';
    }
  })
})();

//ACTIVE
getActive();

function getActive() {
    const active = document.querySelectorAll('.nav-item');
    const titulo = document.querySelector('.titulo');

    let texto = titulo.firstChild.nextSibling.firstChild.nextSibling.firstChild.innerHTML;
    // console.log(texto);

    let inicio = active[0];
    let somos = active[1];
    let oferta = active[2];
    let noticias = active[3];
    let galeria = active[4];
    let contacto = active[5];

    switch (texto) {
        case 'Filosofía Institucional':
        case 'Claustro docente':
        case 'INSTALACIONES':
        case 'HISTORIA':
            $(somos).addClass('active');
            $(inicio).removeClass('active');
            break;
        case 'MAESTRÍAS':
        case 'LICENCIATURAS':
        case 'Bachillerato general':
        case 'SECUNDARIA Y PREPARATORIA ABIERTA':
        case 'Internacionalización':
            $(oferta).addClass('active');
            $(inicio).removeClass('active');
            break;
        case 'NOTICIAS':
            $(noticias).addClass('active');
            $(inicio).removeClass('active');
            break;
        case 'GALERÍA':
            $(galeria).addClass('active');
            $(inicio).removeClass('active');
            break;
        case 'CONTACTO':
            $(contacto).addClass('active');
            $(inicio).removeClass('active');
            break;
    }
}
