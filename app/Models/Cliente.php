<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['nome',
                            'endereco',
                            'numero',
                            'bairro',
                            'cpf',
                            'telefone',
                            'celular',
                            'cep',
                            'cidade_id',
                            'sexo'];

    public function cidade(){
        return $this->belongsTo(Cidade::class);
    }
}
