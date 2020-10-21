<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class employeesController extends Controller
{
    public function index()
    {
        $users = DB::table('employees')->paginate(10);

        return view('employees.index', ['employees' => $users]);
    }
}
}
