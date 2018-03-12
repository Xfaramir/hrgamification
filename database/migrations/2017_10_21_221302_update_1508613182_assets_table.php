<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1508613182AssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assets', function (Blueprint $table) {
            if(! Schema::hasColumn('assets', 'deleted_at')) {
                $table->softDeletes();
            }
            
        });
Schema::table('assets', function (Blueprint $table) {
            
if (!Schema::hasColumn('assets', 'warranty')) {
                $table->date('warranty')->nullable();
                }
if (!Schema::hasColumn('assets', 'depreciacion')) {
                $table->string('depreciacion');
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
        Schema::table('assets', function (Blueprint $table) {
            $table->dropColumn('warranty');
            $table->dropColumn('depreciacion');
            
        });
Schema::table('assets', function (Blueprint $table) {
            if(Schema::hasColumn('assets', 'deleted_at')) {
                $table->dropColumn('deleted_at');
            }
            
        });

    }
}
