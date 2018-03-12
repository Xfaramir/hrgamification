<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1507835687LeaveperiodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('leaveperiods', function (Blueprint $table) {
            if(Schema::hasColumn('leaveperiods', 'leave_document')) {
                $table->dropColumn('leave_document');
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
                        
        });

    }
}
