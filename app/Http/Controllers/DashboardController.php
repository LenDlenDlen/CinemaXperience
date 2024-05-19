<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showAdminDashboard(){
        return view('admin.adminDashboard');
    }

    public function showProfileDashboard(){
        return view('users.profileDashboard');
    }
}
