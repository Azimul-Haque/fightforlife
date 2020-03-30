<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/clear', ['as'=>'clear','uses'=>'IndexController@clear']);

// index routes
// index routes
Route::get('/', ['as'=>'index.index','uses'=>'IndexController@index']);
Route::get('/donate', ['as'=>'index.donate','uses'=>'IndexController@getDonate']);
Route::post('/donate/store', ['as'=>'index.donatestore','uses'=>'IndexController@storeDonateNext']);
Route::get('/donate/next/{donation_id}', ['as'=>'index.donatenext','uses'=>'IndexController@getDonateNext']);

Route::post('donate/success', 'IndexController@donateSuccessOrFailed')->name('donate.success');
Route::get('donate/failed', 'IndexController@donateSuccessOrFailed')->name('donate.failed');

Route::post('donate/cancel', 'IndexController@donateCancelledPost')->name('donate.cancel');
Route::get('donate/cancel', 'IndexController@donateCancelled')->name('donate.cancel');

Route::get('/donation/summary', ['as'=>'index.donationsummary','uses'=>'IndexController@getDonationSummary']);
Route::get('/statement', ['as'=>'index.statement','uses'=>'IndexController@getStatement']);
Route::get('/donation/affiliated', ['as'=>'index.affiliated','uses'=>'IndexController@getAffiliated']);
Route::get('/donation/distribution', ['as'=>'index.distribution','uses'=>'IndexController@getDistribution']);
Route::get('/gallery', ['as'=>'index.gallery','uses'=>'IndexController@getGallery']);

Route::get('/faq', ['as'=>'index.faq','uses'=>'IndexController@getFaq']);
Route::get('/members', ['as'=>'index.members','uses'=>'IndexController@getMembers']);
Route::get('/contact', ['as'=>'index.contact','uses'=>'IndexController@getContact']);
Route::post('/contact/form/message/store', ['as'=>'index.storeformmessage','uses'=>'IndexController@storeFormMessage']);
Route::get('/application', ['as'=>'index.application','uses'=>'IndexController@getApplication']);
Route::get('/member/login', ['as'=>'index.login','uses'=>'IndexController@getLogin']);
Route::get('/member/profile/{unique_key}', ['as'=>'index.profile','uses'=>'IndexController@getProfile']);
Route::post('/member/application/store', ['as'=>'index.storeapplication','uses'=>'IndexController@storeApplication']);

Route::get('/corona/awareness', ['as'=>'corona.awareness','uses'=>'IndexController@coronaAwareness']);
// index routes
// index routes


Route::auth();

// dashboard routes
// dashboard routes
Route::resource('users','UserController');
Route::get('/dashboard', ['as'=>'dashboard.index','uses'=>'DashboardController@index']);

Route::get('/dashboard/donations', ['as'=>'dashboard.donations','uses'=>'DashboardController@getDonations']);
Route::get('/dashboard/contact/messages', ['as'=>'dashboard.contactmessages','uses'=>'DashboardController@getContactMessage']);
Route::get('/dashboard/partners', ['as'=>'dashboard.partners','uses'=>'DashboardController@getPartners']);
Route::post('/dashboard/partner/store', ['as'=>'dashboard.partner.create','uses'=>'DashboardController@storePartner']);
Route::put('/dashboard/partner/{id}/update', ['as'=>'dashboard.partner.update','uses'=>'DashboardController@updatePartner']);

Route::get('/dashboard/members', ['as'=>'dashboard.members','uses'=>'DashboardController@getMembers']);
Route::delete('/dashboard/deletemember/{id}', ['as'=>'dashboard.deletemember','uses'=>'DashboardController@deleteMember']);
Route::get('/dashboard/applications', ['as'=>'dashboard.applications','uses'=>'DashboardController@getApplications']);
Route::patch('/dashboard/applications/{id}/approve', ['as'=>'dashboard.approveapplication','uses'=>'DashboardController@approveApplication']);
Route::delete('/dashboard/application/{id}', ['as'=>'dashboard.deleteapplication','uses'=>'DashboardController@deleteApplication']);
// dashboard routes
// dashboard routes