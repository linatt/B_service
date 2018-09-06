<?php

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


$router->group([
  'middleware' => 'jwt.auth'
],
function() use ($router) {
  $router->post('/answerToA', function () use ($router) {
      return 'Antwort vom B-Service!';
  });

});

$router->group([
  'middleware' => 'auth'
],
function() use ($router) {
  $router->post('/pasetoAnswerToA', function () use ($router) {
      return 'Antwort vom B-Service!';
  });

});
