<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Properti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        // Get featured properties with caching (30 minute TTL)
        $featuredProperties = Cache::remember('home_featured_properties', now()->addMinutes(30), function () {
            // Get featured properties (properties marked as promo)
            $featured = Properti::where('is_promo', true)
                ->where('status', 'tersedia')
                ->latest()
                ->take(3)
                ->get();

            // If we don't have enough featured properties, get some regular ones
            if ($featured->count() < 3) {
                $regularProperties = Properti::where('status', 'tersedia')
                    ->where('is_promo', false)
                    ->latest()
                    ->take(3 - $featured->count())
                    ->get();

                $featured = $featured->concat($regularProperties);
            }

            return $featured;
        });

        // Get recent articles with caching (30 minute TTL)
        $recentArticles = Cache::remember('home_recent_articles', now()->addMinutes(30), function () {
            return Article::where('deleted_at', null)
                ->latest()
                ->take(3)
                ->get();
        });

        return view('home.index', [
            'featuredProperties' => $featuredProperties,
            'recentArticles' => $recentArticles
        ]);
    }
}
