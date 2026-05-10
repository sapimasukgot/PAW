<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Item;

abstract class Controller
{
    public function index()
    {
        return response()->json(Item::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string']);
        
        $item = Item::create(['name' => $request->name]);
        return response()->json(['message' => 'Item berhasil dibuat', 'item' => $item], 201);
    }

    public function update(Request $request, $id)
    {
        $item = Item::find($id);
        if (!$item) return response()->json(['message' => 'Item tidak ditemukan'], 404);

        $request->validate(['name' => 'required|string']);
        
        $item->update(['name' => $request->name]);
        return response()->json(['message' => 'Item berhasil diupdate', 'item' => $item], 200);
    }

    public function destroy($id)
    {
        $item = Item::find($id);
        if (!$item) return response()->json(['message' => 'Item tidak ditemukan'], 404);

        $item->delete();
        return response()->json(['message' => 'Item berhasil dihapus'], 200);
    }
}
