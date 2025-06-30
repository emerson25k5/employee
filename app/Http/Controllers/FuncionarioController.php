<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function index()
    {
        $funcionarios = Funcionario::orderBy('nome')->get();
        return view('funcionarios.index', compact('funcionarios'));
    }

    public function create()
    {
        return view('funcionarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:150',
            'email' => 'required|email|max:150|unique:funcionarios,email',
            'cpf' => 'required|digits:11|unique:funcionarios,cpf',
            'cargo' => 'nullable|string|max:100',
            'dataAdmissao' => 'nullable|date',
            'salario' => 'nullable|numeric|min:0',
        ]);

        Funcionario::create($request->all());

        return redirect()->route('funcionarios.index')->with('success', 'Funcionário criado com sucesso.');
    }

    public function update(Request $request, Funcionario $funcionario)
    {
        $request->validate([
            'nome' => 'required|string|max:150',
            'email' => 'required|email|max:150|unique:funcionarios,email,' . $funcionario->id,
            'cpf' => 'required|digits:11|unique:funcionarios,cpf,' . $funcionario->id,
            'cargo' => 'nullable|string|max:100',
            'dataAdmissao' => 'nullable|date',
            'salario' => 'nullable|numeric|min:0',
        ]);

        $funcionario->update($request->all());

        return redirect()->route('funcionarios.index')->with('success', 'Funcionário atualizado com sucesso.');
    }

    public function destroy(Funcionario $funcionario)
    {
        $funcionario->delete();

        return redirect()->route('funcionarios.index')->with('success', 'Funcionário excluído com sucesso.');
    }
}
