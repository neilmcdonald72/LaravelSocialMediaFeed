<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Jane',
            'content' => '"One cannot step twice in the same river” – Heraclitus',
            'created_by' => '1'
        ]);

        DB::table('posts')->insert([
            'title' => 'Bob',
            'content' => '“The unexamined life is not worth living” – Socrates',
            'created_by' => '2'
        ]);

        DB::table('posts')->insert([
            'title' => 'Susan',
            'content' => '"I think therefore I am" - Descartes',
            'created_by' => '3'
        ]);
    }
}
