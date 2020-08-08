<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request){

        $contact = Contact::create([
            'name'   => $request->get('nombre'),
            'email'  => $request->get('correo'),
            'state'  => $request->get('departamentos'),
            'city'   => $request->get('ciudades')
        ]);

        return redirect('/')->withSuccess('Tu información ha sido recibida satisfactoriamente');

    }
}
