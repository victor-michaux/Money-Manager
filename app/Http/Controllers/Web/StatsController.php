<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

class StatsController extends \App\Http\Controllers\Controller
{
    public function dashboard()
    {
      return view('stats.index');
    }
}
