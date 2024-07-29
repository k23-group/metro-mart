<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function index () : View{
        $brands = Brand::latest()->paginate(5);

        return view('index', [
            'brands' => $brands
        ]);
    }
}
