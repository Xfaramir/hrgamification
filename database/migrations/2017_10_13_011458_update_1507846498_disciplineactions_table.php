<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1507846498DisciplineactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('disciplineactions', function (Blueprint $table) {
            
if (!Schema::hasColumn('disciplineactions', 'discipline_description')) {
                $table->text('discipline_description');
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
        Schema::table('disciplineactions', function (Blueprint $table) {
            $table->dropColumn('discipline_description');
            
        });

    }
}
