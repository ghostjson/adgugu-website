<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteManageController extends Controller
{
    public function dashboard()
    {
        if (auth()->user()->role === 'advertiser'){
            return redirect(env('app_url') . '/advertiser/dashboard');
        }else if(auth()->user()->role === 'promoter'){
            return redirect(env('app_url') . '/advertiser/promoter');
        }else if(auth()->user()->role === 'shopper'){
            return redirect(env('app_url') . '/advertiser/shopper');
        }
    }
}
