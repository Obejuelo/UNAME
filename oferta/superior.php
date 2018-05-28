<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Licenciaturas-Universidad Nacionalista México</title>
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
                                <div class="menu-sub"><a href="../somos/claus_lic">Claustro docente</a></div>
                                <div class="menu-sub2"><a href="../somos/directivos">Directivos</a></div>
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
                                <a href="inter" class="dropdown-item">Internacionalización</a>
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
            <div class="col-12 align-bach"><p class="h1 text-center">LICENCIATURAS</p></div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <p class="h1 text-center">Modalidad Mixta o Escolarizada</p>
                <p class="text-center text-muted">Asistiendo a cátedras de lunes a viernes o sábados únicamente</p>
            </div>
        </div>
    </div>
    
    <section class="container">
        <div class="row mt-3 justify-content-center posgrados">
            <div class="col-md-4 col-lg-3 mt-3">
                <div class="card">
                    <img src="../image/licenciaturas/admon.jpg" alt="administración" class="img-fluid card-img-top">
                    <p class="h4 card-title text-center mt-3">Administración</p>
                    
                    <!--||||||||||||||INICIO MODAL||||||||||||||-->
                    <button class="btn btn-primary btn-sm mb-2 btn-admon" data-toggle="modal" data-target="#admon">Ver más</button>
                    <div class="modal fade" id="admon" tabindex="-1" role="dialog" aria-labelledby="admon" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <!--CONTENIDO DEL MODAL-->
                            <div class="modal-content">
                                <div class="modal-header modal-admon">
                                    <h3 class="modal-title">Licenciatura en Administración</h3>
                                    <button class="close" data-dismiss="modal" aria-label="cerrar"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                                <iframe width="560" height="315" src="https://www.youtube.com/embed/vd6rnIcArhk?rel=0" allowfullscreen></iframe>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="h3">Objetivo</p>
                                            <p class="text-justify">El aspirante a cursar la Licenciatura en Administración deberá tener actitud de éxito individual, gran disposición para el trabajo colaborativo, además de una excelente apertura para integrarse a la organización que represente.</p>
                                            <p class="text-justify">Un buen administrador busca satisfacer las necesidades del hombre en la sociedad, coordinando y aprovechando de manera eficiente los recursos materiales y humanos que tiene a su alcance.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="h3">Campo laboral</p>
                                            <p class="text-justify">El Licenciado en Administración realiza sus actividades en instituciones del sector público o privado, optimizando los recursos de la organización mediante la toma de decisiones que promueven la adaptación e innovación, propiciando el logro de los propósitos de productividad, calidad, competitividad, contribuyendo con ello al desarrollo social y económico de la región y del país. </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="h3">Requisitos</p>
                                            <li>Acta de nacimiento (original y 2 copias)</li>
                                            <li>Certificado de secundaria (original y 2 copias)</li>
                                            <li>Certificado de bachillerato (original y 2 copias)</li>
                                            <li>4 fotografías en blanco y negro, terminado mate, tamaño infantil, tomadas de frente, con orejas descubiertas, no instantáneas, tomadas con ropa color blanco. (mujeres, sin aretes, cabello recogido).</li>
                                            <li>CURP</li>
                                        </div>
                                    </div>
                                    <div class="row justify-content-around plan">
                                            <div class="col-12">
                                                <p class="h4 text-center mt-3"><em>Plan de estudios</em></p>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Primer Semestre</h5>
                                                        <li>Introducción a la Administración</li>
                                                        <li>Introducción a la Contabilidad</li>
                                                        <li>Fundamentos del Derecho</li>
                                                        <li>Informática I</li>
                                                        <li>Matemáticas Superiores</li>
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Segundo Semestre</h5>
                                                        <li>Administración I</li>
                                                        <li>Contabilidad I</li>
                                                        <li>Derecho Mercantil</li>
                                                        <li>Informática II</li>
                                                        <li>Estadística</li>
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Tercer Semestre</h5>
                                                        <li>Comportamiento Organizacional</li>
                                                        <li>Contabilidad II</li>
                                                        <li>Derecho Laboral</li>
                                                        <li>Relaciones Humanas</li>
                                                        <li>Matemáticas Financieras</li>
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Cuarto Semestre</h5>
                                                        <li>Fundamentos de Economía</li>
                                                        <li>Contabilidad de Costos</li>
                                                        <li>Derecho Fiscal</li>
                                                        <li>Mercadotecnia I</li>
                                                        <li>Metodología de la Investigación</li>
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Quinto Semestre</h5>
                                                        <li>Macroeconomía</li>
                                                        <li>Recursos Humanos</li>
                                                        <li>Comunicación Administrativa</li>
                                                        <li>Mercadotecnia II</li>
                                                        <li>Investigación de Operaciones</li>
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Sexto Semestre</h5>
                                                        <li>Microeconomía</li>
                                                        <li>Admon. de Sueldos y Salarios</li>
                                                        <li>Finanzas I</li>
                                                        <li>Investigación de Mercados</li>
                                                        <li>Métodos Cuantitativos en Admon.</li>
                                                        <li>Planeación Estratégica</li>
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Séptimo Semestre</h5>
                                                        <li>Relaciones Públicas</li>
                                                        <li>Auditoría Administrativa</li>
                                                        <li>Finanzas II</li>
                                                        <li>Promoción de la Mercadotecnia</li>
                                                        <li>Ética Profesional</li>
                                                        <li>Administración de la Producción</li>
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Octavo Semestre</h5>
                                                        <li>Seguridad Social</li>
                                                        <li>Análisis del Desarrollo Nacional</li>
                                                        <li>Dirección</li>
                                                        <li>Taller de Teorías Administrativas</li>
                                                        <li>Seminario sobre Problemas Económicos de México</li>
                                                        <li>Seminario de Titulación</li>
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer d-flex align-self-center">
								    <button class="btn btn-success" data-dismiss="modal">Cerrar</button>
							    </div>
                            </div>
                        </div>
                    </div>
                    <!--|||||||||||FIN DEL MODAL|||||||||||||-->
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mt-3">
                <div class="card">
                    <img src="../image/licenciaturas/pedag.jpg" alt="pedagogía" class="img-fluid card-img-top">
                    <p class="h4 card-title text-center mt-3">Pedagogía</p>
                    <button class="btn btn-primary btn-sm mb-2 btn-pedag" data-toggle="modal" data-target="#pedagogia">Ver más</button>
                    <!--||||||||||||||INICIO MODAL||||||||||||||-->
                    <div class="modal fade" id="pedagogia" tabindex="-1" role="dialog" aria-labelledby="pedagogia" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <!--CONTENIDO DEL MODAL-->
                            <div class="modal-content">
                                <div class="modal-header modal-pedag">
                                    <h3 class="modal-title">Licenciatura en Pedagogía</h3>
                                    <button class="close" data-dismiss="modal" aria-label="cerrar"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6 align-self-center">
                                            <img src="../image/licenciaturas/pedag.jpg" alt="pedagogía" class="img-fluid card-img-top">
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="h3">Objetivo</p>
                                            <p class="text-justify">El aspirante a cursar la carrera de Pedagogía deberá mostrar interés en:</p>
                                            <li class="text-justify">Identificar y evaluar las perspectivas educativas de las instituciones de educación pública y privada.</li>
                                            <li class="text-justify">Proponer modelos educativos con base en el diagnóstico del contexto socioeconómico  y político del fenómeno educativo.</li>
                                            <li class="text-justify">Evaluar las prácticas docentes en todos los niveles educativos a través de la construcción y aplicación de instrumentos de medición, objetivos confiables y válidos.</li>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="h3">Campo laboral</p>
                                            <p class="text-justify">El Licenciado en pedagogía es un profesionista con capacidad para identificar, analizar y valorar fenómenos educativos, en todos los niveles: básico, medio, medio superior y superior, en sus modalidades escolarizada y no escolarizada; influye en los sectores público y privado, con el fin de fundamentar alternativas de solución óptimas y viables para el progreso educativo de la región y del país.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="h3">Requisitos</p>
                                            <li>Acta de nacimiento (original y 2 copias)</li>
                                            <li>Certificado de secundaria (original y 2 copias)</li>
                                            <li>Certificado de bachillerato (original y 2 copias)</li>
                                            <li>4 fotografías en blanco y negro, terminado mate, tamaño infantil, tomadas de frente, con orejas descubiertas, no instantáneas, tomadas con ropa color blanco. (mujeres, sin aretes, cabello recogido).</li>
                                            <li>CURP</li>
                                        </div>
                                    </div>
                                    <div class="row justify-content-around plan">
                                        <div class="col-12">
                                            <p class="h4 text-center mt-3"><em>Plan de Estudios</em></p>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="row justify-content-center">
                                                <div class="col-10 plan mb-4">
                                                    <h5 class="text-muted">Primer Semestre</h5>
                                                    <li>Infancia I</li>
                                                    <li>Psicología de la Educación I</li>
                                                    <li>Sociología de la Educación I</li>
                                                    <li>Teoría Pedagógica I</li>
                                                    <li>Metodología de la Investigación I</li>
                                                </div>
                                                <div class="col-10 plan">
                                                    <h5 class="text-muted">Segundo Semestre</h5>
                                                    <li>Infancia II</li>
                                                    <li>Psicología de la Educación II</li>
                                                    <li>Sociología de la Educación II</li>
                                                    <li>Teoría Pedagógica II</li>
                                                    <li>Filosofía de la Educación</li>

                                                </div>
                                            </div>
                                            <hr class="featurette-divider">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="row justify-content-center">
                                                <div class="col-10 plan mb-4">
                                                    <h5 class="text-muted">Tercer Semestre</h5>
                                                    <li>Adolescencia I</li>
                                                    <li>Didáctica</li>
                                                    <li>Estadística Aplicada a la Educación I</li> 
                                                    <li>Historia General de la Educación I</li> 
                                                    <li>Planeación Educativa</li>

                                                </div>
                                                <div class="col-10 plan">
                                                    <h5 class="text-muted">Cuarto Semestre</h5>
                                                    <li>Adolescencia II</li>
                                                    <li>Comunicación Educativa</li>
                                                    <li>Estadística Aplicada a la Educación II</li> 
                                                    <li>Psicopedagogía I</li>
                                                    <li>Historia General de la Educación II</li>

                                                </div>
                                            </div>
                                            <hr class="featurette-divider">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="row justify-content-center">
                                                <div class="col-10 plan mb-4">
                                                    <h5 class="text-muted">Quinto Semestre</h5>
                                                    <li>Inglés I</li>
                                                    <li>Técnicas de Psicoped. para la Detec.. I</li> 
                                                    <li>Administración Educativa I</li>
                                                    <li>Psicopedagogía II</li>
                                                    <li>Técnicas de Elab. de Rec. Didácticos</li>

                                                </div>
                                                <div class="col-10 plan">
                                                    <h5 class="text-muted">Sexto Semestre</h5>
                                                    <li>Ingles II</li>
                                                    <li>Técnicas de Psicoped. para la Dettec.. II</li>
                                                    <li>Administración Educativa II</li>
                                                    <li>Orientación Educativa</li> 
                                                    <li>Modalidades Educativas</li>

                                                </div>
                                            </div>
                                            <hr class="featurette-divider">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="row justify-content-center">
                                                <div class="col-10 plan mb-4">
                                                    <h5 class="text-muted">Séptimo Semestre</h5>
                                                    <li>Técnicas Lúdicas de Enseñanza</li>
                                                    <li>Diseño y Evaluación Curricular</li>
                                                    <li>Técnicas de Análisis de Contenidos I</li>
                                                    <li>Análisis Psicopatológico del Escolar</li> 
                                                    <li>Planeación Estratégica de la Enseñanza</li>
                                                </div>
                                                <div class="col-10 plan">
                                                    <h5 class="text-muted">Octavo Semestre</h5>
                                                    <li>Educación Especializada</li>
                                                    <li>Técnicas de Análisis de Contenidos II</li> 
                                                    <li>Ética Profesional del Magisterio</li>
                                                    <li>Metodología de la Investigación II</li>
                                                    <li>Seminario de Investigación Pedagógica</li>

                                                </div>
                                            </div>
                                            <hr class="featurette-divider">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer d-flex align-self-center">
								    <button class="btn btn-success" data-dismiss="modal">Cerrar</button>
							    </div>
                            </div>
                        </div>
                    </div>
                    <!--|||||||||||FIN DEL MODAL|||||||||||||-->
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mt-3">
                <div class="card">
                    <img src="../image/licenciaturas/sistem.jpg" alt="sistemas computacionales" class="img-fluid card-img-top">
                    <p class="h4 card-title text-center mt-3">Sistemas Comput..</p>
                    <!--||||||||||||||INICIO MODAL||||||||||||||-->
                    <button class="btn btn-primary btn-sm mb-2 btn-sistem" data-toggle="modal" data-target="#sistem">Ver más</button>
                    <div class="modal fade" id="sistem" tabindex="-1" role="dialog" aria-labelledby="sistem" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <!--CONTENIDO DEL MODAL-->
                            <div class="modal-content">
                                <div class="modal-header modal-sistem">
                                    <h3 class="modal-title">Licenciatura en Sistemas Computacionales</h3>
                                    <button class="close" data-dismiss="modal" aria-label="cerrar"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                                <iframe width="560" height="315" src="https://www.youtube.com/embed/3jCUi3f-Bfs?rel=0" allowfullscreen></iframe>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="h3">Objetivo</p>
                                            <p class="text-justify">Formar profesionales en Sistemas Computacionales con los conocimientos, habilidades, valores y saberes que les permitan detectar, analizar, evaluar y proponer soluciones a través de la tecnología de información, para la optimización de los procesos organizacionales con la finalidad de coadyuvar a las instituciones a reconocer la importancia de la tecnología en el desarrollo de la sociedad actual.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="h3">Campo laboral</p>
                                            <p class="text-justify">El Licenciado en Sistemas Computacionales es un profesionista capaz de desarrollarse en cualquier área del sector productivo, puesto que el mundo actual requiere de personas capaces que tengan los conocimientos propios, las habilidades y actitudes del ámbito de la computación e informática.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="h3">Requisitos</p>
                                            <li>Acta de nacimiento (original y 2 copias)</li>
                                            <li>Certificado de secundaria (original y 2 copias)</li>
                                            <li>Certificado de bachillerato (original y 2 copias)</li>
                                            <li>4 fotografías en blanco y negro, terminado mate, tamaño infantil, tomadas de frente, con orejas descubiertas, no instantáneas, tomadas con ropa color blanco. (mujeres, sin aretes, cabello recogido).</li>
                                            <li>CURP</li>
                                        </div>
                                    </div>
                                    <div class="row justify-content-around plan">
                                            <div class="col-12">
                                                <p class="h4 text-center mt-3"><em>Plan de Estudios</em></p>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Primer Semestre</h5>
                                                        <li>Introducción a las Ciencias Computacionales</li>
                                                        <li>Lógica de Programación con Algoritmos</li>
                                                        <li>Matemáticas para la Computación</li>
                                                        <li>Matemáticas I</li>
                                                        <li>Administración</li> 
                                                        <li>Contabilidad</li>
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Segundo Semestre</h5>
                                                        <li>Arquitectura de Computadoras</li>
                                                        <li>Principios de Programación</li>
                                                        <li>Matemáticas II</li>
                                                        <li>Contabilidad de Costos</li>
                                                        <li>Sistemas Digitales</li>
                                                        <li>Psicología y Relaciones Humanas</li>
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Tercer Semestre</h5>
                                                        <li>Lenguaje Ensamblador</li>
                                                        <li>Programación I</li>
                                                        <li>Probabilidad y Estadística</li>
                                                        <li>Telemática</li>
                                                        <li>Derecho</li> 
                                                        <li>Inglés I</li>
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Cuarto Semestre</h5>
                                                        <li>Sistemas Operativos</li>
                                                        <li>Programación de Aplicaciones en Web</li>
                                                        <li>Introducción a las Redes de Computadoras</li> 
                                                        <li>Investigación de Operaciones I</li>
                                                        <li>Economía</li>
                                                        <li>Inglés II</li>
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Quinto Semestre</h5>
                                                        <li>Planeación de Redes</li>
                                                        <li>Bases de Datos I</li>
                                                        <li>Investigación de Operaciones II</li>
                                                        <li>Mercadotecnia</li>
                                                        <li>Sistemas Distribuidos</li>
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Sexto Semestre</h5>
                                                        <li>Administración de Redes</li>
                                                        <li>Bases de Datos II</li>
                                                        <li>Teoría General de Sistemas</li>
                                                        <li>Administración de Sistemas </li>
                                                        <li>Introducción a la Inteligencia</li>
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Séptimo Semestre</h5>
                                                        <li>Análisis de Sistemas</li>
                                                        <li>Seguridad Informática</li>
                                                        <li>Redacción e Investigación</li> 
                                                        <li>Ética Profesional</li>
                                                        <li>Principios de Robótica</li>
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Octavo Semestre</h5>
                                                        <li>Auditoría Informática</li>
                                                        <li>Seminario de Titulación</li>
                                                        <li>Desarrollo de Proyectos</li>
                                                        <li>Innovaciones Tecnológicas</li>
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                        </div>
                                    </div>
                                <div class="modal-footer d-flex align-self-center">
								    <button class="btn btn-success" data-dismiss="modal">Cerrar</button>
							    </div>
                            </div>
                        </div>
                    </div>
                    <!--|||||||||||FIN DEL MODAL|||||||||||||-->
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mt-3">
                <div class="card">
                    <img src="../image/licenciaturas/psic.jpg" alt="psicología social" class="img-fluid card-img-top">
                    <p class="h4 card-title text-center mt-3">Psicología Social</p>
                    <!--||||||||||||||INICIO MODAL||||||||||||||-->
                    <button class="btn btn-primary btn-sm mb-2 btn-psic" data-toggle="modal" data-target="#psic">Ver más</button>
                    <div class="modal fade" id="psic" tabindex="-1" role="dialog" aria-labelledby="psic" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <!--CONTENIDO DEL MODAL-->
                            <div class="modal-content">
                                <div class="modal-header modal-psic">
                                    <h3 class="modal-title">Licenciatura en Psicología Social</h3>
                                    <button class="close" data-dismiss="modal" aria-label="cerrar"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/LK2yLvLi9AU?rel=0" allowfullscreen></iframe>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="h3">Objetivo</p>
                                            <p class="text-justify">Capacitar a los profesionistas en el conocimiento, aplicación y evaluación de diversas estrategias y metodologías dirigidas al abordaje, manejo y solución de problemas de naturaleza psicológicas dentro de las diversas organizaciones que existen dentro de la sociedad.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="h3">Campo laboral</p>
                                            <p class="text-justify">El Psicólogo Social tiene un campo laboral muy amplio dentro de la comunidad, sus acciones profesionales son necesarias para reducir y prevenir situaciones de riesgo personal y social, a través de diseños e implementación de programas sociales en instituciones públicas, centros comunitarios, asociaciones civiles, empresas, instituciones educativas, etc.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="h3">Requisitos</p>
                                            <li>Acta de nacimiento (original y 2 copias)</li>
                                            <li>Certificado de secundaria (original y 2 copias)</li>
                                            <li>Certificado de bachillerato (original y 2 copias)</li>
                                            <li>4 fotografías en blanco y negro, terminado mate, tamaño infantil, tomadas de frente, con orejas descubiertas, no instantáneas, tomadas con ropa color blanco. (mujeres, sin aretes, cabello recogido).</li>
                                            <li>CURP</li>
                                        </div>
                                    </div>
                                    <div class="row justify-content-around plan">
                                            <div class="col-12">
                                                <p class="h4 text-center mt-3"><em>Plan de Estudios</em></p>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Primer Semestre</h5>
                                                        <li>Fundamentos de la Psicología</li>
                                                        <li>Psicofisiología</li>
                                                        <li>Ética</li>
                                                        <li>Bases Filosóficas de la Psicología</li> 
                                                        <li>Estadística</li>
                                
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Segundo semestre</h5>
                                                        <li>Espistemología Social</li> 
                                                        <li>Psicología y Cultura</li>
                                                        <li>Principios Sociológicos</li>
                                                        <li>Historia de la Psicología</li> 
                                                        <li>Métodos y Técnicas de Investigación</li>
                                
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Tercer semestre</h5>
                                                        <li>Principales Teorías Psicológicas I</li> 
                                                        <li>Antropología Social</li>
                                                        <li>Psicología Social</li>
                                                        <li>Introducción a la Psicología</li> 
                                                        <li>Psicología Educativa</li>
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Cuarto Semestre</h5>
                                                        <li>Principales Teorías Psicológicas II</li>
                                                        <li>Teorías y Técnicas de la Entrevista</li>
                                                        <li>Principales Teorías Sociológicas</li> 
                                                        <li>Comunicación Humana y Social</li>
                                                        <li>Teorías Psicológicas del Aprendizaje I</li>
                                
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Quinto Semestre</h5>
                                                        <li>Motivación y Emoción</li>
                                                        <li>Psicometría I</li>
                                                        <li>Sociología Aplicada a la Psicología</li> 
                                                        <li>Psicología Laboral</li>
                                                        <li>Teorías Psicológicas del Aprendizaje II</li>
                                
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Sexto Semestre</h5>
                                                        <li>Teorías de la Personalidad I</li>
                                                        <li>Psicometría II</li>
                                                        <li>Teorías de Grupo</li>
                                                        <li>Cultura Organizacional</li>
                                                        <li>Psicología de las Masas</li>
                                
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Séptimo Semestre</h5>
                                                        <li>Teorías de la Personalidad II</li>
                                                        <li>Emergencia Social e Intervención Psic.</li> 
                                                        <li>Sociedades y Dinámicas Actuales</li>
                                                        <li>Filosofía Organizacional</li>
                                                        <li>Psicopatología y Sociedad</li>
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Octavo Semestre</h5>
                                                        <li>Prácticas Profesionales</li>
                                                        <li>Métodos y Téc. de Interacción e Intervención</li>
                                                        <li>Desarrollo Comunitario</li>
                                                        <li>Gestión y Administración de Rec. Hum.</li> 
                                                        <li>Seminario de Tesis</li>
                                
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                        </div>
                                    </div>
                                <div class="modal-footer d-flex align-self-center">
								    <button class="btn btn-success" data-dismiss="modal">Cerrar</button>
							    </div>
                            </div>
                        </div>
                    </div>
                    <!--|||||||||||FIN DEL MODAL|||||||||||||-->
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mt-3">
                <div class="card">
                    <img src="../image/licenciaturas/conta.jpg" alt="contaduría pública" class="img-fluid card-img-top">
                    <p class="h4 card-title text-center mt-3">Contaduría Pública</p>
                    <!--||||||||||||||INICIO MODAL||||||||||||||-->
                    <button class="btn btn-primary btn-sm mb-2 btn-conta" data-toggle="modal" data-target="#conta">Ver más</button>
                    <div class="modal fade" id="conta" tabindex="-1" role="dialog" aria-labelledby="conta" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <!--CONTENIDO DEL MODAL-->
                            <div class="modal-content">
                                <div class="modal-header modal-conta">
                                    <h3 class="modal-title">Licenciatura en Contaduría Pública</h3>
                                    <button class="close" data-dismiss="modal" aria-label="cerrar"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/V36oYqWGNEY?rel=0" allowfullscreen></iframe>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="h3">Objetivo</p>
                                            <p class="text-justify">Formar profesionales capaces de enfrentar y resolver, de manera adecuada y correcta, las necesidades de cualquier entidad económica, ya sea en el ambiente: contable, fiscal, de auditoría, de costos y finanzas o de administración de recursos, buscando siempre la adecuación de las soluciones a las necesidades específicas de cada una de las entidades.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="h3">Campo laboral</p>
                                            <p class="text-justify">El profesionista de la contaduría pública está en condiciones de iniciar su propia empresa, auto empleándose en distintas áreas productivas de la nación acorde a sus propias posibilidades y afinidades, pues cuenta con los suficientes conocimientos, habilidades y actitudes obtenidas en la carrera, que le dan las herramientas para desarrollarse plenamente como líder y guía en cualquier área laboral.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="h3">Requisitos</p>
                                            <li>Acta de nacimiento (original y 2 copias)</li>
                                            <li>Certificado de secundaria (original y 2 copias)</li>
                                            <li>Certificado de bachillerato (original y 2 copias)</li>
                                            <li>4 fotografías en blanco y negro, terminado mate, tamaño infantil, tomadas de frente, con orejas descubiertas, no instantáneas, tomadas con ropa color blanco. (mujeres, sin aretes, cabello recogido).</li>
                                            <li>CURP</li>
                                        </div>
                                    </div>
                                    <div class="row justify-content-around plan">
                                            <div class="col-12">
                                                <p class="h4 text-center mt-3"><em>Plan de Estudios</em></p>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Primer Semestre</h5>
                                                        <li>Introducción a la Contabilidad</li>
                                                        <li>Introducción a la Administración</li>
                                                        <li>Introducción a la Informática</li>
                                                        <li>Matemáticas Basicas</li>
                                                        <li>Fundamentos de Derecho</li>
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Segundo Semestre</h5>
                                                        <li>Fundamentos de Contabilidad I</li>
                                                        <li>Proceso Administrativo</li>
                                                        <li>Informática Aplicada a la Contabilidad</li>
                                                        <li>Matemáticas Financieras</li>
                                                        <li>Derecho Mercantil</li>
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Tercer Semestre</h5>
                                                        <li>Fundamentos de la Contabilidad II</li>
                                                        <li>Economía</li>
                                                        <li>Metodología de la Investigación</li>
                                                        <li>Estadística</li>
                                                        <li>Derecho Laboral</li>
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Cuarto Semestre</h5>
                                                        <li>Contabilidad Intermedia</li>
                                                        <li>Ética</li>
                                                        <li>Administración Financiera I</li>
                                                        <li>Investigación de Operaciones</li>
                                                        <li>Derecho Fiscal</li>
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Quinto Semestre</h5>
                                                        <li>Contabilidad Avanzada I</li>
                                                        <li>Contabilidad de Costos I</li>
                                                        <li>Administración Financiera II</li>
                                                        <li>Control Interno</li>
                                                        <li>Contribuciones I</li>
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Sexto Semestre</h5>
                                                        <li>Contabilidad Avanzada II</li>
                                                        <li>Contabilidad de Costos II</li>
                                                        <li>Consolidación de Estados Financieros</li>
                                                        <li>Auditoría I</li>
                                                        <li>Contribuciones II</li>
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Séptimo Semestre</h5>
                                                        <li>Presupuestos</li>
                                                        <li>Costos Variables</li>
                                                        <li>Administración de Personal</li>
                                                        <li>Auditoría II</li>
                                                        <li>Contribuciones III</li>
                                                        <li>Prácticas Contables</li>
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Octavo Semestre</h5>
                                                        <li>Formulación y Evaluación de Proyectos de Inversión</li>
                                                        <li>Contabilidad Gubernamental</li>
                                                        <li>Dirección</li>
                                                        <li>Comercio Exterior</li>
                                                        <li>Contribuciones IV</li>
                                                        <li>Seminario sobre Tendencias Actuales en la Contabilidad</li>
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                        </div>
                                    </div>
                                <div class="modal-footer d-flex align-self-center">
								    <button class="btn btn-success" data-dismiss="modal">Cerrar</button>
							    </div>
                            </div>
                        </div>
                    </div>
                    <!--|||||||||||FIN DEL MODAL|||||||||||||-->
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mt-3">
                <div class="card">
                    <img src="../image/licenciaturas/fisica.JPG" alt="educación física" class="img-fluid card-img-top">
                    <p class="h4 card-title text-center mt-3">Educación Física</p>
                    <!--||||||||||||||INICIO MODAL||||||||||||||-->
                    <button class="btn btn-primary btn-sm mb-2 btn-fisica" data-toggle="modal" data-target="#fisica">Ver más</button>
                    <div class="modal fade" id="fisica" tabindex="-1" role="dialog" aria-labelledby="fisica" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <!--CONTENIDO DEL MODAL-->
                            <div class="modal-content">
                                <div class="modal-header modal-fisica">
                                    <h3 class="modal-title">Licenciatura en Educación Física</h3>
                                    <button class="close" data-dismiss="modal" aria-label="cerrar"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/LIYfTOz0APc?rel=0" allowfullscreen></iframe>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="h3">Objetivo</p>
                                            <p class="text-justify">Formar a Licenciados en Educación Física que estén preparados de forma integral en los distintos campos que abarca esta rama del conocimiento, permitiéndoles mediante el dominio del proceso docente y del conocimiento más actualizado, emprender con carácter consciente transformador y humanista, las tareas en el campo de la educación física y el deporte, actuando como coadyuvantes a favor de que la cultura física sea un factor fundamental en el desarrollo de la población.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="h3">Campo laboral</p>
                                            <p class="text-justify">El licenciado en Educación Física mantiene una estrecha interrelación con las instituciones educativas que permiten la planificación, organización y desarrollo de actividades físicas, con el propósito de fomentar la salud, la recreación, el desarrollo deportivo y el bienestar social de niños, adolescentes y adultos.</p>
                                            <p class="text-justify">También fomenta la Educación Física como medio de promoción de la salud para personas de la tercera edad, en proceso de rehabilitación y personas con capacidades diferentes.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="h3">Requisitos</p>
                                            <li>Acta de nacimiento (original y 2 copias)</li>
                                            <li>Certificado de secundaria (original y 2 copias)</li>
                                            <li>Certificado de bachillerato (original y 2 copias)</li>
                                            <li>4 fotografías en blanco y negro, terminado mate, tamaño infantil, tomadas de frente, con orejas descubiertas, no instantáneas, tomadas con ropa color blanco. (mujeres, sin aretes, cabello recogido).</li>
                                            <li>CURP</li>
                                        </div>
                                    </div>
                                    <div class="row justify-content-around plan">
                                            <div class="col-12">
                                                <p class="h4 text-center mt-3"><em>Plan de Estudios</em></p>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Primer Semestre</h5>
                                                        <li>Historia de la Educación Física y el Deporte</li>
                                                        <li>Antropología</li>
                                                        <li>Expresión Corporal</li>
                                                        <li>Psicomotricidad</li>
                                                        <li>Basquetbol</li>
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Segundo Semestre</h5>
                                                        <li>Teoría y Práctica de Juegos</li>
                                                        <li>Psicología General</li>
                                                        <li>Educación Musical y Danza</li>
                                                        <li>Biomecánica</li>
                                                        <li>Voleibol</li>
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Tercer Semestre</h5>
                                                        <li>Recreación Física</li>
                                                        <li>Psicología Deportiva</li>
                                                        <li>Pedagogía General</li>
                                                        <li>Bioquímica</li>
                                                        <li>Atletismo</li>
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Cuarto Semestre</h5>
                                                        <li>Ética</li>
                                                        <li>Estadística Aplicada</li>
                                                        <li>Práctica Docente</li>
                                                        <li>Fisiología</li>
                                                        <li>Futbol</li>
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Quinto Semestre</h5>
                                                        <li>Medicina del Deporte</li>
                                                        <li>Metodología de la Investigación</li>
                                                        <li>Política Educativa</li>
                                                        <li>Morfología Funcional y Deportiva</li>
                                                        <li>Judo</li>
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Sexto Semestre</h5>
                                                        <li>Cultura Física Terapéutica</li>
                                                        <li>Administración General</li>
                                                        <li>Didáctica del Entrenamiento Deportivo</li>
                                                        <li>Alimentación Deportiva</li>
                                                        <li>Halterofilia </li>
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Séptimo Semestre</h5>
                                                        <li>Masoterapia</li>
                                                        <li>Administración de la Educación Física</li>
                                                        <li>Didáctica de la Educación Física</li>
                                                        <li>Ajedrez</li>
                                                        <li>Beisbol</li>
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Octavo semestre</h5>
                                                        <li>Evaluación del Desempeño Físico</li>
                                                        <li>Seminario de Tesis</li>
                                                        <li>Didáctica de la Educación Especial</li>
                                                        <li>Natación </li>
                                                        <li>Gimnasia </li>
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                        </div>
                                    </div>
                                <div class="modal-footer d-flex align-self-center">
								    <button class="btn btn-success" data-dismiss="modal">Cerrar</button>
							    </div>
                            </div>
                        </div>
                    </div>
                    <!--|||||||||||FIN DEL MODAL|||||||||||||-->
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mt-3">
                <div class="card">
                    <img src="../image/licenciaturas/nutricion.jpg" alt="nutrición" class="img-fluid card-img-top">
                    <p class="h4 card-title text-center mt-3">Nutrición</p>
                    <!--||||||||||||||INICIO MODAL||||||||||||||-->
                    <button class="btn btn-primary btn-sm mb-2 btn-nut" data-toggle="modal" data-target="#nutricion">Ver más</button>
                    <div class="modal fade" id="nutricion" tabindex="-1" role="dialog" aria-labelledby="nutricion" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <!--CONTENIDO DEL MODAL-->
                            <div class="modal-content">
                                <div class="modal-header modal-nut">
                                    <h3 class="modal-title">Licenciatura en Nutrición y Educación Alimentaria</h3>
                                    <button class="close" data-dismiss="modal" aria-label="cerrar"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/iC8vRglb3kM?rel=0" allowfullscreen></iframe>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="h3">Objetivo</p>
                                            <p class="text-justify">Formar a Licenciados en Nutrición y Educación Alimentaria con un enfoque crítico y creativo para identificar, atender y prevenir problemas de nutrición y alimentación en personas de cualquier edad, así como en su prevención y control, participando con la implementación de soluciones que mejoren la educación nutricional, propiciando condiciones de vida más sanas.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="h3">Campo laboral</p>
                                            <p class="text-justify">El Licenciado en Nutrición y Educación Alimentaria posee un amplio campo laboral, que va desde la consulta privada, centros de salud comunitarios, instituciones de carácter público o privado que tengan a su cargo servicios de alimentación; así como diseñar, aplicar y evaluar el desarrollo de tratamientos, programas y proyectos de nutrición individual y comunitaria.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="h3">Requisitos</p>
                                            <li>Acta de nacimiento (original y 2 copias)</li>
                                            <li>Certificado de secundaria (original y 2 copias)</li>
                                            <li>Certificado de bachillerato (original y 2 copias)</li>
                                            <li>4 fotografías en blanco y negro, terminado mate, tamaño infantil, tomadas de frente, con orejas descubiertas, no instantáneas, tomadas con ropa color blanco. (mujeres, sin aretes, cabello recogido).</li>
                                            <li>CURP</li>
                                        </div>
                                    </div>
                                    <div class="row justify-content-around plan">
                                            <div class="col-12">
                                                <p class="h4 text-center mt-3"><em>Plan de Estudios</em></p>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Primer Semestre</h5>
                                                        <li>Introducción a la Nutrición</li> 
                                                        <li>Biología Humana</li> 
                                                        <li>Química General</li> 
                                                        <li>Matemáticas Aplicadas</li> 
                                                        <li>Salud Pública en Nutrición</li> 
                                                        <li>Sanidad, Legislación e Higiene de los Alimentos</li>
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Segundo Semestre</h5>
                                                        <li>Ética</li> 
                                                        <li>Biología Celular</li> 
                                                        <li>Química Orgánica</li> 
                                                        <li>Administración</li> 
                                                        <li>Probabilidad y Estadística</li>
                                                        <li>Psicología Nutricional</li>
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Tercer Semestre</h5>
                                                        <li>Anatomía y Fisiología del Aparato Digestivo</li> 
                                                        <li>Microbiología</li> 
                                                        <li>Química de los Alimentos</li> 
                                                        <li>Antropología de los Alimentos</li> 
                                                        <li>Bioestadística I</li> 
                                                        <li>Valoración del Estado Nut. Humano I</li>
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Cuarto Semestre</h5>
                                                        <li>Fisiología de la Nutrición</li> 
                                                        <li>Parasitología</li> 
                                                        <li>Bioquímica</li> 
                                                        <li>Nutrición de una Persona Sana</li> 
                                                        <li>Bioestadística II</li> 
                                                        <li>Valoración del Estado Nut. Humano II</li>
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Quinto Semestre</h5>
                                                        <li>Nutrición Pediátrica</li> 
                                                        <li>Fisiopatología I</li> 
                                                        <li>Bioquímica Nutricional</li> 
                                                        <li>Dietoterapia</li> 
                                                        <li>Cálculo Dietético</li>  
                                                        <li>Cien. y Tec. de los Alimentos</li>
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Sexto Semestre</h5>
                                                        <li>Nutrición Deportiva</li> 
                                                        <li>Fisiopatología II</li> 
                                                        <li>Producción de los Alimentos</li> 
                                                        <li>Metodología de la Investigación</li> 
                                                        <li>Proyectos de Nutrición</li> 
                                                        <li>Nutrición en Condiciones Especiales</li>
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Séptimo Semestre</h5>
                                                        <li>Nutrición Geriátrica</li> 
                                                        <li>Toxicología de los Alimentos</li> 
                                                        <li>Preparación de los Alimentos</li> 
                                                        <li>Educación Nutricional</li> 
                                                        <li>Programas de Nutrición y Alimentación</li> 
                                                        <li>Servicios de Alimentos</li>
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Octavo Semestre</h5>
                                                        <li>Seminario de Titulación</li> 
                                                        <li>Epidemiología de la Nutrición</li> 
                                                        <li>Conservación de los Alimentos</li> 
                                                        <li>Prácticas Profesionales</li> 
                                                        <li>Nutrición en Condiciones Patológicas y Psicopatológicas</li> 
                                                        <li>Cultura de Calidad en Nutrición</li>
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                        </div>
                                    </div>
                                <div class="modal-footer d-flex align-self-center">
								    <button class="btn btn-success" data-dismiss="modal">Cerrar</button>
							    </div>
                            </div>
                        </div>
                    </div>
                    <!--|||||||||||FIN DEL MODAL|||||||||||||-->
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mt-3">
                <div class="card">
                    <img src="../image/licenciaturas/derecho.jpg" alt="derecho" class="img-fluid card-img-top">
                    <p class="h4 card-title text-center mt-3">Derecho</p>
                    <!--||||||||||||||INICIO MODAL||||||||||||||-->
                    <button class="btn btn-primary btn-sm mb-2 btn-der" data-toggle="modal" data-target="#derecho">Ver más</button>
                    <div class="modal fade" id="derecho" tabindex="-1" role="dialog" aria-labelledby="derecho" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <!--CONTENIDO DEL MODAL-->
                            <div class="modal-content">
                                <div class="modal-header modal-der">
                                    <h3 class="modal-title">Licenciatura en Derecho</h3>
                                    <button class="close" data-dismiss="modal" aria-label="cerrar"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/8VCmL8A8PQA?rel=0" allowfullscreen></iframe>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="h3">Objetivo</p>
                                            <p class="text-justify">El aspirante deberá estar interesado y mostrar vocación en los conocimientos de Derecho en General, Teoría del Estado, Teoría Política, Derecho Constitucional, Derecho Civil, Derecho Mercantil, Derecho Penal, Derecho Laboral, Derecho Fiscal, Derecho Internacional Público y Privado, Derecho Agrario y Amparo.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="h3">Campo laboral</p>
                                            <p class="text-justify">El licenciado en Derecho es un profesionista que con sus conocimientos se dedica a resolver múltiples problemas en todos los ámbitos de la sociedad, como son los familiares, políticos, económicos, empresariales, etc., y que tienen carácter jurídico.</p>
                                            <p class="text-justify">El licenciado en derecho puede trabajar como profesionista independiente, asesor, director o empleado y, además también desempeñarse en el sector privado, social, político y público, realizar funciones como asesor, director, subdirector o empleado de instituciones privadas (empresas, sindicatos, partidos políticos, etc.), instituciones públicas, gobierno, poder judicial, con jueces o magistrados, poder legislativo, asesor de diputados o senadores del poder ejecutivo, de secretarios de estado, gobiernos de los estados o gobiernos municipales.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="h3">Requisitos</p>
                                            <li>Acta de nacimiento (original y 2 copias)</li>
                                            <li>Certificado de secundaria (original y 2 copias)</li>
                                            <li>Certificado de bachillerato (original y 2 copias)</li>
                                            <li>4 fotografías en blanco y negro, terminado mate, tamaño infantil, tomadas de frente, con orejas descubiertas, no instantáneas, tomadas con ropa color blanco. (mujeres, sin aretes, cabello recogido).</li>
                                            <li>CURP</li>
                                        </div>
                                    </div>
                                    <div class="row justify-content-around plan">
                                            <div class="col-12">
                                                <p class="h4 text-center mt-3"><em>Plan de Estudios</em></p>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Primer Semestre</h5>
                                                        <li>Introducción al Estudio del Derecho</li>
                                                        <li>Teoría Económica</li>
                                                        <li>Derecho Romano I</li>
                                                        <li>Sociología</li>
                                                        <li>Redacción</li>
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Segundo Semestre</h5>
                                                        <li>Teoría Política</li>
                                                        <li>Historia del Pensamiento Económico</li>
                                                        <li>Derecho Romano II</li>
                                                        <li>Derecho Civil I</li>
                                                        <li>Redacción Jurídica</li>
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Tercer Semestre</h5>
                                                        <li>Teoría General del Estado</li>
                                                        <li>Derecho Penal I</li>
                                                        <li>Teoría General del Proceso</li>
                                                        <li>Derecho Civil II</li>
                                                        <li>Ética</li>
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Cuarto Semestre</h5>
                                                        <li>Derecho Constitucional</li>
                                                        <li>Derecho Penal II</li>
                                                        <li>Derecho Procesal Civil</li>
                                                        <li>Derecho Civil III</li>
                                                        <li>Informática</li>
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Quinto Semestre</h5>
                                                        <li>Garantías Individuales</li>
                                                        <li>Criminología</li>
                                                        <li>Derecho Procesal Penal</li>
                                                        <li>Derecho Civil IV</li>
                                                        <li>Derecho Administrativo I</li>
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Sexto Semestre</h5>
                                                        <li>Amparo</li>
                                                        <li>Derecho Mercantil</li>
                                                        <li>Derecho Agrario</li>
                                                        <li>Clínica Procesal Civil</li>
                                                        <li>Derecho Administrativo II</li>
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Séptimo Semestre</h5>
                                                        <li>Derecho Laboral</li>
                                                        <li>Clínica Procesal Mercantil</li>
                                                        <li>Derecho Fiscal</li>
                                                        <li>Derecho Bancario</li>
                                                        <li>Derecho Internacional Público</li>
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Octavo Semestre</h5>
                                                        <li>Clínica Procesal Laboral</li>
                                                        <li>Derecho Económico</li>
                                                        <li>Clínica Procesal del Derecho Fiscal</li>
                                                        <li>Derecho de Seguridad Social</li>
                                                        <li>Derecho Internacional Privado</li>
                                                        <li>Seminario de Tesis</li>
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                        </div>
                                    </div>
                                <div class="modal-footer d-flex align-self-center">
								    <button class="btn btn-success" data-dismiss="modal">Cerrar</button>
							    </div>
                            </div>
                        </div>
                    </div>
                    <!--|||||||||||FIN DEL MODAL|||||||||||||-->
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mt-3">
                <div class="card">
                    <img src="../image/licenciaturas/filo.jpg" alt="filosofía" class="img-fluid card-img-top">
                    <p class="h4 card-title text-center mt-3">Filosofía</p>
                    <!--||||||||||||||INICIO MODAL||||||||||||||-->
                    <button class="btn btn-primary btn-sm mb-2 btn-filo" data-toggle="modal" data-target="#filosofia">Ver más</button>
                    <div class="modal fade" id="filosofia" tabindex="-1" role="dialog" aria-labelledby="filosofia" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <!--CONTENIDO DEL MODAL-->
                            <div class="modal-content">
                                <div class="modal-header modal-filosofia">
                                    <h3 class="modal-title">Licenciatura en Filosofía</h3>
                                    <button class="close" data-dismiss="modal" aria-label="cerrar"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/msQyIQrLoRc?rel=0" allowfullscreen></iframe>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="h3">Objetivo</p>
                                            <p class="text-justify">Formar profesionistas capaces de comprender e interpretar los textos filosóficos de diversas épocas, con la finalidad de entender las problemáticas históricas que han dado pie a los fundamentos doctrinales del entendimiento del ser, hacer y prevalecer dentro de las estructuras sociales e intelectuales de la actualidad; lo que permitirá desempeñarse dentro del ámbito educativo exponiendo nuevas propuestas de divulgación de la filosofía y del pensamiento filosófico.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="h3">Campo laboral</p>
                                            <p class="text-justify">El licenciado en Filosofía puede actuar eficazmente como docente en instituciones educativas de distintos niveles, especialmente en un nivel medio superior y superior; también participar activamente como orientador en instituciones gubernamentales, municipales, estatales y federales. Además, puede influir positivamente en los proyectos del sector público y privado.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="h3">Requisitos</p>
                                            <li>Acta de nacimiento (original y 2 copias)</li>
                                            <li>Certificado de secundaria (original y 2 copias)</li>
                                            <li>Certificado de bachillerato (original y 2 copias)</li>
                                            <li>4 fotografías en blanco y negro, terminado mate, tamaño infantil, tomadas de frente, con orejas descubiertas, no instantáneas, tomadas con ropa color blanco. (mujeres, sin aretes, cabello recogido).</li>
                                            <li>CURP</li>
                                        </div>
                                    </div>
                                    <div class="row justify-content-around plan">
                                            <div class="col-12">
                                                <p class="h4 text-center mt-3"><em>Plan de Estudios</em></p>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Primer Semestre</h5>
                                                        <li>lntroducción a la Filosofía</li>
                                                        <li>Historia de la Filosofía Antigua I</li>
                                                        <li>Lógica I</li>
                                                        <li>Latín I</li>
                                                        <li>Habilidades de Expresión en Filosofía</li>
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Segundo Semestre</h5>
                                                        <li>Antropología Filosófica</li>
                                                        <li>Historia de la Filosofía Antigua ll</li>
                                                        <li>Lógica ll</li>
                                                        <li>Latín ll</li>
                                                        <li>Filosofía de la Naturaleza</li>
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Tercer Semestre</h5>
                                                        <li>Ética General</li>
                                                        <li>Historia de la Filosofía Medieval I</li>
                                                        <li>Gnoseología</li>
                                                        <li>Griego</li>
                                                        <li>Metafísica</li>
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Cuarto Semestre</h5>
                                                        <li>Ética Especial</li>
                                                        <li>Historia de la Filosofía Medieval ll</li>
                                                        <li>Epistemología</li>
                                                        <li>Filosofía de la Historia</li>
                                                        <li>Teología Natural</li>
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Quinto Semestre</h5>
                                                        <li>Estética</li>
                                                        <li>Historia de la Filosofía Moderna I</li>
                                                        <li>Filosofía de la Ciencia</li>
                                                        <li>Filosofía Mexicana</li>
                                                        <li>Seminario de Filosofía Tomista</li>
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Sexto Semestre</h5>
                                                        <li>Hermenéutica de Textos Filosóficos</li>
                                                        <li>Historia de la Filosofía Moderna ll</li>
                                                        <li>Filosofía del Lenguaje</li>
                                                        <li>Filosofía de la Educación</li>
                                                        <li>Filosofía de la Cultura</li>
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Séptimo Semestre</h5>
                                                        <li>Metodología de la Investigación</li>
                                                        <li>Historia de la Filosofía Contemporánea I</li>
                                                        <li>Filosofía Política</li>
                                                        <li>lnglés I</li>
                                                        <li>Filosofía Social</li>
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Octavo Semestre</h5>
                                                        <li>Seminario de Tesis</li>
                                                        <li>Historia de la Filosofía Contemporánea ll</li>
                                                        <li>Filosofía de la Religión</li>
                                                        <li>lnglés ll </li>
                                                        <li>Didáctica de la Filosofía </li>
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                        </div>
                                    </div>
                                <div class="modal-footer d-flex align-self-center">
								    <button class="btn btn-success" data-dismiss="modal">Cerrar</button>
							    </div>
                            </div>
                        </div>
                    </div>
                    <!--|||||||||||FIN DEL MODAL|||||||||||||-->
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mt-3">
                <div class="card">
                    <img src="../image/licenciaturas/crim.jpg" alt="criminología" class="img-fluid card-img-top">
                    <p class="h4 card-title text-center mt-3">Criminología</p>
                    <!--||||||||||||||INICIO MODAL||||||||||||||-->
                    <button class="btn btn-primary btn-sm mb-2 btn-crim" data-toggle="modal" data-target="#crim">Ver más</button>
                    <div class="modal fade" id="crim" tabindex="-1" role="dialog" aria-labelledby="crim" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <!--CONTENIDO DEL MODAL-->
                            <div class="modal-content">
                                <div class="modal-header modal-crim">
                                    <h3 class="modal-title">Criminología y Criminalística</h3>
                                    <button class="close" data-dismiss="modal" aria-label="cerrar"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/D35T11bBCio?rel=0" allowfullscreen></iframe>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="h3">Objetivo</p>
                                            <p class="text-justify">Capacitar profesionales con los conocimientos y capacidad de aplicar sus conocimientos utilizando las herramientas y técnicas del área de Criminología y Criminalística para desenvolverse en el ámbito de la prevención, investigación y persecución de delitos, analizando y esclareciendo ilícitos de manera profesional dentro de las áreas criminales; además de buscar alternativas contra la delincuencia con sentido común, ética, eficacia, veracidad y apegados a la justicia.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="h3">Campo laboral</p>
                                            <p class="text-justify">El licenciado en criminología y Criminalística es una figura importante para las actividades legales en México, lleva consigo la responsabilidad de discernir y describir procesos de delincuencia.</p>
                                            <p class="text-justify">Tendrá tareas de gran importancia como: detectar, esclarecer y determinar delitos cometidos en la sociedad.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="h3">Requisitos</p>
                                            <li>Acta de nacimiento (original y 2 copias)</li>
                                            <li>Certificado de secundaria (original y 2 copias)</li>
                                            <li>Certificado de bachillerato (original y 2 copias)</li>
                                            <li>4 fotografías en blanco y negro, terminado mate, tamaño infantil, tomadas de frente, con orejas descubiertas, no instantáneas, tomadas con ropa color blanco. (mujeres, sin aretes, cabello recogido).</li>
                                            <li>CURP</li>
                                        </div>
                                    </div>
                                    <div class="row justify-content-around plan">
                                            <div class="col-12">
                                                <p class="h4 text-center mt-3"><em>Plan de Estudios</em></p>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Primer Semestre</h5>
                                                        <li>Criminología I</li>
                                                        <li>Criminalística I</li>
                                                        <li>Matemáticas Superiores</li>
                                                        <li>Bases Biológicas de la Conducta</li>
                                                        <li>Principios Básicos del Derecho Penal</li>
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Segundo Semestre</h5>
                                                        <li>Criminología II</li>
                                                        <li>Criminalística II</li>
                                                        <li>Estadística</li>
                                                        <li>Psicología Criminal</li>
                                                        <li>Garantías Constitucionales y Derechos Humanos</li>
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Tercer Semestre</h5>
                                                        <li>Química Forense</li>
                                                        <li>Metodología de la Investigación</li>
                                                        <li>Introducción a la Medicina</li>
                                                        <li>Victimología</li>
                                                        <li>Derecho Procesal Penal</li>
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Cuarto Semestre</h5>
                                                        <li>Fiscal Forense</li>
                                                        <li>Serología Forense</li>
                                                        <li>Medicina Forense</li>
                                                        <li>Psiquiatría Criminal</li>
                                                        <li>Metodología de las Ciencias Forenses</li>
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Quinto Semestre</h5>
                                                        <li>Incendios y Explosivos</li>
                                                        <li>Hematología Forense</li>
                                                        <li>Dactiloscopia</li>
                                                        <li>Ética Pericial</li>
                                                        <li>Delitos Sexuales</li>
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Sexto Semestre</h5>
                                                        <li>Balística</li>
                                                        <li>Toxicología Forense</li>
                                                        <li>Odontología Forense</li>
                                                        <li>Grafoscopía</li>
                                                        <li>Pruebas Periciales</li>
                                                        <li>Tratamiento Penitenciario y Postpenitenciario</li>
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-center">
                                                    <div class="col-10 plan mb-4">
                                                        <h5 class="text-muted">Séptimo Semestre</h5>
                                                        <li>Fotografía Forense</li>
                                                        <li>Tricología Forense</li>
                                                        <li>Antropología Forense</li>
                                                        <li>Poligrafía</li>
                                                        <li>Política y Prevención Criminal</li>
                                                        <li>Seguridad Pública</li>
                                                    </div>
                                                    <div class="col-10 plan">
                                                        <h5 class="text-muted">Octavo Semestre</h5>
                                                        <li>Criminología Clínica</li>
                                                        <li>Criminalística de Campo</li>
                                                        <li>Genética Forense</li>
                                                        <li>Problemas Criminológicos Actuales</li>
                                                        <li>Crimen Organizado</li>
                                                        <li>Seminario de Tesis</li>
                                                    </div>
                                                </div>
                                                <hr class="featurette-divider">
                                            </div>
                                        </div>
                                    </div>
                                <div class="modal-footer d-flex align-self-center">
								    <button class="btn btn-success" data-dismiss="modal">Cerrar</button>
							    </div>
                            </div>
                        </div>
                    </div>
                    <!--|||||||||||FIN DEL MODAL|||||||||||||-->
                </div>
            </div>
        </div>
    </section>

    <?php require 'footer.php' ?>