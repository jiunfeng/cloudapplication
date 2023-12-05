<?php

namespace App\Http\Controllers\Front\Qa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Qacontroller extends Controller
{
    public function list()
    {
        return view("front.qa.list");
    }
}
