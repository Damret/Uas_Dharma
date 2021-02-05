<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalogue;
class ProductController extends Controller
{
    public function index (Request $request) {
        $catalogue = Catalogue::all();
        return view('content', compact('catalogue'));
    }
    public function man (Request $request) {
        return view('man');
    }
    public function woman (Request $request) {
        return view('woman');
    }
}
