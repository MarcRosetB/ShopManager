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
        Schema::create("items", function (Blueprint $table) {
            $table->id("items_id");
            $table->string("item_name", 20)->unique();
            $table->string("item_size", 15)->nullable();
            $table->unsignedBigInteger("fk_item_type");

            $table
                ->foreign("fk_item_type")
                ->references("item_type_id")
                ->on("item_types");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("items");
    }
};
