<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function indexFirst()
    {
        //echo ("laravel index");
        return view("front.home");
    }
}
