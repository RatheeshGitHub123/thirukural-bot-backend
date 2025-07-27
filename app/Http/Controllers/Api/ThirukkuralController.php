<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Thirukkural;
use Illuminate\Http\Request;

class ThirukkuralController extends Controller
{
    public function show($number)
    {
        $thirukkural = Thirukkural::where('number', $number)->first();
        if ($thirukkural) {
            return response()->json($thirukkural);
        }
        return response()->json(['message' => 'Thirukkural not found'], 404);
    }

    public function search(Request $request)
    {
        $word = trim($request->input('word'));
        $query = Thirukkural::query();

        // Exact match for numeric input
        if (is_numeric($word)) {
           $query->orWhere('number', '=', $word);
        }

        $query->orWhere('Kural', 'like', "%$word%")
          ->orWhere('Vilakam', 'like', "%$word%")
          ->orWhere('Transliteration', 'like', "%$word%");
        $thirukkurals = $query->take(50)->get();
        return response()->json($thirukkurals);
    }
}

