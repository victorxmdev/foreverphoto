<?php

namespace App\Http\Controllers;
use App\Models\UsuarioModel;
use App\Libraries\Components\Table;

class UsuarioController extends Controller{

    public function lista(){
        $header = ['Nome', 'Sobrenome',  'Nome de Usuário','Rua','Bairro','Número','Complemento','Estado','Cidade','Telefone','Email','Tipo de Usuário'];
        $vm = new UsuarioModel();
        $body = $vm->listaUsuario();
        $table = new Table($header, $body->toArray());
        return view('site.lista_usuario',['table' => $table->getHTML()]);
    }

    public function cadastro(){
        $vm = new UsuarioModel();
        $vm->registraUsuario();

        return view('cadastro.usuarios');
    }

    public function editar(){

    }

    public function deletar(){

    }
}
?>