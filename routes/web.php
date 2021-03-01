<?php

use App\Models\Photo;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

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
    $photos = Photo::orderBy('created_at', 'DESC')->paginate(2);
    return view('welcome', ['photos' => $photos]);
});

Route::get('/zdjecie/{id}', [PhotoController::class, 'show']);
Route::get('/dodaj-zdjecie', [PhotoController::class, 'add'])->middleware(['auth'])->name('addPhoto');
Route::post('/store-photo', [PhotoController::class, 'store'])->middleware(['auth'])->name('storePhoto');

Route::post('/akceptuj-zdjecie', [PhotoController::class, 'accept'])->middleware(['auth']);
Route::post('/akceptuj-zdjecia', [PhotoController::class, 'photosToAcceptList'])->middleware(['auth']);

require __DIR__.'/auth.php';
