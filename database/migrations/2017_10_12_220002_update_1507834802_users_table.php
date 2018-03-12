<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1507834802UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            if(! Schema::hasColumn('users', 'deleted_at')) {
                $table->softDeletes();
            }
            
        });
Schema::table('users', function (Blueprint $table) {
            
if (!Schema::hasColumn('users', 'username')) {
                $table->string('username');
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('username');
            
        });
Schema::table('users', function (Blueprint $table) {
            if(Schema::hasColumn('users', 'deleted_at')) {
                $table->dropColumn('deleted_at');
            }
            
        });

    }
}
