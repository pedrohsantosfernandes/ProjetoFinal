<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('aluno', 'AlunoController::index');
$routes->post('aluno', 'AlunoController::index'); 
$routes->get('consulta-alunos', 'AlunoController::consulta');