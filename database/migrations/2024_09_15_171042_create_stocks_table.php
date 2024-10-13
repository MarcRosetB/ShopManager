<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("stocks", function (Blueprint $table) {
            $table->id("stock_id");
            $table->unsignedBigInteger("fk_item_price");
            $table->boolean("stock_avaible");
            $table->boolean("stock_order");
            $table->boolean("stock_delivery");

            $table
                ->foreign("fk_item_price")
                ->references("item_price_id")
                ->on("items_price");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("stocks");
    }
};
