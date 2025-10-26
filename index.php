<?php

require_once __DIR__ . '/core/Route.php';

// ROTAS GET
Route::get('/', function() {
    require __DIR__ . '/paginas/pgLogin.php';
});

Route::get('/login', function() {
    require __DIR__ . '/paginas/pgLogin.php';
});

Route::get('/criar', function() {
    require __DIR__ . '/paginas/pgCriarLogin.php';
});

Route::get('/logout', function() {
    require __DIR__ . '/logout.php';
});

// ROTAS POST
Route::post('/login', function() {
    require __DIR__ . '/Actions/loginAction.php';
});

Route::post('/registrar', function() {
    require __DIR__ . '/Actions/registraAction.php';
});

Route::dispatch();
 