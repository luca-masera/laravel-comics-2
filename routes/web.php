<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;
use App\Http\Controllers\HomeController;

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

//Route::get('/', function () {
//$comics = config('db.comics');
//  return redirect('/comics');
//})->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('comics', ComicController::class);

/*Route::get('comics', function () {
    $comics = config('db.comics');
    return view('comics.index', compact('comics'));
});*/


/*Route::get('/comics/{id}', function ($id) {
    $comics = config('db.comics');
    if ($id >= 0 && $id < count($comics)) {
        $comic = $comics[$id];

        return view('comics.show', compact('comic'));
    } else {
        abort(404);
    }
})->name('comics.show');*/


