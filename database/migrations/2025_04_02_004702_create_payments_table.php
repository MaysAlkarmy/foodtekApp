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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string("location");
            $table->string("promo_code");
            $table->enum("payment_way", ["cash", "card"]);
            $table->enum('card_type',['visa', 'master_card']);
            $table->string("total_amount");
            $table->enum('status', ['pending', 'completed', 'failed', 'refunded'])
            ->default('pending');
            $table->integer('transaction_id'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
