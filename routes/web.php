<?php


$router->get('/', function () use ($router) {
    return $router->app->version();
});

/*el navegador chrome solo admite  GET 
POR LO QUE UTILIZAREMOS POSTMAN ,ahí hay que seleccionar Body-raw-JSON y enviar
los campos con sus respectivos datos en formato JSON para editar un registro.
 * get se utiliza más para  listar o buscar*/


////EndPoints de USUARIO
$router->get('/usuario/listar', 'ControladorUsuario@listarUsuarios');//
$router->post('/usuario/modificar/{external_id}', 'ControladorUsuario@modificarUsuario');
$router->post('/usuario/login', 'ControladorUsuario@inicioSesion');
/*seleccionar Body-raw-JSON y enviar el correo y clave en formato json 
 * para loguearse, y como extra obtendremos el token
 */
$router->post('/usuario/buscar/{external_id}', 'ControladorUsuario@buscarUsuario');
$router->post('/usuario/registrar', 'ControladorUsuario@registrarUsuario');

////EndPoints de SitioTuristico
$router->get('/sitio/listar', 'ControladorSitioTuristico@listarSitios');
$router->get('/sitio/buscar/{cadena}', 'ControladorSitioTuristico@buscarSitio');
$router->get('/sitio/buscarDos/{search}', 'ControladorSitioTuristico@buscarSitioDos');
$router->post('/sitio/eliminar/{external_id}', 'ControladorSitioTuristico@eliminarSitio');
$router->post('/sitio/editar/{external_id}', 'ControladorSitioTuristico@modificarSitio');
$router->post('/sitio/registrar', 'ControladorSitioTuristico@registrarSitio');
