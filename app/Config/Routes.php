<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');// Ruta para obtener todos los productos con sus categorías
$routes->get('/productos/categoria/(:num)', 'Home::productosPorCategoria/$1'); // Ruta para obtener productos por categoría
$routes->get('/productos/cantidad-total', 'Home::cantidadTotalPorCategoria'); // Ruta para obtener la cantidad total de productos por categoría
$routes->get('/productos/precio-mayor/(:num)', 'Home::productosPorPrecioMayorA/$1'); // Ruta para obtener productos con precio mayor a un valor específico


