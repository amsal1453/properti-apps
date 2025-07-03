<?php

namespace App\Http\Controllers;

use App\Models\Properti;
use Illuminate\Http\Request;

class PropertiController extends Controller
{
    public function index(Request $request)
    {
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

        $properties = $query->paginate(6);

        return view('properti.index', [
            'properties' => $properties
        ]);
    }

    public function show($slug)
    {
        $property = Properti::where('slug', $slug)->firstOrFail();

        return view('properti.show', [
            'property' => $property
        ]);
    }
}
