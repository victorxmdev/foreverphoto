<?php

namespace App\Helpers\DataBuilders;

class UsuarioDataBuilder{

    private $v = [
        ['nome_usuario' => 'Victor', 'sobrenome_usuario' => 'Magalhaes', 'nmuser_usuario' => 'victorxm', 'rua_usuario' => 'Rua do Victor', 'bairro_usuario' => 'Bairro do Victor', 'num_casa_usuario' => '777', 'complemento_usuario' => 'Casa 7', 'uf_usuario' => 'SP', 'telefone_usuario' => '2016-1678', 'email_usuario' => 'victor@gmail.com', 'senha_usuario' => '', 'tipo_usuario' => '1'],
    ];

    public function getData(){
        return $this->$v;
    }

    public function getRow(){
        $v = ['nome_usuario' => 'Luan', 'sobrenome_usuario' => 'Morais', 'nmuser_usuario' => 'luanm', 'rua_usuario' => 'Rua do Luan', 'bairro_usuario' => 'Bairro do Luan', 'num_casa_usuario' => '888', 'complemento_usuario' => 'Casa 8', 'uf_usuario' => 'SP', 'telefone_usuario' => '2156-1885', 'email_usuario' => 'luan@gmail.com', 'senha_usuario' => '', 'tipo_usuario' => '2'];

        return $v;
    }
}