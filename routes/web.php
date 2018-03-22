<?php
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/people', 'PeopleController@people');
$router->get('/bio', 'PeopleController@bio');
$router->get('/films', 'FilmController@films');
$router->get('/film-data', 'FilmController@film');
$router->get('/planets', 'PlanetController@planets');
$router->get('/planet-data', 'PlanetController@planetData');
$router->get('/species', 'SpeciesController@species');
$router->get('/species-data', 'SpeciesController@speciesData');
$router->get('/starships', 'StarshipsController@starships');
$router->get('/starship-data', 'StarshipsController@starshipData');
$router->get('/vehicles', 'VehicleController@vehicles');
$router->get('/vehicle-data', 'VehicleController@vehicleData');
