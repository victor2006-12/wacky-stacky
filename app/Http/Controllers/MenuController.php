<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;

class MenuController extends Controller
{
    public function index()
    {
        $menuItems = MenuItem::all()->groupBy('category');
        return view('menu', compact('menuItems'));
    }

   
}

