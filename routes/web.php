<?php

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

use App\Post;

Route::get('/', function () {
    $post = new Post(['title' => 'Mamma Miiaaa', 'body' => 'Mushibishi']);
    $post->save();

    return Post::all();
});

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/help', function () {
    return view('pages/help');
});

Route::get('/events', function () {
    $events = [
        "Make PHP Great Again!",
        "PHP Conference", 
        "Meetup TDN",
        "Laravel Conference"
    ];

    return view('pages/events', compact('events'));
});
