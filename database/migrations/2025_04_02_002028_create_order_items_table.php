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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade'); // مفتاح أجنبي لجدول الطلبات
            $table->foreignId('item_id')->constrained('items')->onDelete('cascade'); // مفتاح أجنبي لجدول العناصر
            $table->integer('quantity'); // الكمية
            $table->decimal('price', 8, 2); // السعر
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
