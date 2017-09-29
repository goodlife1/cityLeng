<?php



//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::group(['prefix'=>'admin'],function() {
    Route::get('/pages', 'Admin\PageController@index');
    Route::get('pages/edit/{id}', 'Admin\PageController@edit');
    Route::put('pages/{page}', 'Admin\PageController@update');
});
Route::get('/', function () {
})->middleware('auth:api');


Route::get('/page','PageController@page');
Route::get('/example','UserController@index');
Route::get('/example-c','UserController@create');


Route::post('/example', function (\Illuminate\Http\Request $request) {
    dd($request->all());

});