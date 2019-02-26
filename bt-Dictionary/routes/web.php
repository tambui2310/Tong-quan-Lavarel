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

Route::get('/dictionary', function () {
    return view('dictionary');
});
Route::post('/dictionary',function (Illuminate\Http\Request $request){
	$tudien = array("hello" => "xin chào", "how" => "thế nào", "book" => "sách");
	$search = $request->word;
	foreach ($tudien as $key => $value) {
		if ($key == $search) {
			return view('hienthi', compact(['search','value']));
		}
	}
	if ($key !== $search){
		return view('hienthiloi');
	}
});	