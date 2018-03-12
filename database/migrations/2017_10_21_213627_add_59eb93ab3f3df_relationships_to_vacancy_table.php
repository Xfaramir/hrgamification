<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59eb93ab3f3dfRelationshipsToVacancyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vacancies', function(Blueprint $table) {
            if (!Schema::hasColumn('vacancies', 'vacancy_title_id')) {
                $table->integer('vacancy_title_id')->unsigned()->nullable();
                $table->foreign('vacancy_title_id', '81355_59dfe20723dfb')->references('id')->on('jobs')->onDelete('cascade');
                }
                if (!Schema::hasColumn('vacancies', 'vacancy_manager_id')) {
                $table->integer('vacancy_manager_id')->unsigned()->nullable();
                $table->foreign('vacancy_manager_id', '81355_59dfe2072b364')->references('id')->on('employees')->onDelete('cascade');
                }
                if (!Schema::hasColumn('vacancies', 'vacancy_location_id')) {
                $table->integer('vacancy_location_id')->unsigned()->nullable();
                $table->foreign('vacancy_location_id', '81355_59dfe207327d8')->references('id')->on('nationalities')->onDelete('cascade');
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
        Schema::table('vacancies', function(Blueprint $table) {
            
        });
    }
}
