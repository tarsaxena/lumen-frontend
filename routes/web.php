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

$router->get('/', function ()  {
	   
    return view('campaign');
});

$router->get('/list', 'CampaignController@list');

$router->get('/userdetail/{id}', 'CampaignController@userDetail');
$router->get('/confermdoner/{id}','CampaignController@confermDoner');
$router->put('/updateuser/{id}','CampaignController@updateUser');
$router->get('/delete/{id}', 'CampaignController@delete');


$router->post('/insert', 'CampaignController@insertUser');
$router->post('/auth/login', 'ExampleController@postLogin');

