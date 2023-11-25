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

            $table->enum('arrahnu_type', ['YaPEIM', 'Maidam', 'Agro Bank']);
            $table->string('arrahnu_name');
            $table->integer('margin');
            $table->enum('loan_duration', ['1-2', '4-5', '1-6']);
            $table->string('safekeep_rate1');
            $table->string('safekeep_rate2');
            $table->string('safekeep_rate3');
            $table->string('agent_name');
            $table->string('agent_contact_num');
            $table->string('sun_start');
            $table->string('sun_end');
            $table->time('mon_start');
            $table->time('mon_end');
            $table->time('tue_start');
            $table->time('tue_end');
            $table->time('wed_start');
            $table->time('wed_end');
            $table->time('thu_start');
            $table->time('thu_end');
            $table->string('fri_start');
            $table->string('fri_end');
            $table->string('sat_start');
            $table->string('sat_end');
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
