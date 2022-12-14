<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $fillable = ['nome_usuario','sobrenome_usuario', 'nmuser_usuario', 'rua_usuario', 'bairro_usuario', 'num_casa_usuario', 'complemento_usuario', 'uf_usuario', 'cidade_usuario', 'telefone_usuario', 'email_usuario', 'senha_usuario', 'tipo_usuario'];
    use HasFactory;
}
