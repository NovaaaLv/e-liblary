<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function Dashboard()
  {
    return view('admin.dashboard');
  }
}
