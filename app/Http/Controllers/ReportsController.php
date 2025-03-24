<?php

namespace App\Http\Controllers;
use App\Models\Sales;


class ReportsController extends Controller
{
    public function index()
    {   
        $sales = Sales::get();
        return view('AdminDashboard.Reports')->with('sales', $sales);
    }

}
