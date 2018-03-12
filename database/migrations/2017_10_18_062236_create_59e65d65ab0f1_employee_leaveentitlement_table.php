<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create59e65d65ab0f1EmployeeLeaveentitlementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('employee_leaveentitlement')) {
            Schema::create('employee_leaveentitlement', function (Blueprint $table) {
                $table->integer('employee_id')->unsigned()->nullable();
                $table->foreign('employee_id', 'fk_p_81322_82748_leaveent_59e65d65ab1e4')->references('id')->on('employees')->onDelete('cascade');
                $table->integer('leaveentitlement_id')->unsigned()->nullable();
                $table->foreign('leaveentitlement_id', 'fk_p_82748_81322_employee_59e65d65ab269')->references('id')->on('leaveentitlements')->onDelete('cascade');
                
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
        Schema::dropIfExists('employee_leaveentitlement');
    }
}
