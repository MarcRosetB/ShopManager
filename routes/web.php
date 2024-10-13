<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get("/", function () {
    return view("welcome");
});

Route::get("/employees/create", [EmployeeController::class, "create"])->name(
    "employees.create"
);
Route::post("/employees/store", [EmployeeController::class, "store"])->name(
    "employees.store"
);
