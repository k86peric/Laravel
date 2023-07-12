<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
            'name' => 'Kruno',
            'email' => 'kruno@varikina.com',
            'password' => Hash::make('a1w2d3r4'),
            'role_id' => 2
        ],
        [
            'name' => 'Pavo',
            'email' => 'pavo@varikina.com',
            'password' => Hash::make('a1w2d3r4'),
            'role_id' => 2
        ],
        [
            'name' => 'Bruno',
            'email' => 'bruno@varikina.com',
            'password' => Hash::make('a1w2d3r4'),
            'role_id' => 2
        ],
    ]);
    }
}