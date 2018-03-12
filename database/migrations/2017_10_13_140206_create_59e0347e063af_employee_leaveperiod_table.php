<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create59e0347e063afEmployeeLeaveperiodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('employee_leaveperiod')) {
            Schema::create('employee_leaveperiod', function (Blueprint $table) {
                $table->integer('employee_id')->unsigned()->nullable();
                $table->foreign('employee_id', 'fk_p_81322_81330_leaveper_59e0347e0648c')->references('id')->on('employees')->onDelete('cascade');
                $table->integer('leaveperiod_id')->unsigned()->nullable();
                $table->foreign('leaveperiod_id', 'fk_p_81330_81322_employee_59e0347e0650d')->references('id')->on('leaveperiods')->onDelete('cascade');
                
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_leaveperiod');
    }
}
