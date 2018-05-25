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