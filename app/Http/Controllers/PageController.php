<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
