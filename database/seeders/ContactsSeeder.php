<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            'name' => 'Gustavo Kley',
            'email' => 'g10@gmail.com',
            'telefone' => '(00) 9999-9999',
            'data_nascimento' => '1900-06-15'

        ]);

        DB::table('contacts')->insert([
            'name' => 'Joao Silva',
            'email' => 'joao@gmail.com',
            'telefone' => '(00) 9999-9999',
            'data_nascimento' => '2000-04-02'

        ]);

    }
}
