<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        return Berita::all();
    }
    public function store(Request $request)
    {
        return Berita::create($request->all());
    }
    public function show(Berita $berita)
    {
        return $berita;
    }
    public function update(Request $request, Berita $berita)
    {
        $berita->update($request->all());
        return $berita;
    }
    public function destroy(Berita $berita)
    {
        $berita->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
