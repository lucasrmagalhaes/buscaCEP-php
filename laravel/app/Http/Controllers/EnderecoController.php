<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\Endereco\SalvarRequest;
use App\Models\Endereco;

class EnderecoController extends Controller
{
    public function index()
    {
        $enderecos = Endereco::all();
        return view('listagem')->with (
            [
                'enderecos' => $enderecos,
            ]
        );
    }

    public function adicionar()
    {
        return view('busca');
    }

    public function buscar (
        Request $request
    ) {
        $cep = $request->input('cep');
        // dd($cep);
        $response = Http::get("viacep.com.br/ws/$cep/json/")->json();
        // dd($response);

        return view('adicionar')->with (
            [
                'cep' => $request->input('cep'),
                'logradouro' => $response['logradouro'],
                'bairro' => $response['bairro'],
                'cidade' => $response['localidade'],
                'estado' => $response['uf']
            ]
        );    
    }

    public function salvar (
        SalvarRequest $request
    ) {
        // dd($request->all());
        $endereco = Endereco::create (
            [
                'cep' => $request->input('cep'),
                'logradouro' => $request->input('logradouro'),
                'numero' => $request->input('numero'),
                'bairro' => $request->input('bairro'),
                'cidade' => $request->input('cidade'),
                'estado' => $request->input('estado')
            ]
        );
        // dd($endereco);
        return redirect('/');
    }
}