<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index', ['as' => 'inicio']);

$routes->get('/programas/diplomados', 'Home::programasDiplomados', ['as' => 'programas.diplomados']);
$routes->get('/programas/maestrias', 'Home::programasMaestrias', ['as' => 'programas.maestrias']);
$routes->get('/programas/especialidades', 'Home::programasEspecialidades', ['as' => 'programas.especialidades']);
$routes->get('/programas/doctorados', 'Home::programasDoctorados', ['as' => 'programas.doctorados']);

$routes->get('/programas/detalle', 'Home::programasDetalle', ['as' => 'programas.detalle']);

$routes->get('/institucion/vision-mision', 'Home::visionMision', ['as' => 'vision_mision']);
$routes->get('/institucion/organizacion', 'Home::organizacion', ['as' => 'organizacion']);

$routes->get('/campus', 'Home::campus', ['as' => 'campus']);

$routes->get('/contacto', 'Home::contacto', ['as' => 'contacto']);

$routes->get('/registro', 'Home::registro', ['as' => 'registro']);

$routes->get('/actividades', 'Home::actividades', ['as' => 'actividades']);

$routes->get('/actividades2', 'Home::actividades2', ['as' => 'actividades2']);


//formulario de inscripcion

$routes->get('/inscripcion', 'Principal::inscripcion', ['as' => 'inscripcion']);

//admin
$routes->get('/admin', 'Principal::index', ['as' => 'inicio_admin']);

//usuario
$routes->get('/usuarios', 'UsuariosController::index', ['as' => 'usuarios.index']);


//inscripcion
$routes->get('/inscritos', 'InscritosController::index', ['as' => 'inscritos.index']);


//oferta academica

$routes->get('/publicaciones', 'OfertasController::index', ['as' => 'publicaciones.index']);

//PARA AGREGAR NUEVOS PROGRAMAS
//PUBLICACIONES
$routes->get('/nuevo_programa', 'OfertasController::form_crear', ['as' => 'nuevo_programa.index']);
$routes->post('/publicacion', 'OfertasController::guardar_publicacion', ['as' => 'publicacion.guardar_publicacion']);
$routes->get('/publicacion/nuevo', 'OfertasController::crear_publicacion', ['as' => 'publicaciones.crear_publicacion']);
$routes->get('/publicacion/(num:)/editar', 'OfertasController::editar_publicacion/$1', ['as' => 'publicaciones.editar_publicacion']);


//login

$routes->get('/login', 'Principal::login', ['as' => 'login']);



//autenticacion

$routes->get('/admin', 'Principal::index', ['as' => 'inicio_admin']);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
