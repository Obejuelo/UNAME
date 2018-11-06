/*class Maestros{
	mostrarMaestrosAdmon(maestro){this.metodoModal(maestro, 'admon', 'la-lcp');}
	mostrarMaestrosDerecho(maestro){this.metodoModal(maestro, 'derecho', 'ld-lcc');}
	mostrarMaestrosFisica(maestro){this.metodoModal(maestro, 'fisica', 'lef');}
	mostrarMaestrosFilosofia(maestro){this.metodoModal(maestro, 'filosofia', 'lf');}
	mostrarMaestrosNutricion(maestro){this.metodoModal(maestro, 'nutricion', 'ln');}
	mostrarMaestrosPedagogia(maestro){this.metodoModal(maestro, 'pedagogia', 'lp');}
	mostrarMaestrosPsicologia(maestro){this.metodoModal(maestro, 'psicologia', 'lps');}
	mostrarMaestrosSistemas(maestro){this.metodoModal(maestro, 'sistemas', 'lsc');}
	metodoModal(maestro, id, carpeta){
		const contenido = document.getElementById(id);
		maestro.forEach((dato,) => {
			contenido.innerHTML += `
				<div class="col-md-4 col-lg-3 mt-3 claustro">
                   <img class="rounded-circle" src="../image/claustro/${carpeta}/${dato.foto}" alt="perfil" width="90" height="90">
                   <p>${dato.nombre}</p>
                   <p><a class="btn btn-secondary btn-sm" href="#" role="button" data-toggle="modal" data-target="#${dato.id}">Ver más &raquo;</a></p>
                   <div class="modal fade" id="${dato.id}" tabindex="-1" role="dialog" aria-labelledby="${dato.id}" aria-hidden="true">
                       <div class="modal-dialog">
                           <div class="modal-content d-flex align-items-center">
                               <div class="modal-body modal-claus">
                                   <p class="text-justify text-muted">${dato.descripcion}</p>
                               </div>
                               <div class="modal-footer">
                                   <button class="btn btn-success" data-dismiss="modal">Cerrar</button>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
			`;
		})
	}
}

function cargarJson() {
	fetch('licenciatura.json')
		.then(function(res){
			return res.json();
		})
		.then(function(data){
			const ui = new Maestros();
			ui.mostrarMaestrosAdmon(data.administracion);
			ui.mostrarMaestrosDerecho(data.derecho);
			ui.mostrarMaestrosFisica(data.fisica);
			ui.mostrarMaestrosFilosofia(data.filosofia);
			ui.mostrarMaestrosNutricion(data.nutricion);
			ui.mostrarMaestrosPedagogia(data.pedagogia);
			ui.mostrarMaestrosPsicologia(data.psicologia);
			ui.mostrarMaestrosSistemas(data.sistemas);
		})
		.catch(function(error){
			console.log(error);
		});
}
cargarJson();
*/
//Nos conectamos con el archivo .JSON de lo s maestros utilizando AJAX aun soportado por IE
mostrarMaestros();

