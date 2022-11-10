<?php
    
    use app\Http\controllers;
    use App\Http\controllers\UserController;

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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function(){
    return view('Auth.login');
})->name('login');

Route::get('/home', function(){
    return view('home');
})->name('home');


Route::get('/users', [ UserController::class, 'index']);

Route::get('/users/create', [ UserController::class, 'create']);

Route::get('/users/{id}', [ UserController::class, 'show']);

Route::get('/users', [ UserController::class, 'store']);


Route::get('/saludo', function(){
    return "hola";
});

Route::get('/saludo/{nombre}', function($nombre){
    return "hola ".$nombre;
});

/*Route::get('/suma/{num1}/{num2}', function($num1,$num2){
    return $num1 + $num2;

})->where(['num1' => '[0-9]+','num2'=>'[0-9]+']);*/

/*Route::get('/multi/{num1}/{num2}/{num3?}',function($num1,$num2,$num3 = 1){
    return $num1 * $num2 * $num3;
});*/
