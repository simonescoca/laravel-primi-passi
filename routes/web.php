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
    return view('home');
});

Route::get('/about-us', function () {
    $data = [
        "cars" => [
            [
                'brand' => 'Ferrari',
                'model' => 'SF90',
            ],
            [
                'brand' => 'Lamborghini',
                'model' => 'Revuelto',
            ],
            [
                'brand' => 'Porsche',
                'model' => '911 (992) GT3 RS',
            ],
            [
                'brand' => 'McLaren',
                'model' => 'Senna',
            ]
        ]
    ];
    return view('about-us', $data);
})->name('about-us');