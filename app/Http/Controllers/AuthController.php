<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function customLogin(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only($validatedData);
        if (Auth::attempt($credentials)) {
            return redirect('index');
        };

        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function customRegistration(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        // $data = $request->all();

        $user = User::create($validatedData);
        // $check = $this->create($data);

        return redirect("dashboard")->withSuccess('You have signed-in');
        // $validatedData = $request->validate([
        //     'username' => 'required|max:255',
        //     'email' => 'required|email|unique:users|max:255',
        //     'password' => 'required|confirmed|min:8',
        // ]);

        // $validatedData['password'] = Hash::make($validatedData['password']);

        // $user = User::create($validatedData);

        // return response()->json($user, 201);
    }

    // public function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password'])
    //     ]);
    // }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function signOut()
    {
        Session::flush();
        Auth::guest();

        return redirect('/');
    }
}
