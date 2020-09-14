<?php

Route::get('/', function () {
    return view('layout/master');
});

Route::get('silver', function () {
    return view('courses/course-silver');
});

Route::get('gold', function () {
    return view('courses/course-gold');
});
Route::get('diamond', function () {
    return view('courses/course-diamond');
});
Route::get('star', function () {
    return view('courses/course-star');
});

Route::get('courses', function () {
    return view('courses');
});
Route::get('events', function () {
    return view('events');
});

Route::get('trainers', function () {
    return view('trainers');
});

Route::get('about', function () {
    return view('about');
});

Route::get('form', function () {
    return view('form');
});
Route::get('contact', function () {
    return view('contact');
});

Route::get('afi', function () {
    return view('biodata.biodata_afi');
});

Route::get('weny', function () {
    return view('biodata.biodata_weny');
});

Route::get('sigit', function () {
    return view('biodata.biodata_sigit');
});

Route::get('email','SendMailController@index');
Route::post('email/send','SendMailController@send');

// Route::get('/contact', 'ContactUsFormController@createForm');
