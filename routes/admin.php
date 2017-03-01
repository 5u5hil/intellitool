<?php

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
Route::group(['namespace' => 'Admin'], function () {
    Route::get('/', 'DashboardController@index')->name('admin.dashboard');

    Route::get('/login', function () {
        return 'login';
    });

    Route::group(['prefix' => 'client'], function () {
        Route::get('/', 'ClientController@index')->name('admin.client.list');
        Route::get('/add', 'ClientController@add')->name('admin.client.add');
    });

    Route::group(['prefix' => 'proposal'], function () {
        Route::get('/', 'ProposalController@index')->name('admin.proposal.list');
        Route::get('/add', 'ClientController@add')->name('admin.proposal.add');
    });

    Route::group(['prefix' => 'project'], function () {
        Route::get('/', 'ProjectController@index')->name('admin.project.list');
        Route::get('/add', 'ProjectController@add')->name('admin.project.add');
    });

    Route::group(['prefix' => 'schedule-plan'], function () {
        Route::get('/', 'SchedulePlanController@index')->name('admin.schedule.plan.list');
        Route::get('/add', 'SchedulePlanController@add')->name('admin.schedule.plan.add');
    });

    Route::group(['prefix' => 'schedule'], function () {
        Route::get('/', 'ScheduleController@index')->name('admin.schedule.list');
    });

    Route::group(['prefix' => 'role'], function () {
        Route::get('/', 'RoleController@index')->name('admin.roles.list');
    });

    Route::group(['prefix' => 'employee-management'], function () {
        Route::group(['prefix' => 'role'], function () {
            Route::get('/', 'EmpRolesController@index')->name('admin.employee.role.list');
            Route::get('/add-edit', 'EmpRolesController@addEdit')->name('admin.employee.role.add.edit');
            Route::post('/save-update', 'EmpRolesController@saveUpdate')->name('admin.employee.role.save.update');
        });
         
    });
});

