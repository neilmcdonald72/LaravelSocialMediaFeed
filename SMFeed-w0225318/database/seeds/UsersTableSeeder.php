<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name' => 'JaneUserAdmin',
            'email' => 'jane@example.com',
            'password' => Hash::make('password1'),
        ]);

        \DB::table('users')->insert([
            'name' => 'Bob Moderator',
            'email' => 'bob@example.com',
            'password' => Hash::make('password2'),
        ]);
        \DB::table('users')->insert([
            'name' => 'Susan ThemeAdmin',
            'email' => 'susan@example.com',
            'password' => Hash::make('password3'),
        ]);
    }
}
