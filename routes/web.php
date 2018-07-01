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






Route::get('/', function () {
    return view('Index');
})->name('home');
Route::get('/About', function () {
    return view('/About');
})->name('about');

Route::get('/Contact', function () {
    return view('/contact');
});
//for the user crud

Route::get('/Login', 'UserController@index');
Route::get('/Registeruser', 'UserController@create');
Route::post('/store', 'UserController@store');
Route::get('/userlist', 'UserController@show');
Route::get('/useredit/{id}', 'UserController@edit');
Route::Put('/updateuser/{id}', 'UserController@update');
Route::get('/deleteuser/{id}', 'UserController@destroy');
Route::get('/singleuser', 'UserController@single');
Route::get('/signin','UserController@signin');



//For Causes Controller



Route::get('/Causes-no-sidebar', 'CausesController@CausesNoSidebar');
Route::get('/Causes-left-sidebar', 'CausesController@CausesLeftSidebar');
Route::get('/Causes-right-sidebar', 'CausesController@CausesRightSidebar');
Route::get('/Single-causes-left', 'CausesController@SingleCausesLeft');
Route::get('/Single-causes-right', 'CausesController@SingleCausesRight');

Route::get('/DonorAcceptor', 'CausesController@DonorAcceptor');





//For Gallery Controller
Route::get('/gallery-style-one', 'GalleryController@GalleryStyleOne');
Route::get('/gallery-style-two', 'GalleryController@GalleryStyleTwo');
Route::get('/gallery-style-three', 'GalleryController@GalleryStyleThree');





// for Volunteer Controller 

Route::get('/Volunteers-3col', 'VolunteerController@Volunteers3Col');
Route::get('/Volunteers-4col', 'VolunteerController@Volunteers4Col');
Route::get('/Single-Volunteers', 'VolunteerController@SingleVolunteers');





//For Event Controller

Route::get('/events-3col', 'EventController@Events3Col');
Route::get('/events-4col', 'EventController@Events4Col');
Route::get('/events-details', 'EventController@EventsDetails');




//For Blog Controller

Route::get('/blog-no-sidebar', 'BlogController@BlogNoSidebar');
Route::get('/blog-left-sidebar', 'BlogController@BlogLeftSidebar');
Route::get('/blog-right-sidebar', 'BlogController@BlogRightSidebar');
Route::get('/blog-details-left', 'BlogController@BlogDetailsLeft');
Route::get('/blog-details-right', 'BlogController@BlogDetailsRight');
Route::get('/nutrient', 'BlogController@NutrientsDiet');

Route::get('/Vitamins', 'BlogController@Vitamin');

//For BackEnd 
Route::get('/backend', 'BackendController@index'); 
Route::get('/Register', 'BackendController@create');
Route::post('/storeuser', 'BackendController@store');
Route::get('/deleteuser/{id}', 'BackendController@destroy');
Route::get('/useredit/{id}', 'BackendController@edit');
Route::Put('/updateuser/{id}', 'BackendController@update');

//for backend blogs
Route::get('/allblog', 'BackendBlog@index');
Route::get('/addblog', 'BackendBlog@create');
Route::post('/storeblog', 'BackendBlog@store');
Route::get('/blogedit/{id}', 'BackendBlog@edit');
Route::Put('/updateblog/{id}', 'BackendBlog@update');
Route::get('/deleteblog/{id}', 'BackendBlog@destroy');

/// for the backend volunteer
Route::get('/allvolunteer', 'BackVolunteerController@index');
Route::get('/addvolunteer', 'BackVolunteerController@create');
Route::post('/storevolunteer', 'BackVolunteerController@store');
Route::get('/volunteeredit/{id}', 'BackVolunteerController@edit');
Route::Put('/updatevolunteer/{id}', 'BackVolunteerController@update');
Route::get('/deletevolunteer/{id}', 'BackVolunteerController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
