<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = Article::latest()->paginate(8);
        return view('artikel.index', compact('artikel'));
    }

    // Menampilkan detail artikel
    public function show($id)
    {
        $artikel = Article::findOrFail($id);
        return view('artikel.show', compact('artikel'));
    }
}
