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
        Schema::create('pawnshops', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('arrahnu_type');
            $table->string('arrahnu_name');
            $table->integer('margin');
            $table->string('loan_duration');
            $table->string('safekeep_rate1');
            $table->string('safekeep_rate2');
            $table->string('safekeep_rate3');
            $table->string('agent_name');
            $table->string('agent_contact_num');
            $table->string('sun');
            $table->string('mon');
            $table->string('tue');
            $table->string('wed');
            $table->string('thu');
            $table->string('fri');
            $table->string('sat');
            $table->string('email');
            $table->string('hotline');
            $table->string('address');
            $table->string('coordinate');
            $table->foreignId('user_id');
            $table->foreignId('safekeep_rate_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pawnshops');
    }
};
