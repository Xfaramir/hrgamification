<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Drop59e0355b7805159e0355b75343EmployeeLeaveperiodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('employee_leaveperiod');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(! Schema::hasTable('employee_leaveperiod')) {
            Schema::create('employee_leaveperiod', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('employee_id')->unsigned()->nullable();
            $table->foreign('employee_id', 'fk_p_81322_81330_leaveper_59e0347e02360')->references('id')->on('employees');
                $table->integer('leaveperiod_id')->unsigned()->nullable();
            $table->foreign('leaveperiod_id', 'fk_p_81330_81322_employee_59e0347e02bef')->references('id')->on('leaveperiods');
                
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }
}
