<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Department;

class DepartmentController extends Controller
{
    public function getAllDepartments()
    {
        return Department::all();
    }
}
