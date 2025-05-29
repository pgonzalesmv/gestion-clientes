<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
class ClienteController extends Controller
{
    public function store(Request $request)
    {
        Cliente::create($request->only('nombre', 'email', 'telefono'));
        return redirect('/');
    }
}
