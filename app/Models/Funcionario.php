<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Funcionario extends Model
{
     use HasFactory;

    protected $table = 'funcionarios';

    protected $fillable = [
        'nome',
        'email',
        'cpf',
        'cargo',
        'dataAdmissao',
        'salario',
    ];

    protected $casts = [
        'dataAdmissao' => 'date',
        'salario' => 'decimal:2',
    ];

    protected static function boot()
    {
        parent::boot();

        // Automatically convert 'nome' to uppercase before saving
        static::creating(function ($funcionario) {
            $funcionario->nome = mb_strtoupper($funcionario->nome);
        });
    }
}
