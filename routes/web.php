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

Route::get('/', function () {
    return redirect('cats');
});

Route::get('cats',['uses'=>'CatController@show']);

Route::post('cats',['uses'=>'CatController@store']);

//Route::get('cats', function () {
//    $cats = Furbook\Cat::all();
//    return view('cats.index')->with('cats',$cats);
//});

//Route::post('cats',function (){
//    $cat = Furbook\Cat::create(Input::all());
//    return redirect('cats/'.$cat->id)->withSuccess('Cat has been created');
//});

Route::get('cats/breeds/{name}',function ($name){
    $breed = Furbook\Breed::with('cats')
        ->whereName($name)
        ->first();
    return view('cats.index')
        ->with('breed',$breed)
        ->with('cats',$breed->cats);
});

Route::get('cats/{cat}/edit',['uses'=>'CatController@edit']);

//Route::get('cats/{cat}/edit', function (Furbook\Cat $cat){
//    return view('cats.edit')->with('cat',$cat);
//});
Route::get('cats/create',['uses'=>'CatController@create']);
//
//Route::get('cats/create',function (){
//    return view('cats.create');
//});

Route::get('cats/{cat}/delete',['uses'=>'CatController@destroy']);

//Route::get('cats/{cat}/delete',function (Furbook\Cat $cat){
//    $cat->delete();
//    return redirect('cats')->withSuccess('Cat has been deleted');
//});

Route::get('cats/{cat}',['uses'=>'CatController@']);
//you need to add RoutServiceProvide and bind the variable Cat to the Model Furbook\Cat
//Route::get ('cats/{cat}', function (Furbook\Cat $cat){
//    return view('cats.show')->with('cat',$cat);
//});

//Route::get ('cats/{id}', function ($id){
//    //return sprintf('Cat #%s', $id);
//    $cat = Furbook\Cat::find($id);
//    return view('cats.show')->with('cat',$cat);
//})->where('id','[0-9]+');
Route::put('cats/{cat}',['uses','CatController@update']);

//Route::put('cats/{cat}',function (Furbook\Cat $cat){
//    $cat->update(Input::all());
//    return redirect('cats/'.$cat->id)->withSuccess('Cat has been updated');
//});

Route::get('about', function (){
    $count = Furbook\Cat::count();
    return view('about')->with('number_of_cats',$count);
});

