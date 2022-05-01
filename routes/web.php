<?php

use App\Models\listings;
use Illuminate\Http\Request;
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
    return view('listings',[
        'posts' => Listings::all()
    ]);
});
Route::get('/listings/{id}', function ($id) {
    return view('listing',[
        'post' => Listings::find($id)
    ]);
});
// Route::get('/hello', function () {
//     return response('<h1>hello world</h1>',300,['Content-Type'=>'text/plain','foo'=>'bar']);
// });
// Route::get('/search/{id}', function ($i) {
//     // dd($i);
//     return response('number : '. $i);
// })->where('id', '[0-9]+');
// Route::get('/search', function (Request $request) {
//     return response($request->name . " " . $request->city);
//     // dd($request);
// });
