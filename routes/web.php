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
Auth::routes();

Route::group(['middleware' => 'auth'], function (){

    /********* TABLEAU DE BORD ****************/
    Route::get('/', 'DashboardController@index');
    Route::get('/dashboard', 'DashboardController@index');

    /********* UTILISATEUR ****************/
    Route::resource('/user', 'UserController');

    /********* ROLE ****************/
    Route::resource('/role', 'RoleController');
    Route::resource('rendez_vous','controller_rendez_vous');
Route::resource('horaire','controller_horaire');
Route::resource('consult','consult_controller');
Route::resource('index_examents','controllerindex');
Route::resource('salle','controller_salle');
Route::resource('lit','controller_lit');
Route::resource('agent','controlleragent');
Route::resource('service','servicecontroller');
Route::resource('type_agent','controllerstypeagent');
Route::resource('specialiste','controllerspecialiste');
Route::resource('patient','controllerpatient');
Route::resource('consultation','controllerconsulation');
Route::resource('consultations','controllerconsultations');
Route::resource('type_exament','controller_type_examen');
Route::resource('profile','profile');
Route::resource('exament','controller_exament');
Route::resource('ajout_resultat','ajout_resultat');
Route::resource('ajout_produit','controller_produit');
Route::resource('jours','controller_jours_semaine');
Route::resource('analyse','controller_analyse');
//Route::resource('ordonance','ajout_ordonance');
Route::resource('detaille','ajout_detaille');
Route::resource('resultat','controller_resultat');
Route::resource('consultation_ordonance','controller_consult_ordonnance');
Route::resource('rapport_medical','controller_consult_rapport_medical');
Route::resource('Auth','RegisterController');
Route::resource('home','HomeController');


Route::get('/home', 'HomeController@index')->name('home');
Route::GET('/reset','ResetPasswordController@reset')->name('reset');

Route::get('/ordonnance/{id}','controllerconsultations@ordonnance')->name('ordonnance');

Route::post('/storeOrdonnance/{id}','controllerconsultations@storeOrdonnance')->name('storeOrdonnance');
Route::get('/createOrdonnance/{id}','controllerconsultations@createOrdonnance')->name('createOrdonnance');

Route::get('/ordonnace/{id}','controllerconsulation@ordonnance')->name('ordonnance');

Route::post('/storeOrdonnance/{id}','controllerconsulation@storeOrdonnance')->name('storeOrdonnance');

Route::get('/createOrdonnance/{id}','controllerconsulation@createOrdonnance')->name('createOrdonnance');
Route::get('/Exament/{id}','controller_exament@Exament')->name('Exament');

Route::POST('/storeExament/{id}','controller_exament@storeExament')->name('storeExament');

Route::get('/createExament/{id}','controller_exament@createExament')->name('createExament');

Route::get('/hospitalisation/{id}','consult_controller@hospitalisation')->name('hospitalisation');

Route::POST('/storehospitalisation/{id}','consult_controller@storehospitalisation')->name('storehospitalisation');

Route::get('/createhospitalisation/{id}','consult_controller@createhospitalisation')->name('createhospitalisation');


Route::get('/ordonance/{id}','ajout_ordonance@ordonance')->name('ordonance');

Route::POST('/storeordonance/{id}','ajout_ordonance@storeordonance')->name('storeordonance');

Route::get('/createordonance/{id}','ajout_ordonance@createordonance')->name('createordonance');
Route::get('/resultats/{id}','controller_resultat@resultats')->name('resultats');

Route::POST('/storeResultat/{id}','controller_resultat@storeResultat')->name('storeResultat');

Route::get('/createResultat/{id}','controller_resultat@createResultat')->name('createResultat');
Route::get('send-mail ','MailSend@MailSend')->name('send-mail');

});





