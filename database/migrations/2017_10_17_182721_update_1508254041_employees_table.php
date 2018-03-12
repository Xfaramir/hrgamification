<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1508254041EmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employees', function (Blueprint $table) {
            
if (!Schema::hasColumn('employees', 'employee_address')) {
                $table->string('employee_address');
                }
if (!Schema::hasColumn('employees', 'employee_phone')) {
                $table->integer('employee_phone')->nullable()->unsigned();
                }
if (!Schema::hasColumn('employees', 'employee_email')) {
                $table->string('employee_email');
                }
if (!Schema::hasColumn('employees', 'employee_bankaccount')) {
                $table->string('employee_bankaccount');
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
        Schema::table('employees', function (Blueprint $table) {
            $table->dropColumn('employee_address');
            $table->dropColumn('employee_phone');
            $table->dropColumn('employee_email');
            $table->dropColumn('employee_bankaccount');
            
        });

    }
}
