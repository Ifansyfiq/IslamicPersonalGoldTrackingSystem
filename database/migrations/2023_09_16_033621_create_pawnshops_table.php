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
            $table->string('agent_name');
            $table->string('agent_contact_num');
            $table->string('email');
            $table->string('hotline');
            $table->string('address');
            $table->string('coordinate');
            $table->enum('operation_time', ['9.00 am - 5.00 pm', '9.00 am - 6.00 pm', '9.00 am - 7.00 pm', '9.00 am - 8.00 pm', '9.00 am - 9.00 pm']);

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
