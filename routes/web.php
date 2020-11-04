<?php

Route::view('/', 'landingPage')->name('land2');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('subscription', 'PaymentController@payment');
Route::post('subscribe', 'PaymentController@subscribe');
//local payment
Route::get('localp', 'OfflinePaymentController@show')->name('localp');
Route::post('offpay', 'OfflinePaymentController@store');

//wallet routes
Route::post('walletp', 'walletController@popup');

route::get('up',      function(){ return view('fronta.auth.signup');})->name('up');
route::get('in',      function(){ return view('fronta.auth.login');})->name('in');


Route::group(['middleware' => ['auth', 'check-subscription']], function() {

    Route::get('afro',    'MovieController@home');
    Route::get('detail/{id}',  'MovieController@detail');
    Route::get('wa',      function(){ return view('fronta.watching');});
    Route::get('profile', function(){ return view('fronta.profile');})->name('profile');

    Route::get('play/{id}', 'MovieController@show');
    Route::get('movies','MovieController@index')->name('movies');

    Route::get('drama    ','MovieController@drama');
    Route::get('comedy   ','MovieController@comedy');
    Route::get('action   ','MovieController@action');
    Route::get('romance  ','MovieController@romance');
    Route::get('horror   ','MovieController@horror');
    Route::get('fantasy  ','MovieController@fantasy');
    Route::get('scifi    ','MovieController@scifi');
    Route::get('thriller ','MovieController@thriller');
    Route::get('western  ','MovieController@western ');
    Route::get('adv      ','MovieController@adv');
    Route::get('anim     ','MovieController@anim');
    Route::get('doc      ','MovieController@doc');

});

Route::group(['prefix' => 'admin'], function () {Voyager::routes();});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');







//     Route::get('et/la', function () {return view('etlandingPage');})->name('land3');
//     Route::get('et/', function () {return view('auth.pregister');})->name('register');
//     Route::get('et/plogin', function(){ return view('auth.plogin');})->name('plogin');
//     Route::get('et/verify', function () {return view('auth.pverify');})->name('verify');
//     Route::post('et/register', 'AuthController@create')->name('register');
//     Route::post('et/verify', 'AuthController@verify')->name('verify');

// Route::group(['prefix' => 'et','middleware' => ['auth']], function(){
//     Route::get('/dashboard', 'TvShowController@index');
//     Route::get('/playt/{id}', 'TvShowController@show');
//     Route::get('/playervc/{id}', 'EpisodeController@playervc');

//     //movies routes
//     Route::get('/movies', 'MovieController@index');
//     Route::get('/play/{id}', 'MovieController@show')->name('movie');
//     Route::get('/player/{id}', 'MovieController@player');
//     Route::get('/playerv/{id}', 'MovieController@playervc');
//     Route::get('/newarrival', 'MovieController@newarrival');
//     Route::get('search', 'MovieController@searchMovie')->name('get:search:result');

//     //Route::get('','');
//     Route::get('/dramamov','MovieController@drama');
//     Route::get('/comedymov','MovieController@comedy');
//     Route::get('/actionmov','MovieController@action');
//     Route::get('/romancemov','MovieController@romance');
//     Route::get('/horrormov','MovieController@horror');
//     Route::get('/fantasymov','MovieController@fantasy');
//     Route::get('/scifimov','MovieController@scifi');
//     Route::get('/thrillermov','MovieController@thriller');
//     Route::get('/westernmov','MovieController@western');
//     Route::get('/advmov','MovieController@adv');
//     Route::get('/animmov','MovieController@anim');
//     Route::get('/docmov','MovieController@doc');

//     //playlists
//     //Route::get('/playlists', 'PlaylistController@index');
//     Route::get('/playlists', 'PlaylistController@popular');
//     Route::get('/playlistsrec', 'PlaylistController@recommended');
//     Route::get('/playlistsreca', 'PlaylistController@recent');
//     Route::get('/playlists10m', 'PlaylistController@top10movies');
//     Route::get('/playlists10s', 'PlaylistController@top10shows');

//     Route::get('/profile', 'ProfileController@index');
//     Route::get('/comingsoon', 'ComingsoonController@index');
//     Route::get('/account', 'UserController@account_setting');
//     Route::get('/favorites', 'FavouriteController@index');
//     Route::get('/faqs', 'FaqController@index');
// });


// Route::group(['middleware' => ['auth', 'check-subscription']], function() {

//     Route::post(
//         'stripe/webhook',
//         '\App\Http\Controllers\WebhookController@handleWebhook'
//     );

//     Route::post('/userupdate', 'UserController@update')->name('userupdate');
//     //tvshow routes
//     Route::get('/dashboard', 'TvShowController@index');
//     Route::get('/playt/{id}', 'TvShowController@show');
//     Route::get('/playervc/{id}', 'EpisodeController@playervc');

//     //movies routes
//     Route::get('/movies', 'MovieController@index');
//     Route::get('/play/{id}', 'MovieController@show')->name('movie');
//     Route::get('/player/{id}', 'MovieController@player');
//     Route::get('/playerv/{id}', 'MovieController@playervc');
//     Route::get('/newarrival', 'MovieController@newarrival');
//     Route::get('search', 'MovieController@searchMovie')->name('get:search:result');

//     //Route::get('','');
//     Route::get('/dramamov','MovieController@drama');
//     Route::get('/comedymov','MovieController@comedy');
//     Route::get('/actionmov','MovieController@action');
//     Route::get('/romancemov','MovieController@romance');
//     Route::get('/horrormov','MovieController@horror');
//     Route::get('/fantasymov','MovieController@fantasy');
//     Route::get('/scifimov','MovieController@scifi');
//     Route::get('/thrillermov','MovieController@thriller');
//     Route::get('/westernmov','MovieController@western');
//     Route::get('/advmov','MovieController@adv');
//     Route::get('/animmov','MovieController@anim');
//     Route::get('/docmov','MovieController@doc');

//     //playlists
//     //Route::get('/playlists', 'PlaylistController@index');
//     Route::get('/playlists', 'PlaylistController@popular');
//     Route::get('/playlistsrec', 'PlaylistController@recommended');
//     Route::get('/playlistsreca', 'PlaylistController@recent');
//     Route::get('/playlists10m', 'PlaylistController@top10movies');
//     Route::get('/playlists10s', 'PlaylistController@top10shows');

//     Route::get('/profile', 'ProfileController@index');
//     Route::get('/comingsoon', 'ComingsoonController@index');
//     Route::get('/account', 'UserController@account_setting');
//     Route::get('/favorites', 'FavouriteController@index');
//     Route::get('/faqs', 'FaqController@index');
//     //payment
//     Route::get('paymentinfo', 'PaymentController@payment_info');

// });





//voyager

















// Route::get('/signup1', function(){return view('front.signupstep1');});
// Route::post('/afroflix-register','UserController@store');
// Route::get('/signup2', function(){return view('front.signupstep2');});
// Route::get('/signup3', function(){return view('front.signupstep3');});
// Route::get('/signup4', function(){return view('front.signupstep4');});
// Route::get('/wellcome', function(){return view('front.signupwellcome');});
// Route::get('/', function () {return view('landingPage')->name('land');});

