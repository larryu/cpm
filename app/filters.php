<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	//
});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth', function()
{
	if (Auth::guest())
	{
		if (Request::ajax())
		{
			return Response::make('Unauthorized', 401);
		}
		else
		{
			return Redirect::guest('login_path');
		}
	}
});


Route::filter('auth.basic', function()
{
	return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('dashboard_path');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});

/*
|
| Entrust Route protection
|
*/
Entrust::routeNeedsRoleOrPermission('users*',array('Admin'),array('edit_user'),Redirect::back(),false);
Entrust::routeNeedsRoleOrPermission('roles*',array('Admin'),array('edit_role'),Redirect::back(),false);
Entrust::routeNeedsRoleOrPermission('permissions*',array('Admin'),array('edit_permissions'),Redirect::back(),false);
Entrust::routeNeedsRoleOrPermission('plannings/room_preference*',array('Admin'),array('view_room_preferences'),Redirect::back(),false);
Entrust::routeNeedsRoleOrPermission('plannings/*/update_status',array('Admin'),array('change_planning_status'),Redirect::back(),false);

/** announcement filter */
Entrust::routeNeedsRoleOrPermission('announcements*',array('Admin'),array('add_announcement', 'edit_announcement', 'delete_announcement'),Redirect::back(),false);

/** appointedday filter */
Entrust::routeNeedsRoleOrPermission('appointeddays*',array('Admin'),array('add_appointedday', 'edit_appointedday', 'delete_appointedday'),Redirect::back(),false);

/** coursetype filter */
Entrust::routeNeedsRoleOrPermission('coursetypes*',array('Admin'),array('add_coursetype', 'edit_coursetype', 'delete_coursetype'),Redirect::back(),false);

/** course filter */
Entrust::routeNeedsRoleOrPermission('courses*',array('Admin'),array('add_course', 'edit_course', 'delete_course'),Redirect::back(),false);

/** degreecourse filter */
Entrust::routeNeedsRoleOrPermission('degreecourses*',array('Admin'),array('add_degreecourse', 'edit_degreecourse', 'delete_degreecourse'),Redirect::back(),false);

/** degree filter */
Entrust::routeNeedsRoleOrPermission('degrees*',array('Admin'),array('add_degree', 'edit_degree', 'delete_degree'),Redirect::back(),false);

/** department filter */
Entrust::routeNeedsRoleOrPermission('departments*',array('Admin'),array('add_department', 'edit_department', 'delete_department'),Redirect::back(),false);