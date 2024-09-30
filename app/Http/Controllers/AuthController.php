<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Register;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function register(Request $request)
    {

        $exists = Register::where('email', $request->email)->exists();
        if ($exists) {
            return response()->json(["Este endereço de e-mail já está em uso."]);
        } else {

            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:registers',
                'password' => 'required|string|min:8',
            ], );

            $user = Register::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            return response()->json("Usuario cadastrado com sucesso!");
        }

    }

    public function index()
    {
        $users = Register::all();
        $users = Register::paginate(1);
        return view('users.index', compact('users'));
    }

    public function find(Request $request)
    {
        $email = $request->email;


        $usuarios = Register::where('email', 'like', "%$email%")->get();

        return view('users.index', compact('users'));
    }
}
