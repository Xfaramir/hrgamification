<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1507845305CandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('candidates')) {
            Schema::create('candidates', function (Blueprint $table) {
                $table->increments('id');
                $table->string('candidate_name')->nullable();
                $table->string('candidate_firstname')->nullable();
                $table->string('candidate_secondname')->nullable();
                $table->string('candidate_email')->nullable();
                $table->integer('candidate_phone')->nullable();
                $table->string('candidate_facebook')->nullable();
                $table->string('candidate_linkein')->nullable();
                $table->string('candidate_notes')->nullable();
                $table->date('candidate_date')->nullable();
                $table->string('candidate_photo')->nullable();
                
                $table->timestamps();
                $table->softDeletes();

                $table->index(['deleted_at']);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
}
