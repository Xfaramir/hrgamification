<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Drop59e65e441957e59e65e4417b5fEmployeeLeaveentitlementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('employee_leaveentitlement');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(! Schema::hasTable('employee_leaveentitlement')) {
            Schema::create('employee_leaveentitlement', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('employee_id')->unsigned()->nullable();
            $table->foreign('employee_id', 'fk_p_81322_82748_leaveent_59e65d6471591')->references('id')->on('employees');
                $table->integer('leaveentitlement_id')->unsigned()->nullable();
            $table->foreign('leaveentitlement_id', 'fk_p_82748_81322_employee_59e65d6472180')->references('id')->on('leaveentitlements');
                
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }
}
