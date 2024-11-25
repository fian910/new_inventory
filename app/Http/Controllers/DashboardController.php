<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    $itemCount = Inventory::count();
    $categoryCount = Inventory::distinct('kategori')->count('kategori');
    $stockCount = Inventory::sum('stok');
    $items = Inventory::all(); // Ambil semua item

    return view('dashboard', compact('itemCount', 'categoryCount', 'stockCount', 'items'));
}
}