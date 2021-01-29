<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index (Request $request) {
        return view('content');
    }
    public function man (Request $request) {
        return view('man');
    }
    public function woman (Request $request) {
        return view('woman');
    }
}
