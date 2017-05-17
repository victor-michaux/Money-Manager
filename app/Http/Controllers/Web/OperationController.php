<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class OperationController extends Controller
{
    public function dashboard()
    {
        return view('operations.index');
    }

    public function create()
    {
        return view('operations.create');
    }
}
