<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class whitelist extends Controller
{
    public function index()
    {
        return view('whitelist');
    }

    public function whitelist_add()
    {
        return view('whitelist_add');
    }

    public function whitelist_edit()
    {
        return view('whitelist_edit');
    }
}
