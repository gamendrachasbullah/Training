<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('courses/course-silver', function () {
    return view('courses/course-silver');
});
Route::get('courses/course-gold', function () {
    return view('courses/course-gold');
});
Route::get('courses/course-diamond', function () {
    return view('courses/course-diamond');
});
Route::get('courses/course-star', function () {
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
