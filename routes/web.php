<?php

use Illuminate\Support\Facades\Route;

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
    $pageTitle = "Benvenuti su Laravel di Mirko";
    return view('home', compact("pageTitle"));
})->name("home");



Route::get('/about-me', function () {
    $data = [
        "pageTitle" => "chi sono?",
        "lenguages" => [
            "phyton",
            "Laravel",
            "C#",
            "JavaScript",
        ],
    ];
    return view('about', $data);
})->name("about");
