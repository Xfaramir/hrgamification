<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1507836870LeaveperiodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('leaveperiods', function (Blueprint $table) {
            if(Schema::hasColumn('leaveperiods', 'leave_period')) {
                $table->dropColumn('leave_period');
            }
            
        });
Schema::table('leaveperiods', function (Blueprint $table) {
            
if (!Schema::hasColumn('leaveperiods', 'leave_from')) {
                $table->datetime('leave_from')->nullable();
                }
if (!Schema::hasColumn('leaveperiods', 'leave_until')) {
                $table->datetime('leave_until')->nullable();
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
        Schema::table('leaveperiods', function (Blueprint $table) {
            $table->dropColumn('leave_from');
            $table->dropColumn('leave_until');
            
        });
Schema::table('leaveperiods', function (Blueprint $table) {
                        $table->datetime('leave_period')->nullable();
                
        });

    }
}
