<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function index()
    {
        $user = User::all();

        $data = [
            "dataUser" => $user
        ];

        return view("users.index", $data);
    }

    public function create()
    {
        return view("users.create");
    }

    public function store(Request $request)
    {
        // buat method create untuk menambahkan data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'role' => 'required',
        ]);

        $user = new User(
            $user = [
                "name" => $request->name,
                "email" => $request->email,
                "password" => Hash::make($request->password),
                "role" => $request->role
            ]
        );
        $user->save();

        return redirect()->route('users')->with('success', 'Data berhasil dibuat!');
    }

    public function update($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('users')->with('error', 'Data tidak ditemukan!');
        } else {
            $data = [
                "users" => $user
            ];
            return view("users.update", $data);
        }
    }

    public function edit(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return $this->index()->with('error', 'Data tidak ditemukan!');
        } else {
            $input = [
                "name" => $request->name ?? $user->name,
                "email" => $request->email ?? $user->email,
                // "password" => $request->password ?? $user->password,
                "role" => $request->role ?? $user->role,
            ];
            $user->update($input);
        }

        return redirect()->route('users')->with('success', 'Data berhasil diubah!');
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            return $this->index()->with('error', 'Data tidak ditemukan!');
        } else {
            $user->delete();
        }
        return back()->with('success', 'Data berhasil dihapus!');
    }

    public function show($id)
    {
        $user = User::find($id);

        $data = [
            "users" => $user
        ];

        return view("users.detail", $data);
    }
}
