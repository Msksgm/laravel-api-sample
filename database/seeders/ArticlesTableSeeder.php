<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('articles') -> insert([
            [
                'title' => 'React',
                'body' => 'hoge...'
            ],
            [
                'title' => 'Redux',
                'body' => 'fuga...'
            ]
        ]);
    }
}
