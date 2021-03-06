<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59dfba18c9f0cRelationshipsToEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employees', function(Blueprint $table) {
            if (!Schema::hasColumn('employees', 'employee_email_id')) {
                $table->integer('employee_email_id')->unsigned()->nullable();
                $table->foreign('employee_email_id', '81322_59dfba17c50b3')->references('id')->on('users')->onDelete('cascade');
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
