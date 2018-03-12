<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1508290602EmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employees', function (Blueprint $table) {
            if(Schema::hasColumn('employees', 'employee_phone')) {
                $table->dropColumn('employee_phone');
            }
            
        });
Schema::table('employees', function (Blueprint $table) {
            
if (!Schema::hasColumn('employees', 'employee_phone')) {
                $table->string('employee_phone');
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
            $table->dropColumn('employee_phone');
            
        });
Schema::table('employees', function (Blueprint $table) {
                        $table->integer('employee_phone')->nullable()->unsigned();
                
        });

    }
}
