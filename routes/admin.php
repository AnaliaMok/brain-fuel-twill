<?php

// Register Twill routes here (eg. Route::module('yourModuleNameHere'))
Route::group(['prefix' => 'insights'], function () {
    Route::module('blogPosts');
});
