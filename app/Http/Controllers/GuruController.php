<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    // Show all gurus
    public function index()
    {
        $gurus = Guru::all();
        return view('admin.guru.index', compact('gurus')); // Pass gurus to the view
    }

    // Show form for creating a new guru
    public function create()
    {
        return view('admin.guru.create'); // Return create form view
    }

    // Store a new guru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|unique:gurus,nip',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'mata_pelajaran' => 'required|string|max:255',
        ]);

        $guruData = $request->all();

        // Handle file upload for 'foto' if it exists
        if ($request->hasFile('foto')) {
            $guruData['foto'] = $request->file('foto')->store('uploads/guru', 'public');
        }

        Guru::create($guruData);
        return redirect()->route('admin.guru.index')->with('success', 'Guru created successfully!');
    }

    // Show form for editing a specific guru
    public function edit(Guru $guru)
    {
        return view('admin.guru.edit', compact('guru')); // Return edit form with guru data
    }

    // Update the guru data
    public function update(Request $request, Guru $guru)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|unique:gurus,nip,' . $guru->id,
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'mata_pelajaran' => 'required|string|max:255',
        ]);

        $guruData = $request->all();

        // Handle file upload for 'foto' if it exists
        if ($request->hasFile('foto')) {
            // Delete old photo if exists
            if ($guru->foto && file_exists(storage_path('app/public/' . $guru->foto))) {
                unlink(storage_path('app/public/' . $guru->foto));
            }

            // Store new photo
            $guruData['foto'] = $request->file('foto')->store('uploads/guru', 'public');
        }

        $guru->update($guruData);
        return redirect()->route('admin.guru.index')->with('success', 'Guru updated successfully!');
    }

    // Delete a guru
    public function destroy(Guru $guru)
    {
        // Delete the photo if exists
        if ($guru->foto && file_exists(storage_path('app/public/' . $guru->foto))) {
            unlink(storage_path('app/public/' . $guru->foto));
        }

        $guru->delete();
        return redirect()->route('admin.guru.index')->with('success', 'Guru deleted successfully!');
    }
    public function dashboard()
{
    $gurus = Guru::all();
    $totalGuru = Guru::count();
    return view('admin', compact('gurus', 'totalGuru'));
}

}
