<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dotenv\Validator, Illuminate\Support\Facades\Redirect, Symfony\Component\HttpFoundation\Response;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;
use Symfony\Component\HttpFoundation\Session\Session;


class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function registration()
    {
        # code...
        return view('registration');
    }

    public function postLogin(Request $request)
    {
        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }

        return Redirect::to('login')->withSuccess('Oops! you have entered invalid credentials');
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

        return Redirect::to("dashboard")->withSuccess('You logged in suyccessfully!');
    }

    public function dashboard(array $data)
    {
        if (Auth::check()) {
            return view('dashboard');
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
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
