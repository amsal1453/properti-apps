<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ArtikelController extends Controller
{
    public function index(Request $request)
    {
        $kategori = $request->kategori;
        $search = $request->search;
        $cacheKey = 'articles_page_' . $request->page . '_kategori_' . $kategori . '_search_' . $search;

        $artikel = Cache::remember($cacheKey, now()->addHours(1), function () use ($kategori, $search) {
            $query = Article::query();
            
            // Apply category filter if provided
            if ($kategori && $kategori != 'Semua Kategori') {
                $query->where('kategori', $kategori);
            }
            
            // Apply search filter if provided
            if ($search) {
                $query->where(function($q) use ($search) {
                    $q->where('judul', 'like', "%{$search}%")
                      ->orWhere('konten', 'like', "%{$search}%")
                      ->orWhere('excerpt', 'like', "%{$search}%");
                });
            }
            
            return $query->latest()->paginate(9);
        });

        // Get all available categories for the filter dropdown
        $categories = Cache::remember('article_categories', now()->addDay(), function() {
            return Article::select('kategori')
                ->distinct()
                ->pluck('kategori')
                ->toArray();
        });

        return view('artikel.index', compact('artikel', 'categories', 'kategori', 'search'));
    }

    // Menampilkan detail artikel
    public function show($slug)
    {
        $cacheKey = 'article_' . $slug;

        $artikel = Cache::remember($cacheKey, now()->addHours(1), function () use ($slug) {
            return Article::where('slug', $slug)->firstOrFail();
        });

        return view('artikel.show', compact('artikel'));
    }
}
