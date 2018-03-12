<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59e65d65adc6eRelationshipsToLeaveentitlementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('leaveentitlements', function(Blueprint $table) {
            if (!Schema::hasColumn('leaveentitlements', 'leave_type_id')) {
                $table->integer('leave_type_id')->unsigned()->nullable();
                $table->foreign('leave_type_id', '82748_59e65d647ee02')->references('id')->on('leaveperiods')->onDelete('cascade');
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
        Schema::table('leaveentitlements', function(Blueprint $table) {
            
        });
    }
}
