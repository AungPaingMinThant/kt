<?php

namespace App\Http\Controllers\Digital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CorporateInternetBankingController extends Controller
{
    public function index()
    {
        return view('corporate-internet-banking.index');
    }
}
