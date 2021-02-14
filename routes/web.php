<?php


use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|/
*/


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

  
Route::get('/dashboard', function () {
    return view('admin.index');
    })->name('dashboard');
  
Auth::routes();

/* Departement */ 

Route::resource('/dashboard/departement','DepartementController');

/* Condidat */

Route::resource('/dashboard/condidat','CondidatController');

/* affectation */

Route::get('/dashboard/affectation','AffectationexController@index')->name('Affectationex.index');

Route::post('/dashboard/affectation','AffectationexController@store')->name('Affectationex.store');

/* Examen */

Route::resource('/dashboard/examen','ExamenController');

/* Question */

Route::resource('/dashboard/question','QuestionController');


Route::resource('/dashboard/utilisateur', 'UtilisateurController');



Route::post('/sendContact','HomeController@sendContact');

Route::get('/about', function () {
    return view('layouts.about');
})->name('about');

Route::get('/course', function () {
    return view('course');
})->name('course');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/faculties', function () {
    return view('faculties');
})->name('faculties');




Route::group(['prefix' => 'admin','middleware' => ['admin-role'] ], function () {


        Route::get('/lancerExamen', function () {
            return view('admin.lancer_examen');
            })->name('lancerExamen');
                     
    

        Route::get('/ajouterreponse', function () {
                return view('admin.ajouter_reponse');
                })->name('ajouterreponse');
                   
        Route::get('/ajouterOffre', function () {
            return view('admin.ajouter_offre');
            })->name('ajouterOffre');
                       
        Route::get('/ajouterReponse', function () {
            return view('admin.ajouter_reponse');
            })->name('ajouterReponse');

            
        Route::get('/entreprise', function () {
                return view('admin.entreprise');
                })->name('entreprise');
                   
        Route::get('/offre', function () {
                    return view('admin.offre');
                    })->name('offre');

        Route::get('/analytique', function () {
            return view('admin.analytique');
                        })->name('analytique');


                
         Route::get('/conculter_resultat', function () {
                    return view('admin.conculter_resultat');
                })->name('conculter_resultat');
                  

            });