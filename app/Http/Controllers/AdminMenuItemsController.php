<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;

class AdminMenuItemsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $menuItems = MenuItem::all()->groupBy('category');
        return view('admin.menu', compact('menuItems'));
    }

    public function edit($id)
    {
        $menuItem = MenuItem::find($id);
        if (!$menuItem) {
            return redirect()->back()->with('error', 'Menu item not found');
        }
        return view('admin.MenuItems', compact('menuItem'));
    }

    public function update(Request $request, $id)
    {
        $menuItem = MenuItem::find($id);
        if (!$menuItem) {
            return redirect()->back()->with('error', 'Menu item not found');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        $menuItem->name = $request->name;
        $menuItem->price = $request->price;
        $menuItem->save();

        return redirect()->route('Menu', $menuItem->id)->with('success', 'Menu item updated successfully');
    }
}