function mostrarMaestros() {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'maestros/licenciatura.json', true);
    xhr.onload = function() {
        if (this.status === 200) {
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
function metodoModal(maestro, id, carpeta) {
    const contenido = document.getElementById(id);
    maestro.forEach(function(dato) {
        contenido.innerHTML += '<div class="col-md-4 col-lg-3 mt-3 claustro">' +
            '<img class="rounded-circle" src="../image/claustro/' + carpeta + '/' + dato.foto + '" alt="perfil" width="90" height="90">' +
            '<p>' + dato.nombre + '</p>' +
            '<p><a class="btn btn-secondary btn-sm" href="#" role="button" data-toggle="modal" data-target="#' + dato.id + '">Ver más</a></p>' +
            '<div class="modal fade" id="' + dato.id + '" tabindex="-1" role="dialog" aria-labelledby="' + dato.id + '" aria-hidden="true">' +
            '<div class="modal-dialog">' +
            '<div class="modal-content d-flex align-items-center">' +
            '<div class="modal-body modal-claus">' +
            '<p class="text-justify text-muted">' + dato.descripcion + '</p>' +
            '</div>' +
            '<div class="modal-footer">' +
            '<button class="btn btn-success" data-dismiss="modal">Cerrar</button>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>';
    })
}

function modalBach(maestro, id, carpeta) {
    let contenido = document.getElementById(id);
    maestro.forEach((dato) => {
        contenido.innerHTML += `
				<div class="col-md-4 col-lg-3 mt-3 claustro">
                   <img class="rounded-circle" src="../image/claustro/${carpeta}/${dato.foto}" alt="perfil" width="90" height="90">
                   <p>${dato.nombre}</p>
                   <p><a class="btn btn-secondary btn-sm" href="#" role="button" data-toggle="modal" data-target="#${dato.id}">Ver más</a></p>
                   <div class="modal fade" id="${dato.id}" tabindex="-1" role="dialog" aria-labelledby="${dato.id}" aria-hidden="true">
                       <div class="modal-dialog">
                           <div class="modal-content d-flex align-items-center">
                               <div class="modal-body modal-claus">
                                   <p class="text-justify text-muted">${dato.descripcion}</p>
                               </div>
                               <div class="modal-footer">
                                   <button class="btn btn-success" data-dismiss="modal">Cerrar</button>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
			`;
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
let cnm = document.querySelectorAll('#cnm');

//  FETCH API BACHILLERATO
document.addEventListener('DOMContentLoaded', () => {
    fetch('maestros/bach.json')
        .then(res => res.json())
        .then(data => {
            console.log(data.administracion);
            mostrarMaestrosBach(data.administracion);
        })
        .catch(error => console.log(error));
});

function mostrarMaestrosBach(maestro) {
    modalBach(maestro, 'cnm', 'la-lcp')
}

//  FECH API MAESTRIAS
document.addEventListener('DOMContentLoaded', () => {
    fetch('maestros/maestros.json')
        .then(res => res.json())
        .then(data => {
            console.log(data);
            mostrarMaestrias(data);
        })
        .catch(error => console.log(error));
});

function mostrarMaestrias(maestro) {
    metodoModal(maestro, 'posgrado', 'ld-lcc')
}

// bachillerato.addEventListener('click', function() {
//     let arreglo = [];
//     let element = [];
//     for (let i = 1; i < 23; i++) {
//         arreglo.push(cnm[0].children[i].children[2].firstChild);
//         element.push(cnm[0].children[i].children[3]);
//     }
//     console.log(arreglo);
//     console.log(element);
//     arreglo[0].addEventListener('click', () => {

//         $(element[0]).addClass('show');
//         $(element[0]).removeAttr('aria-hidden');
//         element[0].setAttribute("style", "padding-right: 17px; display: block;");

//         let clickModal = document.querySelector('.modal-footer');

//         botonCerrar = element[0].firstChild.nextSibling.children[0].children[1].children[0];
//         botonCerrar.addEventListener('click', () => {
//             element[0].setAttribute("aria-hidden", "true");
//             $(element[0]).removeAttr('style');
//             $(element[0]).removeClass('show');
//         });
//     });

// });

//FUNCION PARA REMOVER LAS CLASES 'ACTIVE SHOW'
function removeClasLic() {
    $(dropdown1).removeClass('active show');
    $(dropdown2).removeClass('active show');
    $(dropdown3).removeClass('active show');
    $(dropdown4).removeClass('active show');
    $(dropdown5).removeClass('active show');
    $(dropdown6).removeClass('active show');
    $(dropdown7).removeClass('active show');
    $(dropdown8).removeClass('active show');
}

//FUNCION PARA REMOVER LA CLASE ACTIVE
function removeClas() {
    $('#elemento1').removeClass('active');
    $('#elemento2').removeClass('active');
    $('#elemento3').removeClass('active');
    $('#elemento4').removeClass('active');
    $('#elemento5').removeClass('active');
    $('#elemento6').removeClass('active');
    $('#elemento7').removeClass('active');
    $('#elemento8').removeClass('active');
}
//REMOVEMOS LAS CLASES CON LAS FUNCIONES
dropdown1.addEventListener('click', () => {
    removeClasLic();
})
dropdown2.addEventListener('click', () => {
    removeClasLic();
})
dropdown3.addEventListener('click', () => {
    removeClasLic();
})
dropdown4.addEventListener('click', () => {
    removeClasLic();
})
dropdown5.addEventListener('click', () => {
    removeClasLic();
})
dropdown6.addEventListener('click', () => {
    removeClasLic();
})
dropdown7.addEventListener('click', () => {
    removeClasLic();
})
dropdown8.addEventListener('click', () => {
    removeClasLic();
});
bachillerato.addEventListener('click', () => {
    $(bach).addClass('show active');
    $(posgrado).removeClass('active');
    removeClas();
    removeClasLic();
});
maestria.addEventListener('click', () => {
    $(posgrado).addClass('show active');
    $(bach).removeClass('active');
    removeClas();
    removeClasLic();
});
