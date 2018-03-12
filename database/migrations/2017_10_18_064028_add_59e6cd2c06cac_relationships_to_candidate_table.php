<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59e6cd2c06cacRelationshipsToCandidateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('candidates', function(Blueprint $table) {
            if (!Schema::hasColumn('candidates', 'candidate_vacancy_id')) {
                $table->integer('candidate_vacancy_id')->unsigned()->nullable();
                $table->foreign('candidate_vacancy_id', '81356_59dfe4baa6aa1')->references('id')->on('vacancies')->onDelete('cascade');
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
        Schema::table('candidates', function(Blueprint $table) {
            
        });
    }
}
