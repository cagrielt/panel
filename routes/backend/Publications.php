<?php

// News Management
Route::group(['namespace' => 'Publications'], function () {
    Route::resource('publications', 'PublicationsController', ['except' => ['show']]);

    //For DataTables
    Route::post('publications/get', 'PublicationsTableController')->name('publications.get');
});
