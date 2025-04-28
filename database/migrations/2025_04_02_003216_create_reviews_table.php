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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // من الذي قام بالتقييم
            $table->foreignId('item_id')->constrained('items')->onDelete('cascade'); // العنصر الذي تم تقييمه (مثلاً: وجبة)
            $table->integer('rating')->default(0); // التقييم (رقم من 1 إلى 5 أو أي قيمة أخرى)
            $table->text('review')->nullable(); // تعليق أو ملاحظات على التقييم
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
