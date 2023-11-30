<?php

namespace App\Http\Controllers;

use App\Models\Sms;
use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function delete(Sms $delete)
    {
        $delete->delete();

        return redirect()->back();
    }

    public function viewPost()
    {
        return view('newPost');
    }

    public function newPost(Request $request)
    {
        $request->validate([
            'text' => 'required|string|max:250',
            'title' => 'required|string',
        ]);

        Sms::create([
            'text' => $request->input('text'),
            'title' => $request->input('title'),
        ]);

        return redirect('home');
    }
}
