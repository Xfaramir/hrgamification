<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1507824380RolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('roles', function (Blueprint $table) {
            if(! Schema::hasColumn('roles', 'deleted_at')) {
                $table->softDeletes();
            }
            
        });
Schema::table('roles', function (Blueprint $table) {
            
if (!Schema::hasColumn('roles', 'roletype')) {
                $table->string('roletype');
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
        Schema::table('roles', function (Blueprint $table) {
            $table->dropColumn('roletype');
            
        });
Schema::table('roles', function (Blueprint $table) {
            if(Schema::hasColumn('roles', 'deleted_at')) {
                $table->dropColumn('deleted_at');
            }
            
        });

    }
}
