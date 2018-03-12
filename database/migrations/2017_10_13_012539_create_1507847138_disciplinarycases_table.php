<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1507847138DisciplinarycasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('disciplinarycases')) {
            Schema::create('disciplinarycases', function (Blueprint $table) {
                $table->increments('id');
                $table->string('discipline_case')->nullable();
                $table->text('disciplinary_description')->nullable();
                $table->date('disciplinary_date')->nullable();
                
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
        Schema::dropIfExists('disciplinarycases');
    }
}
