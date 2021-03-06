<?php

// Routes for CoursetypetypesController
Route::group(['prefix' => 'coursetypes', 'before' => 'auth'], function()
{
	Route::get('showCoursetypes', [
		'as' => 'showCoursetypes_path',
		'uses' => 'CoursetypesController@index'
		]);

	Route::get('{coursetype}/editCoursetypeInformation', [
		'as' => 'editCoursetypeInformation_path',
		'uses' => 'CoursetypesController@edit'
		]);

	Route::delete('{coursetype}/deleteCoursetype', [
		'as' => 'deleteCoursetype_path',
		'uses' => 'CoursetypesController@destroy'
		]);

	Route::patch('{coursetype}/updateCoursetype', [
		'as' => 'updateCoursetype_path',
		'uses' => 'CoursetypesController@update'
		]);

	Route::post('saveCoursetype', [
		'as' => 'saveCoursetype_path',
		'uses' => 'CoursetypesController@store'
		]);
});
