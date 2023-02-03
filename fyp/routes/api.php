<?php

// , 'middleware' => ['auth:sanctum']

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin'], function () {

    // Brand
    Route::get('brands', 'BrandApiController@index');
    Route::get('brands/{brand}', 'BrandApiController@show');

    // Medicines Categories
    Route::get('medicines-categories', 'MedicinesCategoriesApiController@index');
    Route::get('medicines-categories/{medicinesCategory}', 'MedicinesCategoriesApiController@show');

    // Medicines
    Route::get('medicines', 'MedicinesApiController@index');
    Route::get('medicines/{medicine}', 'MedicinesApiController@show');

    // Pharmacy
    Route::get('pharmacies', 'PharmacyApiController@index');
    Route::get('pharmacies/{pharmacy}', 'PharmacyApiController@show');
    Route::get('pharmacies/{pharmacy}/medicines', 'PharmacyApiController@medicines');
    Route::get('pharmacies/{pharmacy}/medicines-categories/{medicinesCategory}/medicines', 'PharmacyApiController@medicinesByCategory');

    // Covid Post
    Route::get('covid-posts', 'CovidPostApiController@index');
    Route::get('covid-posts/{covidPost}', 'CovidPostApiController@show');

    // Users
    Route::post('login', 'UsersApiController@login');
    Route::post('register', 'UsersApiController@store');

    // // Order
    // Route::get('user/{user}/orders', 'OrderApiController@user_order');
    // Route::get('orders/{order}', 'OrderApiController@show');
    Route::post('orders', 'OrderApiController@store');

});

