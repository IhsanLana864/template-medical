<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class SuperAdminController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'admin')->get();
        return view('admin.akun.index', compact('users'));
    }

    public function create()
    {
        return view('admin.akun.create');
    }

    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'admin',
        ]);

        return redirect()->route('admin.akun.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit(User $user)
    {
        return view('admin.akun.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        // Validasi data input
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user->update($request->all());

        return redirect()->route('admin.akun.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.akun.index')->with('success', 'Data berhasil dihapus!');
    }
}
