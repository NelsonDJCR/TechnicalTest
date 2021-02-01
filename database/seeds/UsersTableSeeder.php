<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Nelson2',
            'email' => 'n@2.com',
            'password' => bcrypt('1223123')
        ]);
    }
}
