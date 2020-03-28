<?php

Auth::routes(['verify' => true]);

Route::get('/', 'HomeController');

// Route::get('/teste', function(){
//     Mail::send('mail.mail', ['teste' => 'Testee'], function($m){
//         $m->from('robertodiasempresario@gmail.com', 'Roberto');
//         $m->to('junior07moreno@gmail.com');
//     });
// });

Route::get('/card', 'CardController');

Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::post('/login', 'Auth\LoginController@authenticate');

Route::get('/register', 'Auth\RegisterController@index')->name('register');
Route::post('/register', 'Auth\RegisterController@register');

Route::get('/forgotPassword', 'Auth\ForgotPasswordController@index')->name('forgot');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/admin', 'AdminController@index')->name('admin.index')->middleware('verified');
Route::put('/admin/updateLogo', 'AdminController@updateLogo')->name('admin.updateLogo');
Route::get('/admin/{id}/{active}/{type}', 'AdminController@updateChecked')->name('admin.updateCkecked');
Route::post('/admin/updateBackgroundCard', 'AdminController@updateBackgroundCard')->name('link.updateBackgroundCard');
Route::put('/admin/sendImgbackgroundCard', 'AdminController@sendImgbackgroundCard')->name('admin.sendImgbackgroundCard');
Route::post('/admin/updateColorBackground', 'AdminController@updateColorBackground')->name('admin.updateColorBackground');
Route::put('/admin/cardCustomization', 'AdminController@cardCustomization')->name('admin.cardCustomization');
Route::post('/admin/setAnalytics', 'AdminController@setAnalytics')->name('admin.setAnalytics');

Route::put('/user/updatePassword', 'UserController@updatePassword')->name('user.updatePassword');

Route::post('/link', 'LinkController@store')->name('link.store');
Route::get('/link/{id}/{active}', 'LinkController@updateChecked')->name('link.isChecked');
Route::put('/link/{id}', 'LinkController@update')->name('link.update');
Route::delete('/link/{id}', 'LinkController@destroy')->name('link.destroy');
Route::post('/link/position', 'LinkController@updatePosition')->name('link.position');
Route::post('/link/addviews', 'LinkController@updateViews')->name('link.updateViews');

Route::get('/perfil', 'PerfilController@index')->name('perfil.index');
Route::post('/perfil/delete', 'PerfilController@deleteAccount')->name('perfil.delete');

Route::get('/pro', 'PerfilController@pro')->name('perfil.pro');


Route::get('/card/makeCard', 'CardController@makeCard')->name('card.makeCard');
Route::get('/{card}', 'CardController@card')->name('card.card');


Route::fallback(function(){
    return view('404');
});

