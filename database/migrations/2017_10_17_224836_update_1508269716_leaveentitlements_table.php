<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1508269716LeaveentitlementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('leaveentitlements', function (Blueprint $table) {
            if(Schema::hasColumn('leaveentitlements', 'leave_employee_id')) {
                $table->dropForeign('82748_59e65e476a07f');
                $table->dropIndex('82748_59e65e476a07f');
                $table->dropColumn('leave_employee_id');
            }
            if(Schema::hasColumn('leaveentitlements', 'leave_from')) {
                $table->dropColumn('leave_from');
            }
            if(Schema::hasColumn('leaveentitlements', 'leave_until')) {
                $table->dropColumn('leave_until');
            }
            
        });
Schema::table('leaveentitlements', function (Blueprint $table) {
            
if (!Schema::hasColumn('leaveentitlements', 'leave_from')) {
                $table->date('leave_from')->nullable();
                }
if (!Schema::hasColumn('leaveentitlements', 'leave_until')) {
                $table->date('leave_until')->nullable();
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
        Schema::table('leaveentitlements', function (Blueprint $table) {
            $table->dropColumn('leave_from');
            $table->dropColumn('leave_until');
            
        });
Schema::table('leaveentitlements', function (Blueprint $table) {
                        $table->date('leave_from')->nullable();
                $table->date('leave_until')->nullable();
                
        });

    }
}
