<?php
use Illuminate\Http\Request;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
    // return $request->user();
// });

Route::post('login', 'API\ApiUserController@login');
Route::post('register', 'API\ApiUserController@register');
Route::post('list', 'API\ApiUserController@list');

Route::group(['middleware' => 'auth:api'], function(){
Route::post('details', 'API\ApiUserController@details');
Route::post('logout', 'API\ApiUserController@logout');
});

Route::get('list','UserController@list');
Route::get('list/{id}','UserController@listD');
// movies controller
Route::get('/movies', 'API\MovieController@ApiIndex');
Route::get('/play/{id}', 'API\MovieController@ApiShow');
Route::get('/player/{id}', 'API\MovieController@ApiPlayer');
Route::get('/newarrival', 'API\MovieController@ApiNewarrival');
//tvshow routes
Route::get('/tvshow', 'API\TvShowController@ApiIndex');
Route::get('/playt/{id}', 'API\TvShowController@ApiShow');
Route::get('/playert/{id}', 'API\EpisodeController@ApiPlayert');

//payment
Route::get('payment', 'API\PaymentController@payment');
Route::post('subscribe', 'API\PaymentController@subscribe');
Route::get('paymentinfo', 'API\PaymentController@payment_info');
//playList routes
// TODO NOT CONNECTED YET
Route::get('/playlists', 'PlaylistController@popular');
Route::get('/playlistsrec', 'PlaylistController@recommended');
Route::get('/playlistsreca', 'PlaylistController@recent');
