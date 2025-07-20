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
        $word = $request->input('word');
        $thirukkurals = Thirukkural::where('Kural', 'like', "%$word%")
            ->orWhere('Vilakam', 'like', "%$word%")
            ->orWhere('number', 'like', "%$word%")
            ->orWhere('Transliteration', 'like', "%$word%")
            ->get();
        return response()->json($thirukkurals);
    }
}

