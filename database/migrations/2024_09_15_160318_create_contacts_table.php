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
        Schema::create("contacts", function (Blueprint $table) {
            $table->id("contact_id");
            $table->string("contact_name", 20);
            $table->char("contact_phone", 9);
            $table->string("contact_email", 25);
            $table->unsignedBigInteger("fk_customer");

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
        Schema::dropIfExists("contacts");
    }
};
