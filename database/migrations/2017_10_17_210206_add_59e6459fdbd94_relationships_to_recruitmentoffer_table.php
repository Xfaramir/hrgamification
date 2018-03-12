<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59e6459fdbd94RelationshipsToRecruitmentofferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recruitmentoffers', function(Blueprint $table) {
            if (!Schema::hasColumn('recruitmentoffers', 'hiring_offer_id')) {
                $table->integer('hiring_offer_id')->unsigned()->nullable();
                $table->foreign('hiring_offer_id', '82729_59e6459e5e3ba')->references('id')->on('vacancies')->onDelete('cascade');
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
        Schema::table('recruitmentoffers', function(Blueprint $table) {
            
        });
    }
}
