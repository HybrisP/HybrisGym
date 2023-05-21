<?php

namespace App\Http\Controllers;

use App\Mail\InfoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function homepage() {
        return view('homepage');
    }

    public function class() {
        return view('class');
    }

    public function detail($ref) {
        return view('detail', ['ref' => $ref]);
    }

    public function contact() {
        return view('contact');
    }

    public function send(Request $request) {
        $request -> validate([
            'name' => 'required|string',
            'phone' => 'numeric',
            'mail' => 'required|email',
            'message' => 'min:10'
        ]);

        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'mail' => $request->input('mail'),
            'message' => $request->message,            
        ];

        Mail::to($request->input('mail')) -> send(new InfoMail($data));
        return redirect()->route('homepage');

        dd($data);
    }
}
