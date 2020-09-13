<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('page.index');
// });





Route::get('/','HelloController@index');


Route::get('welcome','HelloController@Welcome');
Route::get('contract/us','HelloController@contract')->name('contact');
Route::get('about/us','HelloController@about')->name('about');



//Catrgory CRUD is Here============
Route::get('all/category','CategoeyController@AllCategory')->name('all.category');
Route::get('add/category','HelloController@AddCategory')->name('add.category');
Route::post('store/category','HelloController@StoreCategory')->name('store.category');


Route::get('edit/category/{id}','CategoeyController@EditCategory');
Route::get('view/category/{id}','CategoeyController@ViewCategory');
Route::get('delete/category/{id}','CategoeyController@DeleteCategory');

Route::post('update/category/{id}','CategoeyController@UpdateCategory');


//Post code is Here
Route::get('write/post','PostController@writePost')->name('write.post');
Route::post('store/post','PostController@StorePost')->name('store.post');
Route::get('all/post','PostController@AllPost')->name('all.post');

Route::get('edit/post/{id}','PostController@EditPost');
Route::get('view/post/{id}','PostController@ViewPost');
Route::post('update/post/{id}','PostController@UpdatePost');
Route::get('delete/post/{id}','PostController@DeletePost');


 // Route::get('/show/{id}','User@index');

// Route::view('test','test')-> middleware('age');

//  Route::get('homee',function(){
// 		echo "This is homee Page";
// 	});

// Route::get('about','HelloController@Manush');
// Route::get('blog','HelloController@Human');


// Route::get('contract'),'HelloController@Human')->name('Contract');

// Route::get('/test','TestController@test');

// Route::get('/index','StudentController@index')->name('index');
// //Route::get('/create','StudentController@create')->('create');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
