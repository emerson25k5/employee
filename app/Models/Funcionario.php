<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Funcionario extends Model
{
     use HasFactory;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $table = 'funcionarios';

    protected $fillable = [
        'id',
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

        static::creating(function ($model) {
            if (empty($model->id)) {
                $model->id = (string) Str::uuid();
            }
        });
    }
}
