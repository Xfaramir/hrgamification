<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1507831927TimeshiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('timeshifts', function (Blueprint $table) {
            if(Schema::hasColumn('timeshifts', 'time_hours')) {
                $table->dropColumn('time_hours');
            }
            
        });
Schema::table('timeshifts', function (Blueprint $table) {
            
if (!Schema::hasColumn('timeshifts', 'time_hours')) {
                $table->time('time_hours');
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
        Schema::table('timeshifts', function (Blueprint $table) {
            $table->dropColumn('time_hours');
            
        });
Schema::table('timeshifts', function (Blueprint $table) {
                        $table->string('time_hours');
                
        });

    }
}
