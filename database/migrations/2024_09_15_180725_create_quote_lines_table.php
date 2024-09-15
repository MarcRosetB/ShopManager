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
        Schema::create("quote_lines", function (Blueprint $table) {
            $table->id("quote_line_id");
            $table->unsignedBigInteger("fk_quote");
            $table->unsignedBigInteger("fk_item_price");

            $table->foreign("fk_quote")->references("quote_id")->on("quotes");
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
        Schema::dropIfExists("quote_lines");
    }
};
