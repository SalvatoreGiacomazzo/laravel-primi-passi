<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {

    $pageName = "Laravel Primi passi";

    return view('home', [
        "nome" => $pageName
    ]);
});

Route::get('/about', function () {

    $pageTitle = "About Data Page";
    $aboutList = [
        "HTML",
        "CSS",
        "JS",
        "PHP"
    ];


    return view('about', [
        "titolo" => $pageTitle,
        "lista" => $aboutList
    ]);
});
