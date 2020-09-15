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


Route::get('afi', function () {
    return view('biodata.biodata_afi');
});

Route::get('weny', function () {
    return view('biodata.biodata_weny');
});

Route::get('sigit', function () {
    return view('biodata.biodata_sigit');
});

Route::get('/contact','ContactController@contact');

Route::post('/contact','ContactController@contactSubmit')->name('contact.submit');

// Route::get('/contact', 'ContactUsFormController@createForm');
