<?php

/*
|--------------------------------------------------------------------------
| Rotas da API
|--------------------------------------------------------------------------
*/

$router->get('/empreendimentos[/{filtro}]', 'EmpreendimentoController@getAll');

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->post('/register', 'AuthController@register');
    $router->post('/login', 'AuthController@login');
    $router->group(['middleware' => 'auth'], function () use ($router) {
        $router->post('/logout', 'AuthController@logout');
        $router->get('/empreendimentos[/{filtro}]', 'EmpreendimentoController@getAllByFilter');
        $router->get('/unidades/{empreendimento_id}[/{filtro}]', 'UnidadeController@getAllByEmpreendimentoIdAndFilter');
    });
});
