<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59dfe0622bd45RelationshipsToSalaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('salaries', function(Blueprint $table) {
            if (!Schema::hasColumn('salaries', 'salary_position_id')) {
                $table->integer('salary_position_id')->unsigned()->nullable();
                $table->foreign('salary_position_id', '81354_59dfe0613293a')->references('id')->on('jobs')->onDelete('cascade');
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
        Schema::table('salaries', function(Blueprint $table) {
            
        });
    }
}
