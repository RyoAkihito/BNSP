<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        return Profil::all();
    }
    public function store(Request $request)
    {
        return Profil::create($request->all());
    }
    public function show(Profil $profil)
    {
        return $profil;
    }
    public function update(Request $request, Profil $profil)
    {
        $profil->update($request->all());
        return $profil;
    }
    public function destroy(Profil $profil)
    {
        $profil->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
