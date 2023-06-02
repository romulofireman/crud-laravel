<?php
namespace App\Http\Controllers;

use App\Models\Administrador;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    public function index()
    {
        $administradores = Administrador::all();
        return view('administradores.index', compact('administradores'));
    }

    public function create()
    {
        return view('administradores.create');
    }

    public function store(Request $request)
    {
        Administrador::create($request->all());
        return redirect()->route('administradores.index');
    }

    public function edit($id)
    {
        $administrador = Administrador::findOrFail($id);
        return view('administradores.edit', compact('administrador'));
    }

    public function update(Request $request, $id)
    {
        $administrador = Administrador::findOrFail($id);
        $administrador->update($request->all());
        return redirect()->route('administradores.index');
    }


    public function destroy($id)
    {
        $administrador = Administrador::findOrFail($id);
        $administrador->delete();
        return redirect()->route('administradores.index');
    }
}
