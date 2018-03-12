<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1508609643CalendarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('calendars')) {
            Schema::create('calendars', function (Blueprint $table) {
                $table->increments('id');
                $table->string('calendar_event')->nullable();
                $table->datetime('calendar_time')->nullable();
                $table->string('calendar_location')->nullable();
                $table->text('calendar_description')->nullable();
                
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
        Schema::dropIfExists('calendars');
    }
}
