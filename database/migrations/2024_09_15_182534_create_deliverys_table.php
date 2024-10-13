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
        Schema::create("deliverys", function (Blueprint $table) {
            $table->id("delivery_id");
            $table->date("delivery_date");
            $table->unsignedBigInteger("fk_order");

            $table->foreign("fk_order")->references("order_id")->on("orders");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("deliverys");
    }
};
