<?php

namespace App\Http\Controllers;

use App\Models\Sms;

class HomeController extends Controller
{
    public function index()
    {
        $sms = Sms::orderByDesc('id')->get();

        return view('home', compact('sms'));
    }
}
