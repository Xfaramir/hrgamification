<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1508260193SelfdocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('selfdocuments')) {
            Schema::create('selfdocuments', function (Blueprint $table) {
                $table->increments('id');
                $table->string('self_offerletter')->nullable();
                $table->string('self_joinletter')->nullable();
                $table->string('self_contract')->nullable();
                $table->string('self_id')->nullable();
                $table->string('self_photo')->nullable();
                
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
        Schema::dropIfExists('selfdocuments');
    }
}
