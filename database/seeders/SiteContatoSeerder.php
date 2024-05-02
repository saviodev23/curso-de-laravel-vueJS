<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteContatoSeerder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $contato = new SiteContato();
        // $contato->nome = 'Savio S Silva';
        // $contato->telefone = '44540954';
        // $contato->email = 'savio@gmail.com';
        // $contato->motivo_contato = '1';
        // $contato->mensagem = 'acabei de me matricular em outra instituição';

        // $contato->save();

        // $contato = factory(SiteContato::class, 100)->create();
        SiteContato::factory()->count(100)->create();
    }
}
