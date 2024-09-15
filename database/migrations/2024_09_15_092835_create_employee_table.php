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
            $table->id("EmployeeID");
            $table->string("EmployeeName", 20);
            $table->char("EmployeePhone", 9)->unique();
            $table->string("EmployeeEmail", 50)->unique();
            $table->char("EmployeeDni", 9)->unique();
            $table->string("EmployeePassword", 270);
            $table->boolean("EmployeePermissions");
            $table->unsignedBigInteger("FkShop");
            $table->unsignedBigInteger("FKDepartment");

            $table->foreign("FkShop")->references("ShopId")->on("Shops");
            $table
                ->foreign("FKDepartment")
                ->references("DepartmentId")
                ->on("Departments");
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
