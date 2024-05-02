<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fornecedor;
use Illuminate\Support\Facades\DB;

class FornecedorSeerder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //instanciando um objeto e salvando com save()
        $fornecedor = new Fornecedor();

        $fornecedor->nome = 'fornecedor 1';
        $fornecedor->site = 'fornecedor.com.br';
        $fornecedor->uf = 'BA';
        $fornecedor->email = 'fornecedor@gmail.com';

        $fornecedor->save();

        //criando um objeto com create()
        Fornecedor::create([
            'nome' => 'Fornecedor 2',
            'site' => 'fornecedor2.com.br',
            'uf' => 'CE',
            'email' => 'teste@gmail.com'
        ]);

        //add registro com o insert
        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor 3',
            'site' => 'fornecedor3.com.br',
            'uf' => 'MG',
            'email' => 'teste03@gmail.com'
        ]);
    }
}
