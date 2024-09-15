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
        Schema::create("quotes", function (Blueprint $table) {
            $table->id("quote_id");
            $table->date("quote_date");
            $table->decimal("quote_tax_distance");
            $table->unsignedBigInteger("fk_customer");
            $table->unsignedBigInteger("fk_address_delivery");
            $table->unsignedBigInteger("fk_employee");

            $table
                ->foreign("fk_customer")
                ->references("customer_id")
                ->on("customers");
            $table
                ->foreign("fk_address_delivery")
                ->references("address_delivery_id")
                ->on("addresses_delivery");
            $table
                ->foreign("fk_employee")
                ->references("employee_id")
                ->on("employees");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("quotes");
    }
};
