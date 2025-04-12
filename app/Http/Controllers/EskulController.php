<?php

namespace App\Http\Controllers;

use App\Models\Eskul;
use Illuminate\Http\Request;

class EskulController extends Controller
{
    public function index()
    {
        return Eskul::all();
    }
    public function store(Request $request)
    {
        return Eskul::create($request->all());
    }
    public function show(Eskul $eskul)
    {
        return $eskul;
    }
    public function update(Request $request, Eskul $eskul)
    {
        $eskul->update($request->all());
        return $eskul;
    }
    public function destroy(Eskul $eskul)
    {
        $eskul->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
