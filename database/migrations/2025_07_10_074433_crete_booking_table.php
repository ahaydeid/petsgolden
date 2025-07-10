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
    Schema::create('booking', function (Blueprint $table) {
        $table->id();

        // Customer Data
        $table->string('name');
        $table->string('wa_number');
        $table->string('email')->nullable();
        $table->string('branch');

        // Pet Data
        $table->string('pet_type');
        $table->string('race')->nullable();
        $table->string('pet_name')->nullable();

        // Type of Services
        $table->json('services'); // PostgreSQL mendukung tipe json
        $table->text('additional_request')->nullable();

        // Time & Address
        $table->date('date');
        $table->time('time');
        $table->text('address');
        $table->text('note')->nullable();

        // Total
        $table->integer('total_price');

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
