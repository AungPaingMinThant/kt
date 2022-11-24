<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Activity;
use DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/superl0g1n');
    }
}