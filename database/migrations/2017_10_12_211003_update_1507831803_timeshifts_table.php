<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1507831803TimeshiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('timeshifts', function (Blueprint $table) {
            
if (!Schema::hasColumn('timeshifts', 'time_from')) {
                $table->time('time_from');
                }
if (!Schema::hasColumn('timeshifts', 'time_to')) {
                $table->time('time_to');
                }
if (!Schema::hasColumn('timeshifts', 'time_hours')) {
                $table->string('time_hours');
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
            $table->dropColumn('time_from');
            $table->dropColumn('time_to');
            $table->dropColumn('time_hours');
            
        });

    }
}
