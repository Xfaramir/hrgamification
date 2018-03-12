<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59dfece97cddfRelationshipsToDisciplineactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('disciplineactions', function(Blueprint $table) {
            if (!Schema::hasColumn('disciplineactions', 'discipline_status_id')) {
                $table->integer('discipline_status_id')->unsigned()->nullable();
                $table->foreign('discipline_status_id', '81364_59dfece81c3db')->references('id')->on('statuses')->onDelete('cascade');
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
        Schema::table('disciplineactions', function(Blueprint $table) {
            
        });
    }
}
