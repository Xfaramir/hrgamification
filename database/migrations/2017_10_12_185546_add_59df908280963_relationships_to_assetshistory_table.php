<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59df908280963RelationshipsToAssetsHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assets_histories', function(Blueprint $table) {
            if (!Schema::hasColumn('assets_histories', 'asset_id')) {
                $table->integer('asset_id')->unsigned()->nullable();
                $table->foreign('asset_id', '81280_59df908173dc4')->references('id')->on('assets')->onDelete('cascade');
                }
                if (!Schema::hasColumn('assets_histories', 'status_id')) {
                $table->integer('status_id')->unsigned()->nullable();
                $table->foreign('status_id', '81280_59df90817a439')->references('id')->on('assets_statuses')->onDelete('cascade');
                }
                if (!Schema::hasColumn('assets_histories', 'location_id')) {
                $table->integer('location_id')->unsigned()->nullable();
                $table->foreign('location_id', '81280_59df90818083b')->references('id')->on('assets_locations')->onDelete('cascade');
                }
                if (!Schema::hasColumn('assets_histories', 'assigned_user_id')) {
                $table->integer('assigned_user_id')->unsigned()->nullable();
                $table->foreign('assigned_user_id', '81280_59df90818694e')->references('id')->on('users')->onDelete('cascade');
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
        Schema::table('assets_histories', function(Blueprint $table) {
            
        });
    }
}
