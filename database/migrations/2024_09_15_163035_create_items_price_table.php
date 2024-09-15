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
        Schema::create("items_price", function (Blueprint $table) {
            $table->id("item_price_id");
            $table->unsignedBigInteger("fk_item");
            $table->unsignedBigInteger("fk_colour");
            $table->decimal("item_price", 5, 2);

            $table->foreign("fk_item")->references("item_id")->on("items");
            $table
                ->foreign("fk_colour")
                ->references("colour_id")
                ->on("colours");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("items_price");
    }
};
