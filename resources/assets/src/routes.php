<?php

Route::group(['namespace' => 'dayscript\laravelZohoCrm\Controllers'], function()
{

    Route::get('zoho', ['uses'=> 'ZohoCrmController@index']);


    Route::get('zoho/org', ['uses' => 'ZohoCrmController@getOrg']);
    Route::get('zoho/org/{module}', ['uses' => 'ZohoCrmController@getModule']);
    Route::get('zoho/org/{module}/add', ['uses' => 'ZohoCrmController@addModuleRecord']);
    Route::get('zoho/org/{module}/{entity_id}/view', ['uses' => 'ZohoCrmController@getModuleRecord']);
    Route::get('zoho/org/{module}/{entity_id}/update', ['uses' => 'ZohoCrmController@updateModuleRecord']);
    Route::get('zoho/org/{module}/{entity_id}/delete', ['uses' => 'ZohoCrmController@deleteModuleRecord']);




    Route::get('zoho/login', ['uses' => 'ZohoCrmController@login']);
    Route::get('zoho/leads', ['uses' => 'ZohoCrmController@leads']);

});
