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
        Schema::create("delivery_addresses", function (Blueprint $table) {
            $table->id("delivery_address_id");
            $table->string("delivery_address", 100);
            $table->unsignedBigInteger("fk_town");
            $table->unsignedBigInteger("fk_customer");

            $table->foreign("fk_town")->references("town_id")->on("towns");
            $table
                ->foreign("fk_customer")
                ->references("customer_id")
                ->on("customers");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("delivery_addresses");
    }
};
