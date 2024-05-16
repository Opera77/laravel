<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategorieController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', [TestController::class, 'hello']);
Route::get('/salut/{nom}', function($nom) {
    return "Salut $nom";
});
Route::get('/somme/{a}/{b}', function ($a, $b) {
    return "La somme de $a et $b donne ".($a+$b);
});
Route::get('/list/blog/article', function() {
    return view('article');
});

Route::post('/pays', [TestController::class, 'store'])->name('savePays');
Route::get('/pays', [TestController::class, 'getCountries'])->name('listePays');
Route::get('/pays/create', [TestController::class, 'create'])->name('createPays');
Route::get('/pays/{id}', [TestController::class, 'showCountries'])->name('detailPays');

//Route::resource('articles', [ArticleController::class]);

Route::resource('/categories', CategorieController::class);
Route::resource('/etiquettes', CategorieController::class);

