<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteManageController extends Controller
{
    public function dashboard()
    {
        if (auth()->user()->role === 'advertiser'){
            return redirect()->route('advertiser.dashboard');
        }else if(auth()->user()->role === 'promoter'){
            return redirect()->route('promoter.dashboard');
        }else if(auth()->user()->role === 'shopper'){
            return redirect()->route('shopper.dashboard');
        }
    }
}
