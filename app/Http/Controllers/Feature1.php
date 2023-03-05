<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\QualityWater;
use App\Models\VipCustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Feature1 extends Controller
{
    //

    public function index()
    {
        # code...
        $admin = count(Admin::all());
        $vip = count(VipCustomer::all());
        return view('fitur1', compact('admin', 'vip'));
    }
}
