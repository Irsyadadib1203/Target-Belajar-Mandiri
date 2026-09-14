<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard')->with('products', DB::table('products')->get());
    }
    public function getProduct(Request $request)
    {
        DB::table('products')->insert([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Product created successfully.');
    }
}
