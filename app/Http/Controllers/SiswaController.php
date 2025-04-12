<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        return Siswa::all();
    }
    public function store(Request $request)
    {
        return Siswa::create($request->all());
    }
    public function show(Siswa $siswa)
    {
        return $siswa;
    }
    public function update(Request $request, Siswa $siswa)
    {
        $siswa->update($request->all());
        return $siswa;
    }
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
