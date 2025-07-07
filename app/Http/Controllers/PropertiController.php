<?php

namespace App\Http\Controllers;

use App\Models\Properti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PropertiController extends Controller
{
    public function index(Request $request)
    {
        // Create a cache key based on all request parameters and current page
        $cacheKey = 'properties_' . md5(json_encode([
            'search' => $request->search,
            'tipe_properti' => $request->tipe_properti,
            'status' => $request->status,
            'sort' => $request->sort,
            'page' => $request->page ?? 1
        ]));

        // Cache for 2 hours
        $properties = Cache::remember($cacheKey, now()->addHours(2), function () use ($request) {
            $query = Properti::query();

            // Apply filters if they exist
            if ($request->has('search')) {
                $search = $request->search;
                $query->where(function ($q) use ($search) {
                    $q->where('nama_properti', 'like', "%{$search}%")
                        ->orWhere('lokasi', 'like', "%{$search}%")
                        ->orWhere('deskripsi', 'like', "%{$search}%");
                });
            }

            if ($request->has('tipe_properti') && $request->tipe_properti != 'all') {
                $query->where('tipe_properti', $request->tipe_properti);
            }

            if ($request->has('status') && $request->status != 'all') {
                $query->where('status', $request->status);
            }

            // Sort properties
            $sort = $request->sort ?? 'newest';
            switch ($sort) {
                case 'price_asc':
                    $query->orderBy('harga', 'asc');
                    break;
                case 'price_desc':
                    $query->orderBy('harga', 'desc');
                    break;
                case 'newest':
                default:
                    $query->latest();
                    break;
            }

            return $query->paginate(6);
        });

        return view('properti.index', [
            'properties' => $properties
        ]);
    }

    public function show($slug)
    {
        // Cache property details for 1 day
        $property = Cache::remember('property_' . $slug, now()->addDay(), function () use ($slug) {
            return Properti::where('slug', $slug)->firstOrFail();
        });

        return view('properti.show', [
            'property' => $property
        ]);
    }

    public function search(Request $request)
    {
        $query = Properti::query();

        // Filter by property type
        if ($request->filled('tipe_properti')) {
            $query->where('tipe_properti', $request->tipe_properti);
        }

        // Filter by location (specifically for Banda Aceh and Aceh Besar)
        if ($request->filled('lokasi')) {
            $query->where('lokasi', 'LIKE', '%' . $request->lokasi . '%');
        }

        // Filter by price range
        if ($request->filled('harga')) {
            switch ($request->harga) {
                case '<1':
                    $query->where('harga', '<', 1000)
                        ->where('satuan_harga', 'juta');
                    break;
                case '1-5':
                    $query->where(function ($q) {
                        $q->where(function ($sub) {
                            $sub->where('harga', '>=', 1000)
                                ->where('harga', '<=', 5000)
                                ->where('satuan_harga', 'juta');
                        })->orWhere(function ($sub) {
                            $sub->where('harga', '>=', 1)
                                ->where('harga', '<=', 5)
                                ->where('satuan_harga', 'miliar');
                        });
                    });
                    break;
                case '5-10':
                    $query->where(function ($q) {
                        $q->where(function ($sub) {
                            $sub->where('harga', '>=', 5000)
                                ->where('harga', '<=', 10000)
                                ->where('satuan_harga', 'juta');
                        })->orWhere(function ($sub) {
                            $sub->where('harga', '>=', 5)
                                ->where('harga', '<=', 10)
                                ->where('satuan_harga', 'miliar');
                        });
                    });
                    break;
                case '>10':
                    $query->where(function ($q) {
                        $q->where(function ($sub) {
                            $sub->where('harga', '>', 10000)
                                ->where('satuan_harga', 'juta');
                        })->orWhere(function ($sub) {
                            $sub->where('harga', '>', 10)
                                ->where('satuan_harga', 'miliar');
                        });
                    });
                    break;
            }
        }

        $properties = $query->where('status', 'tersedia')
            ->latest()
            ->paginate(9);

        return view('properti.index', [
            'properties' => $properties,
            'filters' => $request->all()
        ]);
    }
}
