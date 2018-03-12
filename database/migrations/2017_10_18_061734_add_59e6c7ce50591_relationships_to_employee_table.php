<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59e6c7ce50591RelationshipsToEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employees', function(Blueprint $table) {
            if (!Schema::hasColumn('employees', 'employee_salary_id')) {
                $table->integer('employee_salary_id')->unsigned()->nullable();
                $table->foreign('employee_salary_id', '81322_59dfeefc7bfad')->references('id')->on('salaries')->onDelete('cascade');
                }
                if (!Schema::hasColumn('employees', 'employee_username_id')) {
                $table->integer('employee_username_id')->unsigned()->nullable();
                $table->foreign('employee_username_id', '81322_59dfc0905c0e5')->references('id')->on('users')->onDelete('cascade');
                }
                if (!Schema::hasColumn('employees', 'employee_title_id')) {
                $table->integer('employee_title_id')->unsigned()->nullable();
                $table->foreign('employee_title_id', '81322_59dfeef9e71b1')->references('id')->on('jobs')->onDelete('cascade');
                }
                if (!Schema::hasColumn('employees', 'employee_timeshift_id')) {
                $table->integer('employee_timeshift_id')->unsigned()->nullable();
                $table->foreign('employee_timeshift_id', '81322_59dfeefd5ea59')->references('id')->on('timeshifts')->onDelete('cascade');
                }
                if (!Schema::hasColumn('employees', 'employee_costcenter_id')) {
                $table->integer('employee_costcenter_id')->unsigned()->nullable();
                $table->foreign('employee_costcenter_id', '81322_59dfeef91e50d')->references('id')->on('costcenters')->onDelete('cascade');
                }
                if (!Schema::hasColumn('employees', 'employee_skills_id')) {
                $table->integer('employee_skills_id')->unsigned()->nullable();
                $table->foreign('employee_skills_id', '81322_59dfeefabb63d')->references('id')->on('skills')->onDelete('cascade');
                }
                if (!Schema::hasColumn('employees', 'employee_education_id')) {
                $table->integer('employee_education_id')->unsigned()->nullable();
                $table->foreign('employee_education_id', '81322_59dfefef86819')->references('id')->on('education')->onDelete('cascade');
                }
                if (!Schema::hasColumn('employees', 'employee_nationality_id')) {
                $table->integer('employee_nationality_id')->unsigned()->nullable();
                $table->foreign('employee_nationality_id', '81322_59dfeefb8b4d6')->references('id')->on('nationalities')->onDelete('cascade');
                }
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employees', function(Blueprint $table) {
            
        });
    }
}
