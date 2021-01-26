<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dotenv\Validator, Illuminate\Support\Facades\Redirect, Symfony\Component\HttpFoundation\Response;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Http\Controllers\WerkController;


class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function registration()
    {
        return view('registration');
    }
    public function postLogin(Request $request)
    {
        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        echo $request;
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('werken');
        }
        return Redirect::to('werken')->withSuccess('Oops! you have entered invalid credentials');
    }

    public function postRegitration(Request $request)
    {
        request()->validate([
            'name' => 'required|min:2',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return Redirect::to('dashboard')->withSuccess('You logged in success');
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('werken.index', compact('werken'));
        }
        return Redirect::to("login")->withSuccess('you do not have access');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function logout()
    {
        Auth::logout();
        Session()->flush();
        return Redirect('login');
    }
}
