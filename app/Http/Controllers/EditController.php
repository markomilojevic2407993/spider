<?php

namespace App\Http\Controllers;

use App\Models\Sms;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function update(Request $request, $id)
    {
        $poruka = Sms::where(['id' => $id])->first();
        if ($poruka === null) {
            exit('Poruka ne postoji');
        }

        return view('update', compact('poruka'));
    }

    public function saveUpdate(Request $request, $id)
    {
        $poruka = Sms::where(['id' => $id])->first();

        $poruka->text = $request->input('text');
        $poruka->title = $request->input('title');
        $poruka->save();

        return redirect()->route('home');
    }
}
