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
        User::create([
            'name'=>'dixxx',
            'email'=>'dix',
            'password'=>bcrypt('11111111'),
            'role'=>0]);
    }
}
