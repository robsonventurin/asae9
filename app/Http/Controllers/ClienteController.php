<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    function telaCadastro() {
        $lista = $this->listaEstados();
        return view('cadastrar_cliente', [ "estados" => $lista]);
    }

    function telaListar() {
        $lista = Cliente::all();
        return view('listar_clientes', [ "clientes" => $lista]);
    }

    function listaEstados() {
        $estados = array(
            'AC' => 'Acre',
            'AL' => 'Alagoas',
            'AP' => 'Amapá',
            'AM' => 'Amazonas',
            'BA' => 'Bahia',
            'CE' => 'Ceará',
            'DF' => 'Distrito Federal',
            'ES' => 'Espirito Santo',
            'GO' => 'Goiás',
            'MA' => 'Maranhão',
            'MS' => 'Mato Grosso do Sul',
            'MT' => 'Mato Grosso',
            'MG' => 'Minas Gerais',
            'PA' => 'Pará',
            'PB' => 'Paraíba',
            'PR' => 'Paraná',
            'PE' => 'Pernambuco',
            'PI' => 'Piauí',
            'RJ' => 'Rio de Janeiro',
            'RN' => 'Rio Grande do Norte',
            'RS' => 'Rio Grande do Sul',
            'RO' => 'Rondônia',
            'RR' => 'Roraima',
            'SC' => 'Santa Catarina',
            'SP' => 'São Paulo',
            'SE' => 'Sergipe',
            'TO' => 'Tocantins',
        );
        
        return $estados;
    }

    function adicionar(Request $req) {

        $c = new Cliente();
        $c->nome = $req->input("nome");
        $c->endereco = $req->input("endereco");
        $c->cidade = $req->input("cidade");
        $c->estado = $req->input("estado");
        $c->cep = $req->input("cep");

        if ($c->save()) {
            $msg = "Cliente '$c->nome' adicionado com sucesso.";
        } else {
            $msg = "Cliente não foi adicionado. Favor entrar em contato com o suporte.";
        }
        
        return view('cadastrar_cliente_resultado', [ "mensagem" => $msg]);
    }

    /*
    function listar() {
        $usuarios = Usuario::all();
        return view('lista', [ "us" => $usuarios ]);
    }*/
}
