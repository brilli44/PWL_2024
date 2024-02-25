<?php


use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ('welcome');
});


Route::get('/hello', function () {
    return 'Hello World';
    });

    
Route::get('/world', function () {
    return 'World';
    });

Route::get('/', function () {
        return 'Selamat Datang';
        });

Route::get('/about', function () {
            return 'DATA mahasiswa <br> NIM : 2241720041 <br>
            Nama Mahasiswa : Brilliantna Salsabila';
            });

Route::get('/user/{name}', function ($name) {
                return 'Nama saya '.$name;
                });

Route::get('/posts/{post}/comments/{comment}', function
                ($postId, $commentId) {
                return 'Pos ke-'.$postId." Komentar ke -: ".$commentId;
                });

 Route::get('/articles/{id}', function ($id) {
                    return 'Halaman artikel dengan ID ' . $id;
                });

Route::get('/user/{name?}', function ($name=null) {
                    return 'Nama saya '.$name;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
    });
  
Route::get('/user/profile', function() {
        //
        })->name('profile');

Route::get('/hello', [WelcomeController::class,'hello'] );
    
Route::get('/index', [HomeController::class,'index'] );

Route::get('/about', [AboutController::class,'about'] );

Route::get('/Articles/{id}', [ArticlesController::class,'Articles']);

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
    ]);

Route::resource('photos', PhotoController::class)->except([
        'create', 'store', 'update', 'destroy'
        ]);

Route::get('/greeting', function () {
            return view('blog.hello', ['name' => 'Brilli']);
            });
;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


