
<?php
use Illuminate\Http\Request;
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
    return view('welcome');
});
Route::get('home', function() {
  return view('home');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('check-connect',function(){
 if(DB::connection()->getDatabaseName())
 {
 return "Yes! successfully connected to the DB: " . DB::connection()->getDatabaseName();
 }else{
 return 'Connection False !!';
 }

});
Route::get('studentForm', function(){
  return view('studentForm');
});
Route::post('studentForm','Controller@insertStudent');

Route::get('corseForm', function(){
  return view('corseForm');
});
Route::post('corseForm','Controller@insertCorse');

Route::get('teacherForm', function(){
  return view('teacherForm');
});

Route::get('corseSelect', function(){
  return view('corseSelect');
});
Route::post('teacherForm','Controller@insertTeacher');

Route::get('corseSelect','Controller@selectStd');


Route::post('corseSelect','Controller@insertStudy');

Route::get('classRecord',function(){
  return view('classRecord');
});
Route::get('classRecord','Controller@selectStdClass');
Route::post('classRecord','Controller@insertClassRecord');


//Route::post('classRecord','Controller@insertClass');

Route::get('reportForm', function(){
  return view('reportForm');
});
//Route::get('reportForm','Controller@selectReport');
Route::post('reportForm','Controller@insStdReport');
Route::get('reportForm','Controller@insStdReport');
