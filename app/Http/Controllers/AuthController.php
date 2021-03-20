<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function logout()
    {
        try {
            auth()->logout();
        } catch (\Exception $exception) {
            Log::error($exception);
        } finally {
            return redirect()->route('home');
        }
    }
}
