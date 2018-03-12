<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1508258798SelfprofessionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('selfprofessionals')) {
            Schema::create('selfprofessionals', function (Blueprint $table) {
                $table->increments('id');
                $table->date('self_start')->nullable();
                $table->date('self_end')->nullable();
                $table->string('self_protitle')->nullable();
                $table->text('self_comment')->nullable();
                
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
        Schema::dropIfExists('selfprofessionals');
    }
}
