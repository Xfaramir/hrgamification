<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Drop5a84e3d05ee37StripeTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('stripe_transactions');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(! Schema::hasTable('stripe_transactions')) {
            Schema::create('stripe_transactions', function (Blueprint $table) {
                $table->increments('id');
                $table->decimal('amount', 15, 2)->nullable();
                
                $table->timestamps();
                
            });
        }
    }
}
