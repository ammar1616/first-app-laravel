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

    $books = [
            ['title' => 'Book 1', 'price' => 10.99],
            ['title' => 'Book 2', 'price' => 12.99],
            // Add more books here as needed
        ];

    return view('dashboard',['books' => $books]);
});


Route::get('/addbook', function () {
    $books = "add book";
    return view('addbook', ['books' => $books]);
})->name('addbook');
