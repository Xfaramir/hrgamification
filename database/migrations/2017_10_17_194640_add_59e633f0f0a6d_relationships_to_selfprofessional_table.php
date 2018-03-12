<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59e633f0f0a6dRelationshipsToSelfprofessionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('selfprofessionals', function(Blueprint $table) {
            if (!Schema::hasColumn('selfprofessionals', 'self_title_id')) {
                $table->integer('self_title_id')->unsigned()->nullable();
                $table->foreign('self_title_id', '82714_59e633f0002af')->references('id')->on('jobs')->onDelete('cascade');
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
        Schema::table('selfprofessionals', function(Blueprint $table) {
            
        });
    }
}
