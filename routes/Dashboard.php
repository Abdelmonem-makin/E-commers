<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\SectionController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Support\Facades\Auth;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {
    Route::group(['prefix' => 'Dashboard', 'middleware' => ['auth']], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('home');
        Route::get('/section-chaneg-Status', [SectionController::class, 'section_chaneg_Status'])->name('section_chaneg_Status');
        Route::resource('Section', SectionController::class)->except(['show']);


    });
});
