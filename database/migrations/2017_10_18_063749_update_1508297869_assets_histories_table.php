<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1508297869AssetsHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assets_histories', function (Blueprint $table) {
            if(! Schema::hasColumn('assets_histories', 'deleted_at')) {
                $table->softDeletes();
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
        Schema::table('assets_histories', function (Blueprint $table) {
            if(Schema::hasColumn('assets_histories', 'deleted_at')) {
                $table->dropColumn('deleted_at');
            }
            
        });

    }
}
