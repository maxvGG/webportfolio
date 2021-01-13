<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index($name = null)
    {
        // return 'hey hey ' . $name;
        return view('contact');
    }
    public function ContactRequest(Request $request)
    {
        return view('contact_succes', [
            'voornaam' => $request->input('first_name')
        ]);
    }
}
