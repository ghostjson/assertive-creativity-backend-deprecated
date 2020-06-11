<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('dashboard');
});

//Pages section

Route::get('/pages/home', function () {
    return view('pages.home');
});

Route::get('/pages/about', function () {
    return view('pages.about');
});


// Forms Section

Route::get('/form/forms', 'FormController@formsView');


Route::get('/form/form-creator', function () {
    return view('form.form-creator');
});

Route::get('/form/form-view', function () {
    return view('form.form-view');
});

Route::get('/form/edit/{id}', 'FormController@formEdit');
Route::get('/form/remove/{id}', 'FormController@formRemove');
Route::get('/form/{id}', 'FormController@getFormData');


// login
Route::get('/login', function () {
    return view('login');
});


//api section NON PROPER WAY
Route::post('/api/form/save', 'FormController@save');
Route::post('/api/form/update', 'FormController@update');


//messages
Route::get('/messages/inbox', function () {
    return view('messages.inbox'); 
});
Route::get('/messages/compose', function () {
    return view('messages.compose'); 
});
Route::get('/messages/read', function () {
    return view('messages.read'); 
});

Route::get('/products',function(){
    return view('pages.products');
});

Route::get('/products/new', function(){
    return view('pages.products.create');
});

Route::get('/vendors',function(){
    return view('pages.vendors');
});

Route::get('/vendors/new', function(){
    return view('pages.vendors.create');
});


Route::get('/creator/home', function(){
    return view('pages.page-editor.home');
});

Route::get('/creator/about', function(){
    return view('pages.page-editor.home');
});

Route::get('/creator/contact', function(){
    return view('pages.page-editor.home');
});