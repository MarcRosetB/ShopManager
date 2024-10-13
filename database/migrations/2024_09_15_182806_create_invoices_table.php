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
        Schema::create("invoices", function (Blueprint $table) {
            $table->id("invoice_id");
            $table->date("invoice_date");
            $table->unsignedBigInteger("fk_delivery");

            $table
                ->foreign("fk_delivery")
                ->references("delivery_id")
                ->on("deliverys");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("invoices");
    }
};
