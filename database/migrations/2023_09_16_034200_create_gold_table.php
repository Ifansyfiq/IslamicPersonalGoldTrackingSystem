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
            $table->enum('gold_purity', ['10', '14', '18', '22', '24']);
            $table->integer('weight');
            $table->string('buy_shop');
            $table->enum('status', ['Buy', 'Sell', 'Hold', 'Gift', 'Pawn', 'Renew Pawn', 'Other']);
            $table->float('buy_price');
            $table->float('sell_price');
            $table->integer('spread');
            $table->text('user_id');
            $table->text('goldtype_id');

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
