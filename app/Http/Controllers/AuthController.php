<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use \Validator;

class AuthController extends Controller
{
    //
    public function getLogin()
    {
        return view("pages.auth.login");
    }

    public function getRegister()
    {
        return view("pages.auth.register");
    }

    public function register(Request $request)
    {
        # code...
        $validator =  Validator::make($request->all(), [
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'role' => ['required', 'numeric', 'max:3'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput()->with("error", 'Veillez verifier les informations fournies');
        }

        User::create([
            'nom' => $request['nom'],
            'prenom' => $request['prenom'],
            'role_id' => $request['role'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->route("gestion_utilisateur.list")->with('success', 'utilisateur créer avec succès');
    }
}
