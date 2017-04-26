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

$app->get('/', function () use ($app) {
    return $app->version();
});

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', ['namespace' => 'App\Http\Controllers\V1'], function (\Dingo\Api\Routing\Router $api) {
	$api->post('upload', [
        'as' => 'file.store',
        'uses' => 'FileController@upload',
    ]);

    $api->get('file/{hash}', [
        'as' => 'file.download',
        'uses' => 'ApiController@download',
    ]);

    $api->post('user/login', [
        'as' => 'user.login',
        'uses' => 'AppController@login',
    ]);

    $api->get('nodes/all.json', [
        'as' => 'nodes.all.json',
        'uses' => 'ApiController@allNode',
    ]);
    
    $api->get('nodes/show.json', [
        'as' => 'nodes.show.json',
        'uses' => 'ApiController@nodeInfo',
    ]);

    $api->get('topics/latest.json', [
        'as' => 'topics.latest.json',
        'uses' => 'ApiController@latestTopic',
    ]);

    $api->get('topics/hot.json', [
        'as' => 'topics.hot.json',
        'uses' => 'ApiController@hotTopic',
    ]);

    $api->get('topics/show.json', [
        'as' => 'topics.show.json',
        'uses' => 'ApiController@getTopics',
    ]);

    $api->get('replies/show.json', [
        'as' => 'replies.show.json',
        'uses' => 'ApiController@getReplies',
    ]);

    $api->get('members/show.json', [
        'as' => 'members.show.json',
        'uses' => 'ApiController@getUserInfo',
    ]);
});
