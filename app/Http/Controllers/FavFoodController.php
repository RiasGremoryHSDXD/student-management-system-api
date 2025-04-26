<?php

namespace App\Http\Controllers;

use App\Models\FavFood;
use Illuminate\Http\Request;

class FavFoodController extends Controller
{
    public function index()
    {
        $favFood = FavFood::all();
        return response()->json($favFood);
    }
}
