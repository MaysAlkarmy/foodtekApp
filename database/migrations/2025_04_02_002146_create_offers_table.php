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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // اسم العرض
            $table->text('description'); // وصف العرض
            $table->decimal('discount_percentage', 5, 2); // نسبة الخصم
            $table->date('start_date'); // تاريخ بدء العرض
            $table->date('end_date'); // تاريخ نهاية العرض
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
