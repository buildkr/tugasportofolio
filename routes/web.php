<?php
use App\Models\Post;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return view('home',[
        'title' => 'Home'
    ]);
});

//route portofolio jamak
Route::get('/portofolios', function () {
    
    return view('portos',[
        'title' => 'Porto',
        'portos' => Post::all()

    ]);
});

//route portofolio tunggal
Route::get('portos/{slug}',function($slug){
    return view('post',[
        'title' => "Single Post",
        'post'  => Post::find()
    ]);
});

//route contactme
Route::get('/contactme',function() {
    return view('contact',[
        'title' => 'Contact',
        'img'   => 'https://i.pinimg.com/564x/30/78/03/30780395836f47ecc1e70cd759f2ecd0.jpg',
        'name'  => 'Handoko Dani AM',
        'email' => 'dd3788973@gmail.com',

    ]);
});

