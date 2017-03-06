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
        Route::get('/add', 'ProposalController@add')->name('admin.proposal.add');
    });

    Route::group(['prefix' => 'project'], function () {
        Route::get('/', 'ProjectController@index')->name('admin.project.list');
        Route::get('/add', 'ProjectController@add')->name('admin.project.add');
        Route::get('/edit', 'ProjectController@edit')->name('admin.project.edit');
    });

    Route::group(['prefix' => 'schedule-plan'], function () {
        Route::get('/', 'SchedulePlanController@index')->name('admin.schedule.plan.list');
        Route::get('/add', 'SchedulePlanController@add')->name('admin.schedule.plan.add');
    });

    Route::group(['prefix' => 'schedule'], function () {
        Route::get('/', 'ScheduleController@index')->name('admin.schedule.list');
    });

    Route::group(['prefix' => 'designation-level'], function() {
        Route::get('/', 'DesignationLevelController@index')->name('admin.designation.level.list');
        Route::get('/add/edit', 'DesignationLevelController@add')->name('admin.designation.level.add/edit');
        Route::post('/save/update', 'DesignationLevelController@save')->name('admin.designation.level.save/update');
    });

    Route::group(['prefix' => 'designation'], function () {
        Route::get('/', 'DesignationController@index')->name('admin.designation.list');
        Route::get('/add/edit', 'DesignationController@addEdit')->name('admin.designation.add/edit');
        Route::post('/save/update', 'DesignationController@saveUpdate')->name('admin.designation.save/update');
    });

    Route::group(['prefix' => 'employee'], function () {
        Route::get('/', 'EmployeeController@index')->name('admin.employee.list');
        Route::get('/add/edit', 'EmployeeController@addEdit')->name('admin.employee.add/edit');
        Route::post('/save/update', 'EmployeeController@saveUpdate')->name('admin.employee.save/update');
    });
    Route::group(['prefix' => 'shift'], function () {
        Route::get('/', 'ShiftController@index')->name('admin.shift.list');
        Route::get('/add/edit', 'ShiftController@addEdit')->name('admin.shift.add/edit');
        Route::post('/save/update', 'ShiftController@saveUpdate')->name('admin.shift.save/update');
    });

    Route::group(['prefix' => 'employee-management'], function () {
        Route::group(['prefix' => 'role'], function () {
            
        });
    });
});

