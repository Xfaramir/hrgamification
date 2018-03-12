<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1507836048EmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employees', function (Blueprint $table) {
            if(Schema::hasColumn('employees', 'employee_email_id')) {
                $table->dropForeign('81322_59dfba17c50b3');
                $table->dropIndex('81322_59dfba17c50b3');
                $table->dropColumn('employee_email_id');
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
                        
        });

    }
}
