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
        Schema::create("pays", function (Blueprint $table) {
            $table->id("pay_id");
            $table->decimal("pey_amount", 5, 2);
            $table->unsignedBigInteger("fk_quote");
            $table->unsignedBigInteger("fk_pay_method");

            $table->foreign("fk_quote")->references("quote_id")->on("quotes");
            $table
                ->foreign("fk_pay_method")
                ->references("pay_method_id")
                ->on("pay_methods");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("pays");
    }
};
