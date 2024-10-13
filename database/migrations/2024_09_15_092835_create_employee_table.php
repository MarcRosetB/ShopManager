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
        Schema::create("employees", function (Blueprint $table) {
            $table->id("employee_id");
            $table->string("employee_name", 20);
            $table->char("employee_phone", 9)->unique();
            $table->string("employee_email", 50)->unique();
            $table->char("employee_dni", 9)->unique();
            $table->string("employee_password", 270);
            $table->boolean("employee_permissions");
            $table->unsignedBigInteger("fk_shop");
            $table->unsignedBigInteger("fk_department");

            $table->foreign("fk_shop")->references("shop_id")->on("shops");
            $table
                ->foreign("fk_department")
                ->references("department_id")
                ->on("departments");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("employees");
    }
};
