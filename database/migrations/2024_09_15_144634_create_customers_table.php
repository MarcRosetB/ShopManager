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
        Schema::create("customers", function (Blueprint $table) {
            $table->id("customer_id");
            $table->string("customer_name", 50);
            $table->string("customer_address", 50);
            $table->unsignedBigInteger("fk_town");
            $table->char("customer_cif", 9);
            $table->string("customer_email", 25)->unique();
            $table->char("customer_phone", 9)->unique();

            $table->foreign("fk_town")->references("town_id")->on("towns");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("customers");
    }
};
