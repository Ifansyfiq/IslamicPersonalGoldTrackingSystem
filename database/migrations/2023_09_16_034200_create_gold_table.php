<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gold', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('gold_name');
            $table->string('gold_purity');
            $table->integer('weight');
            $table->string('buy_shop');
            $table->enum('status', ['Own(Keep)', 'Own(Wear)', 'Pawn', 'Renew Pawn', 'Sell', 'Lost', 'Other']);
            $table->float('buy_price');
            $table->float('sell_price');
            $table->integer('spread');
            $table->foreignId('user_id');
            $table->foreignId('goldtype_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gold');
    }
};
