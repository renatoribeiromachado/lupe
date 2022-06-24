<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
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

/* Home é o Controller e index,about etc são as paginas e methods no controller*/ 
/* tb chamo as paginas pelo mesmo nome do methods para não ter problema */
/* principal é como sera vista na url, aqui podemos escrever o que quiser*/
/* e la no menu sera add como foi descrita url amigavel exe: nossa-localizacao*/

/*Admin*/
$routes->get('/admin', 'Admin/Home::index');
$routes->get('admin/listar-blog', 'Admin/Blog::index');
$routes->get('admin/inserir-blog', 'Admin/Blog::create');
$routes->get('admin/editar-blog/(:any)', 'Admin\Blog::create/$1');
$routes->get('admin/listar-contatos', 'Admin/Contato::index');
$routes->get('admin/exportar-contatos', 'Admin/Contato::exportar');

/*Site*/
$routes->get('/', 'Home::index');
$routes->get('office-365', 'Home::office');
$routes->get('azure', 'Home::azure');
$routes->get('nuvem-aws', 'Home::aws');

/*Blog*/
$routes->get('blog-lupe-cloud', 'Blog::index');
$routes->get('/blog/(:any)', 'Blog::blogDetalhe/$1');
$routes->post('/pesquisa-blog', 'Blog::search');
$routes->post('/enviar-email', 'Blog::sendEmail');

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
