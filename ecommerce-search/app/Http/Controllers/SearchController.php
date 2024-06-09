<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClothingItem;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->get('query');
        if (strlen($query) < 3) {
            return response()->json([]);
        }

        $items = ClothingItem::where('name', 'like', "%$query%")->get();

        return response()->json($items);
    }
}
