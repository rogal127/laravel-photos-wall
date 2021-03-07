<?php

use App\Models\User;
use App\Models\Photo;
use Illuminate\Support\Facades\Auth;
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
    $photos = Photo::where('accepted', 1)->orderBy('created_at', 'DESC')->paginate(20);
    return view('welcome', ['photos' => $photos]);
});

Route::get('/zdjecie/{id}', [PhotoController::class, 'show']);
Route::get('/dodaj-zdjecie', [PhotoController::class, 'add'])->middleware(['auth'])->name('addPhoto');
Route::post('/store-photo', [PhotoController::class, 'store'])->middleware(['auth'])->name('storePhoto');

Route::get('/akceptuj-zdjecie/{id}', function($id) {
    if (Auth::user()->name == 'admin' || Auth::user()->name == 'rogal127') {
        $photo = Photo::find($id);
        $photo->accepted = 1;
        $photo->save();
        return back();
    }
})->middleware(['auth']);

Route::get('/odrzuc-zdjecie/{id}', function($id) {
    if (Auth::user()->name == 'admin' || Auth::user()->name == 'rogal127') {
        $photo = Photo::find($id);
        $photo->delete();
        return back();
    }
})->middleware(['auth']);

Route::get('/akceptuj-zdjecia', function() {
    if (Auth::user()->name == 'admin' || Auth::user()->name == 'rogal127') {
        $photos = Photo::where('accepted', 0)->orderBy('created_at', 'DESC')->paginate(20);
        return view('accept', ['photos' => $photos]);
    } else {
        return redirect('/');
    }
    
})->middleware(['auth']);

Route::get('/usun-uzytkownika/{id}', function($id) {
    if (Auth::user()->name == 'admin' || Auth::user()->name == 'rogal127') {
        $user = User::find($id);
        if (!empty($user)) {
            foreach ($user->photos as $p) {
                $p->delete();
            }

            $user->delete();
        }

        return redirect('usun-uzytkownikow');
    } else {
        return redirect('/');
    }
    
})->middleware(['auth']);

Route::get('/usun-uzytkownikow', function() {
    if (Auth::user()->name == 'admin' || Auth::user()->name == 'rogal127') {
        $users = User::all();

        return view('usun-uzytkownikow', ['users' => $users]);
    } else {
        return redirect('/');
    }
    
})->middleware(['auth']);

require __DIR__.'/auth.php';
