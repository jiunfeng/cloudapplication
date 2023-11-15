<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormControllerTest extends Controller
{
    public function showForm()
    {
        return view('showform');
    }
}
