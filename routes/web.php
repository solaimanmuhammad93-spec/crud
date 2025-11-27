<?php

use Illuminate\Support\Facades\Route;



Route::get('/about{id?}',function( string $id = null){
    // return view('about');
    if($id){
    return "this is about page of user with id: " . $id;
    }
    else{
        return view('about');
    }
})->whereAlpha('id');

Route::view('/contact', 'contact');

Route::fallback(function(){
    return "the page you are looking for is not found! <a href='/'>Go to Home Page</a>";
});
Route::get('/', [App\Http\Controllers\usercontroller::class, 'index'])-> name('welcome');
Route::get('/add', [App\Http\Controllers\usercontroller::class, 'add'])-> name('add');
Route::post('/store', [App\Http\Controllers\usercontroller::class, 'store'])-> name('store');
Route::get('/edit/{id}', [App\Http\Controllers\usercontroller::class, 'edit'])-> name('edit');
Route::post('/update/{id}', [App\Http\Controllers\usercontroller::class, 'update'])-> name('update');
Route::get('/delete/{id}', [App\Http\Controllers\usercontroller::class, 'delete'])-> name('delete');
?>