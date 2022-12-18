<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user = DB::table('user')->insert([
            'name' => 'user1',
            'email' => 'a@a.a',
            'password' => Hash::make('password')
        ]);

        $user = DB::table('user')->insert([
            'name' => 'user2',
            'email' => 'a@a.b',
            'password' => Hash::make('password')
        ]);

        $user = DB::table('user')->insert([
            'name' => 'user3',
            'email' => 'a@a.c',
            'password' => Hash::make('password')
        ]);

        $friend = DB::table('friend')->insert([
            'sender_id' => 1,
            'reciever_id' => 2,
            'state' => 1
        ]);

        $friend = DB::table('friend')->insert([
            'sender_id' => 1,
            'reciever_id' => 3
        ]);

        $friend = DB::table('friend')->insert([
            'sender_id' => 2,
            'reciever_id' => 3
        ]);
    }
}
