<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'PdfController::index');
$routes->get('/pdf/generate', 'PdfController::generate');
$routes->get('/viewpelanggan', 'Pelanggan::index');
$routes->get('/pelanggan/printpdf', 'Pelanggan::printpdf');
