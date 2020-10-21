<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class companiesController extends Controller
{
    public function index()
    {
        $users = DB::table('companies')->paginate(10);

        return view('companies.index', ['companies' => $users]);
    }
}
