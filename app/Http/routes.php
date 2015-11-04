<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/books', 'BookController@getIndex');
Route::get('books/show/{title?}', 'BookController@getShow');
//Route::get('/books/create', 'BookController@getCreate');
//Route::post('/books/create', 'BookController@postCreate');

#Route::get('/books/foo', 'BookController@bar');

Route::controller('/books', 'BookController');

Route::get('/practice', function() {

   $random = new Random();
   return $random->getRandomInteger(1, 100);


});

