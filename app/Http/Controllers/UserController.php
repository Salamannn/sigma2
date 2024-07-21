<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'kode_posyandu' => ['required', 'string', 'max:255'],
        //     'password' => ['required', 'string', 'min:8', 'confirmed'],

        // ], [
        //     'name.required' => 'Nama harus diisi.',
        //     'email.required' => 'Email harus diisi.',
        //     'email.email' => 'Format email tidak valid.',
        //     'email.unique' => 'Email sudah digunakan.',
        //     'kode_posyandu.required' => 'Kode posyandu harus diisi.',
        //     'password.required' => 'Password harus diisi.',
        //     'password.min' => 'Password minimal 8 karakter.',
        //     'password.confirmed' => 'Password tidak sama dengan konfirmasi password.',
        // ]);

        //dd($request);

        User::create([
            'nama' => $request->name,
            'email' => $request->email,
            'kode_posyandu' => $request->kode_posyandu,
            'password' => Hash::make($request->password),
            'kode_roles' => 2, // kode_roles untuk posyandu
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
        ]);

        return redirect()->back()->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
