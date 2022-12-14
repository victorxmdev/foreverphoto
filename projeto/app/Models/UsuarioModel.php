<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class UsuarioModel extends Model{
    public function registraUsuario(){
        if(sizeof($_POST) == 0) return;
        $req = request();

        $data = $req->validate([
            'nome_usuario' => 'required|min:2|max:15|string',
            'sobrenome_usuario' => 'required|max:40|string',
            'nmuser_usuario' => 'required|max:15|string',
            'rua_usuario' => 'required|max:100|string',
            'bairro_usuario' => 'required|max:20|string',
            'num_casa_usuario' => 'required|max:999999|integer',
            'complemento_usuario' => 'max:30|string',
            'uf_usuario' => 'required|max:2|string',
            'cidade_usuario' => 'required|max:20|string',
            'telefone_usuario' => 'required|max:11|integer',
            'email_usuario' => 'required|email',
            'senha_usuario' => 'required|max:100',
            'tipo_usuario' => 'required|max:11'
        ]);

        $usuario = new Usuario();
        $usuario->create($data);
    }

    public function listaUsuario(){
        $usuario = new Usuario();
        return $usuario->select('nome_usuario', 'sobrenome_usuario', 'nmuser_usuario', 'rua_usuario', 'bairro_usuario','num_casa_usuario', 'complemento_usuario', 'uf_usuario', 'cidade_usuario', 'telefone_usuario', 'email_usuario', 'tipo_usuario')->get();
    }
}
