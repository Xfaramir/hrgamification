<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1507848169EmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employees', function (Blueprint $table) {
            if(Schema::hasColumn('employees', 'employee_costcenter_id')) {
                $table->dropForeign('81322_59dfeef91e50d');
                $table->dropIndex('81322_59dfeef91e50d');
                $table->dropColumn('employee_costcenter_id');
            }
            if(Schema::hasColumn('employees', 'employee_title_id')) {
                $table->dropForeign('81322_59dfeef9e71b1');
                $table->dropIndex('81322_59dfeef9e71b1');
                $table->dropColumn('employee_title_id');
            }
            if(Schema::hasColumn('employees', 'employee_skills_id')) {
                $table->dropForeign('81322_59dfeefabb63d');
                $table->dropIndex('81322_59dfeefabb63d');
                $table->dropColumn('employee_skills_id');
            }
            if(Schema::hasColumn('employees', 'employee_nationality_id')) {
                $table->dropForeign('81322_59dfeefb8b4d6');
                $table->dropIndex('81322_59dfeefb8b4d6');
                $table->dropColumn('employee_nationality_id');
            }
            if(Schema::hasColumn('employees', 'employee_salary_id')) {
                $table->dropForeign('81322_59dfeefc7bfad');
                $table->dropIndex('81322_59dfeefc7bfad');
                $table->dropColumn('employee_salary_id');
            }
            if(Schema::hasColumn('employees', 'employee_timeshift_id')) {
                $table->dropForeign('81322_59dfeefd5ea59');
                $table->dropIndex('81322_59dfeefd5ea59');
                $table->dropColumn('employee_timeshift_id');
            }
            if(Schema::hasColumn('employees', 'employee_status_id')) {
                $table->dropForeign('81322_59dfeefe2e279');
                $table->dropIndex('81322_59dfeefe2e279');
                $table->dropColumn('employee_status_id');
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
