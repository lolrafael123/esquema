<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/home', function () {
    return view('home');
});

Auth::routes();
Route::get('/', function () {
   return view('auth/login');
     
});


Route::get('/', 'PostController@index');
Route::get('/posts', 'PostController@index')->name('list_posts');
Route::group(['prefix' => 'posts'], function () {
    Route::get('/drafts', 'PostController@drafts')
        ->name('list_drafts')
        ->middleware('auth');
    Route::get('/show/{id}', 'PostController@show')
        ->name('show_post');
    Route::get('/create', 'PostController@create')
        ->name('create_post')
        ->middleware('can:create-post');
    Route::post('/create', 'PostController@store')
        ->name('store_post')
        ->middleware('can:create-post');
    Route::get('/edit/{post}', 'PostController@edit')
        ->name('edit_post')
        ->middleware('can:update-post,post');
    Route::post('/edit/{post}', 'PostController@update')
        ->name('update_post')
        ->middleware('can:update-post,post');
    // using get to simplify
    Route::get('/publish/{post}', 'PostController@publish')
        ->name('publish_post')
        ->middleware('can:publish-post');
});

Route::post('/enviar','ContatoController@enviaContato');


Route::get('/formaluno', function () {
    return view('partials.alunoform');
});

Route::get('/profile','UserController@profile');

Route::post('profile', 'UserController@update_avatar');

Route::get('/aluno','UserController@profile');

Route::get('/al', function () {
    return view('partials.aluno');
});

Route::get('/professor', function () {
    return view('partials.professor');
});
