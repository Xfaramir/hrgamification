<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1507836724LeaveperiodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('leaveperiods', function (Blueprint $table) {
            
if (!Schema::hasColumn('leaveperiods', 'leave_type')) {
                $table->string('leave_type');
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
            $table->dropColumn('leave_type');
            
        });

    }
}
