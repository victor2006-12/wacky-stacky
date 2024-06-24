<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\MenuItem;

class AdminMenuController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Menu()
    {
        $menuItems = MenuItem::all()->groupBy('category');
        return view('admin.menu', compact('menuItems'));
    }
}
