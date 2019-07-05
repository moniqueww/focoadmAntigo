<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;

class FuncionarioController extends Controller
{
    private function funcionarioRequest($funcionario, $request)
    {
        return $funcionario;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionario = Funcionario::all();
        return view('funcionario', compact ('funcionario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('funcionario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nome' => 'required| max:191',
            'email' => 'required',
            'senha' => 'required|min:8',
            'cargo' => 'required',
        ]);
        $funcionario = Funcionario::create($validateData);
        $funcionario = new Funcionario;
        $this->funcionarioRequest($funcionario, $request);
        if($funcionario->save()){
            return '<button type="button" class="btn btn-success">Success</button>';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Funcionario::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $funcionario = Funcionario::findOrFail($id);

        return view('funcionarioEdit', compact('funcionario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nome' => 'required|max:100',
            'email' => 'required',
            'senha' => 'required|min:8',
            'cargo' => 'required',
        ]);
        Funcionario::whereId($id)->update($validatedData);

        return redirect('/funcionario')->with('success', 'Funcionario is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        if($funcionario->delete()) {
            return "Deletado com sucesso";
        }
    }
}
