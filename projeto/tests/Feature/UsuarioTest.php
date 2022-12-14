<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Helpers\DataBuilders\UsuarioDataBuilder;
use App\Models\Usuario;

class UsuarioTest extends TestCase
{
    //execução inicial
    public function setUp(): void{
        parent::setUp();
        Usuario::truncate();
        $vdb = new UsuarioDataBuilder();
        $v = $vdb->getData();
        Usuario::insert($v);
    }

    public function test_le_um_usuario(){
        // arrange
        $victor = Usuario::find(0);

        // act
        $nome = $victor['nome_usuario'];

        // assert
        $this->assertEquals('Victor', $nome);
    }

    public function test_le_todos_os_usuarios(){
        $v = Usuario::all();
        $this->assertEquals(1, sizeof($v));
    }

    public function test_le_todos_os_usuarios_corretamente(){
        $lista = Usuario::all();
        $this->assertEquals('Magalhaes', $lista[0]['sobrenome_usuario']);
    }

    public function test_atualiza_usuario_corretamente(){
        // le o usuario
        $victor = Usuario::find(0);

        // verifica se é o usuario correto
        $this->assertEquals('Victor', $victor['nome_usuario']);

        // altera alguma info
        $victor['sobrenome_usuario'] = 'Santos';

        // salva
        $victor->save();

        // le novamente
        $vi = Usuario::find(0);

        // verifica se o valor foi alterado
        $this->assertEquals('Santos', $victor['sobrenome_usuario']);
    }

    public function test_remove_voluntario_corretamente(){
        // verifica se existe o usuario
        $victor = Usuario::find(0);

        // remover este voluntario
        $victor->delete();

        // verificar se a remoção de fato ocorreu
        $victor = Usuario::find(0);
        $this->assertNull($victor);
    }

    public function test_cadastra_voluntario(){
        // arrange
        $vdb = new UsuarioDataBuilder();
        $row = $vdb->getRow();

        // act
        Usuario::create($row);

        // assert
        $v = Usuario::all();
        $num = sizeof($v);
        $this->assertEquals(2, $num);

        $vol = $v[$num - 1];
        $this->assertEquals('luan@gmail.com', $vol['email_usuario']);
    }
}
