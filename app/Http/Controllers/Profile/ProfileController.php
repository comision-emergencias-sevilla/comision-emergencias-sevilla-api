<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    function logout() {
        Auth::guard('web')->logout();

        return response()->json([], Response::HTTP_NO_CONTENT, []);
    }
}
