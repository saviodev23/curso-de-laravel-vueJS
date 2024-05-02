<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use PhpParser\Node\Stmt\Echo_;


class Fornecedor extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "fornecedores";
    protected $fillable =[
        'nome',
        'site',
        'uf',
        'email'
    ];
}


