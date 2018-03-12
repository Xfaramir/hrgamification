<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59eb94f2937b6RelationshipsToDisciplinarycaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('disciplinarycases', function(Blueprint $table) {
            if (!Schema::hasColumn('disciplinarycases', 'discipline_employee_id')) {
                $table->integer('discipline_employee_id')->unsigned()->nullable();
                $table->foreign('discipline_employee_id', '81366_59dfebe4617a5')->references('id')->on('employees')->onDelete('cascade');
                }
                if (!Schema::hasColumn('disciplinarycases', 'disciplinary_actions_id')) {
                $table->integer('disciplinary_actions_id')->unsigned()->nullable();
                $table->foreign('disciplinary_actions_id', '81366_59dfebe46aa82')->references('id')->on('disciplineactions')->onDelete('cascade');
                }
                if (!Schema::hasColumn('disciplinarycases', 'disciplinary_manager_id')) {
                $table->integer('disciplinary_manager_id')->unsigned()->nullable();
                $table->foreign('disciplinary_manager_id', '81366_59dfebe472898')->references('id')->on('users')->onDelete('cascade');
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
        Schema::table('disciplinarycases', function(Blueprint $table) {
            
        });
    }
}
