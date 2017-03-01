<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use  Illuminate\Support\Facades\Schema;
class EntrustSetupTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    
    public function up()
    {
        Schema::defaultStringLength(191); 
        // Create table for storing roles
        Schema::create('emp_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // Create table for associating roles to users (Many-to-Many)
        Schema::create('emp_role_user', function (Blueprint $table) {
            $table->integer('employee_id')->unsigned();
            $table->integer('emp_role_id')->unsigned();

            $table->foreign('employee_id')->references('id')->on('employee')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('emp_role_id')->references('id')->on('emp_roles')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['employee_id', 'emp_role_id']);
        });

        // Create table for storing permissions
        Schema::create('emp_permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // Create table for associating permissions to roles (Many-to-Many)
        Schema::create('emp_permission_role', function (Blueprint $table) {
            $table->integer('emp_permission_id')->unsigned();
            $table->integer('emp_role_id')->unsigned();

            $table->foreign('emp_permission_id')->references('id')->on('emp_permissions')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('emp_role_id')->references('id')->on('emp_roles')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['emp_permission_id', 'emp_role_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('emp_permission_role');
        Schema::drop('emp_permissions');
        Schema::drop('emp_role_user');
        Schema::drop('emp_roles');
    }
}
