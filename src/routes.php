<?php

Route::group(['namespace' => 'dayscript\laravelZohoCrm\Controllers'], function()
{

    Route::get('zoho', ['uses'=> 'ZohoCrmController@index'])->name('zoho');


    Route::get('zoho/org', ['uses' => 'ZohoCrmController@getOrg'])->name('');
    Route::get('zoho/org/{module}', ['uses' => 'ZohoCrmController@getModule'])->name('');
    Route::get('zoho/org/{module}/add', ['uses' => 'ZohoCrmController@addModuleRecord'])->name('');
    Route::get('zoho/org/{module}/{entity_id}/view', ['uses' => 'ZohoCrmController@getModuleRecord'])->name('');
    Route::get('zoho/org/{module}/{entity_id}/update', ['uses' => 'ZohoCrmController@updateModuleRecord'])->name('');
    Route::get('zoho/org/{module}/{entity_id}/delete', ['uses' => 'ZohoCrmController@deleteModuleRecord'])->name('');

    Route::get('zoho/modules', ['uses' => 'ZohoCrmModulesController@index'])->name('zoho.modules');
    Route::get('zoho/modules/{module}/edit', ['uses' => 'ZohoCrmModulesController@edit'])->name('zoho.modules.edit');
    Route::get('zoho/modules/{module}/create', ['uses' => 'ZohoCrmModulesController@create'])->name('zoho.modules.create');
    Route::post('zoho/modules/{module}/store', ['uses' => 'ZohoCrmModulesController@store'])->name('zoho.modules.store');
    Route::post('zoho/modules/{module}/update', ['uses' => 'ZohoCrmModulesController@update'])->name('zoho.modules.update');
    Route::post('zoho/modules/{module}/delete', ['uses' => 'ZohoCrmModulesController@delete'])->name('zoho.modules.delete');

    Route::get('zoho/fields', ['uses' => 'ZohoCrmFieldsController@index'])->name('zoho.fields');
    Route::get('zoho/fields/{field}/edit', ['uses' => 'ZohoCrmFieldsController@edit'])->name('zoho.fields.edit');
    Route::get('zoho/fields/{field}/create', ['uses' => 'ZohoCrmFieldsController@create'])->name('zoho.fields.create');
    Route::post('zoho/fields/{field}/store', ['uses' => 'ZohoCrmFieldsController@store'])->name('zoho.fields.store');
    Route::post('zoho/fields/{field}/update', ['uses' => 'ZohoCrmFieldsController@update'])->name('zoho.fields.update');
    Route::post('zoho/fields/{field}/delete', ['uses' => 'ZohoCrmFieldsController@delete'])->name('zoho.fields.delete');

    Route::get('zoho/types', ['uses' => 'ZohoCrmTypesController@index'])->name('zoho.types');
    Route::get('zoho/types/{field}/edit', ['uses' => 'ZohoCrmTypesController@edit'])->name('zoho.types.edit');
    Route::get('zoho/types/{field}/create', ['uses' => 'ZohoCrmTypesController@create'])->name('zoho.types.create');
    Route::post('zoho/types/{field}/store', ['uses' => 'ZohoCrmTypesController@store'])->name('zoho.types.store');
    Route::post('zoho/types/{field}/update', ['uses' => 'ZohoCrmTypesController@update'])->name('zoho.types.update');
    Route::post('zoho/types/{field}/delete', ['uses' => 'ZohoCrmTypesController@delete'])->name('zoho.types.delete');

    Route::get('zoho/login', ['uses' => 'ZohoCrmController@login'])->name('zoho.login');
    Route::get('zoho/leads', ['uses' => 'ZohoCrmController@leads'])->name('zoho.leads');

});
