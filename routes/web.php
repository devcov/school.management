<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

// Route::group(
//     [

//         'middleware' => ['guest']
//     ],
//     function () {
//         Route::get('/', function () {
//             return view('auth.login');
//         });
//     }
// );


Route::group(['middleware' => ['guest']], function () {
    Route::get('/', function () {
        return view('auth.login');
    });
});

Auth::routes();




Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth']
    ],
    function () {

        Route::get('/dashboard', 'HomeController@index')->name('dashboard');

        Route::group(['namespace' => 'Grades'], function () {
            Route::resource('grads', 'GradsController');
        });



        Route::group(['namespace' => 'Classrooms'], function () {


            Route::resource('Classrooms', 'ClassroomController');

            Route::post('delete_all', 'ClassroomController@delete_all')->name('delete_all');


            Route::post('Filter_Classes', 'ClassroomController@Filter_Classes')->name('Filter_Classes');
        });

        //==============================Sections============================

        Route::group(['namespace' => 'Sections'], function () {

            Route::resource('Sections', 'SectionsController');

            Route::get('/classes/{id}', 'SectionsController@getclasses');
        });


        //==============================parents============================

        Route::view('add_parent', 'livewire.show_Form');


        //==============================Teachers============================
        Route::group(['namespace' => 'Teachers'], function () {
            Route::resource('Teachers', 'TeacherController');
        });

          //==============================Students============================
    Route::group(['namespace' => 'Students'], function () {


        Route::resource('Students', 'StudentController');


        Route::get('/indirect', 'OnlineClasseController@indirectCreate')->name('indirect.create');
        Route::post('/indirect', 'OnlineClasseController@storeIndirect')->name('indirect.store');

        Route::resource('online_classes', 'OnlineClasseController');




        Route::resource('Promotion', 'PromotionController');

        Route::resource('Graduated', 'GraduatedController');

        Route::resource('Fees_Invoices', 'FeesInvoicesController');
        Route::resource('Fees', 'FeesController');

        Route::resource('receipt_students', 'ReceiptStudentsController');
        Route::resource('ProcessingFee', 'ProcessingFeeController');

        Route::resource('Payment_students', 'PaymentController');
        Route::resource('Attendance', 'AttendanceController');

        Route::get('download_file/{filename}', 'LibraryController@downloadAttachment')->name('downloadAttachment');
        Route::resource('library', 'LibraryController');


        Route::get('/Get_classrooms/{id}', 'StudentController@Get_classrooms');
        Route::get('/Get_Sections/{id}', 'StudentController@Get_Sections');


        Route::post('Upload_attachment', 'StudentController@Upload_attachment')->name('Upload_attachment');
        Route::get('Download_attachment/{studentsname}/{filename}', 'StudentController@Download_attachment')->name('Download_attachment');
        Route::post('Delete_attachment', 'StudentController@Delete_attachment')->name('Delete_attachment');
    });










    }


);
