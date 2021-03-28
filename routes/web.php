<?php
use Illuminate\Support\Facades\Route;
use App\Mail\ContactosMail;
use Illuminate\Support\Facades\Mail;
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
    return view('index');
});

Route::get('nosotros', 'ViewController@nosotros')->name('nosotros');

Route::get('renta-de-copiadoras', 'ViewController@copiadoras')->name('copiadoras');

Route::get('renta-de-impresoras', 'ViewController@impresoras')->name('impresoras');

Route::get('renta-de-multifuncionales', 'ViewController@multifuncionales')->name('multifuncionales');

Route::get('servicios-administrados-impresion', 'ViewController@serviciosadministrados')->name('serviciosadministrados');

Route::get('gracias', 'ViewController@gracias')->name('gracias');

Route::get('aviso-de-privacidad', 'ViewController@avisoprivacidad')->name('avisoprivacidad');

Route::get('uso-de-cookies', 'ViewController@usocookies')->name('usocookies');

Route::get('contacto', 'ViewController@contacto')->name('contacto');

Route::post('gracias', 'ViewController@sendMail')->name('gracias');

