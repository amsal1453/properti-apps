<?php

namespace App\Http\Controllers;

use App\Models\Properti;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Get featured properties (properties marked as promo)
        $featuredProperties = Properti::where('is_promo', true)
            ->where('status', 'tersedia')
            ->latest()
            ->take(3)
            ->get();

        // If we don't have enough featured properties, get some regular ones
        if ($featuredProperties->count() < 3) {
            $regularProperties = Properti::where('status', 'tersedia')
                ->where('is_promo', false)
                ->latest()
                ->take(3 - $featuredProperties->count())
                ->get();

            $featuredProperties = $featuredProperties->concat($regularProperties);
        }

        return view('home.index', [
            'featuredProperties' => $featuredProperties
        ]);
    }
}
