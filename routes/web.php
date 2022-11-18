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

Route::get('/', function () {
    return view('index',[
        "title" => "Home",
    ]);
});


Route::get('/charts-apexcharts', function () {
    return view('charts-apexcharts',[
        "title" => "charts-apexcharts",
    ]);
});

Route::get('/charts-chartjs', function () {
    return view('charts-chartjs',[
        "title" => "charts-chartjs",
    ]);
});

Route::get('/charts-echarts', function () {
    return view('charts-echarts',[
        "title" => "charts-echarts",
    ]);
});

Route::get('/components-accordion', function () {
    return view('components-accordion',[
        "title" => "components-accordion",
    ]);
});

Route::get('/components-alerts', function () {
    return view('components-alerts',[
        "title" => "components-alerts",
    ]);
});

Route::get('/components-badges', function () {
    return view('components-badges',[
        "title" => "components-badges",
    ]);
});

Route::get('/components-breadcrumbs', function () {
    return view('components-breadcrumbs',[
        "title" => "components-breadcrumbs",
    ]);
});

Route::get('/components-buttons', function () {
    return view('components-buttons',[
        "title" => "components-buttons",
    ]);
});;

Route::get('/components-cards', function () {
    return view('components-cards',[
        "title" => "components-cards",
    ]);
});

Route::get('/components-carousel', function () {
    return view('components-carousel',[
        "title" => "components-carousel",
    ]);
});

Route::get('/components-list-group', function () {
    return view('components-list-group',[
        "title" => "components-list-group",
    ]);
});

Route::get('/components-modal', function () {
    return view('components-modal',[
        "title" => "components-modal",
    ]);
});

Route::get('/components-pagination', function () {
    return view('components-pagination',[
        "title" => "components-pagination",
    ]);
});

Route::get('/components-progress', function () {
    return view('components-progress',[
        "title" => "components-progress",
    ]);
});

Route::get('/components-spinners', function () {
    return view('components-spinners',[
        "title" => "components-spinners",
    ]);
});

Route::get('/components-tabs', function () {
    return view('components-tabs',[
        "title" => "components-tabs",
    ]);
});

Route::get('/components-tooltips', function () {
    return view('components-tooltips',[
        "title" => "components-tooltips",
    ]);
});

Route::get('/forms-editors', function () {
    return view('forms-editors',[
        "title" => "forms-editors",
    ]);
});

Route::get('/forms-elements', function () {
    return view('forms-elements',[
        "title" => "forms-elements",
    ]);
});

Route::get('/forms-layouts', function () {
    return view('forms-layouts',[
        "title" => "forms-layouts",
    ]);
});

Route::get('/forms-validation', function () {
    return view('forms-validation',[
        "title" => "forms-validation",
    ]);
});

Route::get('/icons-bootstrap', function () {
    return view('icons-bootstrap',[
        "title" => "icons-bootstrap",
    ]);
});

Route::get('/icons-boxicons', function () {
    return view('icons-boxicons',[
        "title" => "icons-boxicons",
    ]);
});

Route::get('/icons-remix', function () {
    return view('icons-remix',[
        "title" => "icons-remix",
    ]);
});

Route::get('/pages-blank', function () {
    return view('pages-blank',[
        "title" => "pages-blank",
    ]);
});

Route::get('/pages-contact', function () {
    return view('pages-contact',[
        "title" => "pages-contact",
    ]);
});

Route::get('/pages-error-404', function () {
    return view('pages-error-404',[
        "title" => "pages-error-404",
    ]);
});

Route::get('/pages-faq', function () {
    return view('pages-faq',[
        "title" => "pages-faq",
    ]);
});

Route::get('/pages-login', function () {
    return view('pages-login',[
        "title" => "pages-login",
    ]);
});

Route::get('/pages-register', function () {
    return view('pages-register',[
        "title" => "pages-register",
    ]);
});

Route::get('/tables-data', function () {
    return view('tables-data',[
        "title" => "tables-data",
    ]);
});

Route::get('/tables-general', function () {
    return view('tables-general',[
        "title" => "tables-general",
    ]);
});

Route::get('/users-profile', function () {
    return view('users-profile',[
        "title" => "users-profile",
    ]);
});