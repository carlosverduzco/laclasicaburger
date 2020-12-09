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
    date_default_timezone_set('America/Chihuahua');
    $fecha = date("l");
    $dir_path = "../public/img/Recomendaciones_diarias/".$fecha."/";
    $extensions_array = array('jpg','png','jpeg');
    $filesarray = array();
    if(is_dir($dir_path)) {
        $files = scandir($dir_path);
        for ($i = 0; $i < count($files); $i++) {
            if ($files[$i] != '.' && $files[$i] != '..') {
                $file = pathinfo($files[$i]);
                $extension = $file['extension'];
                if (in_array($extension, $extensions_array)) {
                    $filesarray[] = $file;
                }
            }
        }
    }
    $dir_path = "../public/img/Conocenos/";
    $imgsarray2carousel = array();
    if(is_dir($dir_path)) {
        $files = scandir($dir_path);
        for ($i = 0; $i < count($files); $i++) {
            if ($files[$i] != '.' && $files[$i] != '..') {
                $file = pathinfo($files[$i]);
                $extension = $file['extension'];
                if (in_array($extension, $extensions_array)) {
                    $imgsarray2carousel[] = $file;
                }
            }
        }
    }

    return view('index')->with(compact('filesarray'))->with(compact('imgsarray2carousel'));
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/sucursales', function () {
    $response = \GoogleMaps::load('placeadd')
        ->setParam([
            'location' => [
                'lat'  => -33.8669710,
                'lng'  => 151.1958750
            ],
            'accuracy'           => 0,
            "name"               =>  "Google Shoes!",
            "address"            => "48 Pirrama Road, Pyrmont, NSW 2009, Australia",
            "types"              => ["shoe_store"],
            "website"            => "http://www.google.com.au/",
            "language"           => "en-AU",
            "phone_number"       =>  "(02) 9374 4000"
        ])
        ->get();
    return view('sucursales')->with('map',$response);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/tienda', function () {
    return view('store');
});

Route::get('/aviso_legal', function () {
    return view('aviso_legal');
});

Route::get('/dashboard', function () {
    return redirect("./");
});
