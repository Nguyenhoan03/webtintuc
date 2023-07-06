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

// Route::get('/abcd', function () {
//     return view('detail_tintuc2');
// });
Route::get('/', 'App\Http\Controllers\homecontroller@index');




Route::post('/detail_xuhuong/{slug}/{id}', 'App\Http\Controllers\homecontroller@postcommentxuhuong');
Route::post('/detail_tintuc1/{slug}/{id}', 'App\Http\Controllers\homecontroller@postcommenttintuc1');
Route::post('/detail_tintuc2/{slug}/{id}', 'App\Http\Controllers\homecontroller@postcommenttintuc2');
Route::post('/24h_news/{slug}/{id}', 'App\Http\Controllers\homecontroller@postcomment');


Route::post('/detail_tulieu/{slug}/{id}', 'App\Http\Controllers\homecontroller@postcommenttulieu');
Route::post('/detail_phantich/{slug}/{id}', 'App\Http\Controllers\homecontroller@postcommentphantich');
Route::post('/detail_cuocsongdoday/{slug}/{id}', 'App\Http\Controllers\homecontroller@postcommentcuocsongdoday');
Route::post('/detail_suckhoe/{slug}/{id}', 'App\Http\Controllers\homecontroller@postcommentsuckhoe');
Route::post('/detail_doisong/{slug}/{id}', 'App\Http\Controllers\homecontroller@postcommentdoisong');
Route::post('/detail_dulich/{slug}/{id}', 'App\Http\Controllers\homecontroller@postcommentdulich');
Route::post('/detail_thoisu/{slug}/{id}', 'App\Http\Controllers\homecontroller@postcommentthoisu');
Route::post('/detail_phapluat/{slug}/{id}', 'App\Http\Controllers\homecontroller@postcommentphapluat');
Route::post('/detail_giaitri/{slug}/{id}', 'App\Http\Controllers\homecontroller@postcommentgiaitri');
Route::post('/detail_kinhdoanh/{slug}/{id}', 'App\Http\Controllers\homecontroller@postcommentkinhdoanh');
Route::post('/detail_khoahoc/{slug}/{id}', 'App\Http\Controllers\homecontroller@postcommentkhoahoc');
Route::post('/detail_thoitrang/{slug}/{id}', 'App\Http\Controllers\homecontroller@postcommentthoitrang');
Route::post('/detail_giaoduc/{slug}/{id}', 'App\Http\Controllers\homecontroller@postcommentgiaoduc');
Route::post('/detail_giaothong/{slug}/{id}', 'App\Http\Controllers\homecontroller@postcommentgiaothong');
Route::post('/detail_laodongvieclam/{slug}/{id}', 'App\Http\Controllers\homecontroller@postcommentlaodongvieclam');
Route::post('/detail_thegioitunhien/{slug}/{id}', 'App\Http\Controllers\homecontroller@postcommentthegioitunhien');
Route::post('/detail_cacmonthethaokhac/{slug}/{id}', 'App\Http\Controllers\homecontroller@postcommentcacmonthethaokhac');

Route::post('/detail_contact/{slug}/{id}', 'App\Http\Controllers\homecontroller@postcommentcontact');





Route::get('/detail_tin1/{slug}/{id}', 'App\Http\Controllers\homecontroller@detail_tin1');
Route::get('/detail_phobiennhat/{id}', 'App\Http\Controllers\homecontroller@detail_phobiennhat');
Route::get('/detail_tintuc1/{slug}/{id}', 'App\Http\Controllers\homecontroller@detail_tintuc1');
Route::get('/detail_tintuc2/{slug}/{id}', 'App\Http\Controllers\homecontroller@detail_tintuc2');
Route::get('/detail_xuhuong/{slug}/{id}', 'App\Http\Controllers\homecontroller@detail_xuhuong');
Route::get('/timkiem', 'App\Http\Controllers\homecontroller@timkiem');


Route::get('/crawler', 'App\Http\Controllers\homecontroller@crawler');
Route::get('/tinchinh/{slug}', 'App\Http\Controllers\homecontroller@tinchinh');


Route::get('/tulieu', 'App\Http\Controllers\homecontroller@tulieu');
Route::get('/phantich', 'App\Http\Controllers\homecontroller@phantich');
Route::get('/cuocsongdoday', 'App\Http\Controllers\homecontroller@cuocsongdoday');

Route::get('/contact', 'App\Http\Controllers\homecontroller@contact');
Route::get('/detail_contact/{slug}/{id}', 'App\Http\Controllers\homecontroller@detail_contact');

//kjbgguikj

Route::get('/kinhdoanh', 'App\Http\Controllers\homecontroller@kinhdoanh');
Route::get('/khoahoc', 'App\Http\Controllers\homecontroller@khoahoc');
Route::get('/thoitrang', 'App\Http\Controllers\homecontroller@thoitrang');
Route::get('/giaoduc', 'App\Http\Controllers\homecontroller@giaoduc');
Route::get('/giaothong', 'App\Http\Controllers\homecontroller@giaothong');
Route::get('/laodongvieclam', 'App\Http\Controllers\homecontroller@laodongvieclam');
Route::get('/thegioitunhien', 'App\Http\Controllers\homecontroller@thegioitunhien');
Route::get('/cacmonthethaokhac', 'App\Http\Controllers\homecontroller@cacmonthethaokhac');

