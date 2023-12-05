<?php

namespace App\Http\Controllers\Admin\Qa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Qa\Qa;

class AdminQaController extends Controller
{
    public function qaList()
    {
        $list = (new Qa())->list();
        return view("admin.qa.list", compact("list"));
    }
}
