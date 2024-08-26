<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tasks')->insert([
            'taskId'=>'1',
            'taskName'=>'Responder e-mail'
        ]);
        DB::table('tasks')->insert([
            'taskId'=>'2',
            'taskName'=>'Atualizar relatório'
        ]);
        DB::table('tasks')->insert([
            'taskId'=>'3',
            'taskName'=>'Organizar Documentos'
        ]);
    }
}