Route::get('/detail_kinhdoanh/{slug}/{id}', 'App\Http\Controllers\homecontroller@detail_kinhdoanh');
Route::get('/detail_khoahoc/{slug}/{id}', 'App\Http\Controllers\homecontroller@detail_khoahoc');
Route::get('/detail_thoitrang/{slug}/{id}', 'App\Http\Controllers\homecontroller@detail_thoitrang');
Route::get('/detail_giaoduc/{slug}/{id}', 'App\Http\Controllers\homecontroller@detail_giaoduc');
Route::get('/detail_giaothong/{slug}/{id}', 'App\Http\Controllers\homecontroller@detail_giaothong');
Route::get('/detail_laodongvieclam/{slug}/{id}', 'App\Http\Controllers\homecontroller@detail_laodongvieclam');
Route::get('/detail_thegioitunhien/{slug}/{id}', 'App\Http\Controllers\homecontroller@detail_thegioitunhien');
Route::get('/detail_cacmonthethaokhac/{slug}/{id}', 'App\Http\Controllers\homecontroller@detail_cacmonthethaokhac');


//detail world
Route::get('/detail_tulieu/{slug}/{id}', 'App\Http\Controllers\homecontroller@detail_tulieu');
Route::get('/detail_phantich/{slug}/{id}', 'App\Http\Controllers\homecontroller@detail_phantich');
Route::get('/detail_cuocsongdoday/{slug}/{id}', 'App\Http\Controllers\homecontroller@detail_cuocsongdoday');

Route::get('/24h_news/{slug}/{id}', 'App\Http\Controllers\homecontroller@tinph');
//

Route::get('/suckhoe', 'App\Http\Controllers\homecontroller@suckhoe');
Route::get('/doisong', 'App\Http\Controllers\homecontroller@doisong');
Route::get('/dulich', 'App\Http\Controllers\homecontroller@dulich');

//detail community
Route::get('/detail_suckhoe/{slug}/{id}', 'App\Http\Controllers\homecontroller@detail_suckhoe');
Route::get('/detail_doisong/{slug}/{id}', 'App\Http\Controllers\homecontroller@detail_doisong');
Route::get('/detail_dulich/{slug}/{id}', 'App\Http\Controllers\homecontroller@detail_dulich');
//
Route::get('/thoisu', 'App\Http\Controllers\homecontroller@thoisu');
Route::get('/giaitri', 'App\Http\Controllers\homecontroller@giaitri');

Route::get('/detail_thoisu/{slug}/{id}', 'App\Http\Controllers\homecontroller@detail_thoisu');
Route::get('/detail_giaitri/{slug}/{id}', 'App\Http\Controllers\homecontroller@detail_giaitri');
//

Route::get('/admin', 'App\Http\Controllers\homecontroller@trangchuadmin');
Route::post('/admin', 'App\Http\Controllers\homecontroller@posttrangchuadmin');

Route::get('/themtin1', 'App\Http\Controllers\homecontroller@themtin1');
Route::post('/themtin1', 'App\Http\Controllers\homecontroller@postthemtin1');

Route::get('/themxuhuong', 'App\Http\Controllers\homecontroller@themxuhuong');
Route::post('/themxuhuong', 'App\Http\Controllers\homecontroller@postthemxuhuong');


Route::get('/themtintuc1', 'App\Http\Controllers\homecontroller@themtintuc1');
Route::post('/themtintuc1', 'App\Http\Controllers\homecontroller@postthemtintuc1');


Route::get('/themtintuc2', 'App\Http\Controllers\homecontroller@themtintuc2');
Route::post('/themtintuc2', 'App\Http\Controllers\homecontroller@postthemtintuc2');



Route::get('/themphobiennhat', 'App\Http\Controllers\homecontroller@themphobiennhat');
Route::post('/themphobiennhat', 'App\Http\Controllers\homecontroller@postthemphobiennhat');


Route::get('/suatin1/{id}','App\Http\Controllers\homecontroller@getsuatin1');
Route::post('/suatin1/{id}','App\Http\Controllers\homecontroller@postsuatin1');
Route::get('/xoatin1/{id}','App\Http\Controllers\homecontroller@xoatin1');

Route::get('/suaxuhuong/{id}','App\Http\Controllers\homecontroller@getsuaxuhuong');
Route::post('/suaxuhuong/{id}','App\Http\Controllers\homecontroller@postsuaxuhuong');
Route::get('/xoaxuhuong/{id}','App\Http\Controllers\homecontroller@xoaxuhuong');

Route::get('/suatintuc1/{id}','App\Http\Controllers\homecontroller@getsuatintuc1');
Route::post('/suatintuc1/{id}','App\Http\Controllers\homecontroller@postsuatintuc2');
Route::get('/xoatintuc1/{id}','App\Http\Controllers\homecontroller@xoatintuc1');

Route::get('/suatintuc2/{id}','App\Http\Controllers\homecontroller@getsuatintuc2');
Route::post('/suatintuc2/{id}','App\Http\Controllers\homecontroller@postsuatintuc2');
Route::get('/xoatintuc2/{id}','App\Http\Controllers\homecontroller@xoatintuc2');





Route::get('/quanlydonhang', function () {
    return view('admin.quanlydonhang');
});

Route::get('/bangkeluong', function () {
    return view('admin.bangkeluong');
});
Route::get('/bangdieukhien', function () {
    return view('admin.bangdieukhien');
});
Route::get('/posbanhang', function () {
    return view('admin.posbanhang');
});
Route::get('/baocaodoanhthu', function () {
    return view('admin.baocaodoanhthu');
});
Route::get('/quanlynoibo', function () {
    return view('admin.quanlynoibo');
});



Route::get('/delete', 'App\Http\Controllers\homecontroller@destroy');
Route::get('/cache', 'App\Http\Controllers\homecontroller@clearCache');