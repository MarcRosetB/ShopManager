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
        Schema::create("shops", function (Blueprint $table) {
            $table->id("shop_id");
            $table->string("shop_name", 20);
            $table->string("shop_address", 50);
            $table->unsignedBigInteger("fk_town");
            $table->foreign("fk_town")->references("town_id")->on("towns");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("shops");
    }
};
