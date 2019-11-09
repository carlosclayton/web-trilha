<?php

use Illuminate\Database\Seeder;
use Webtrila\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 5)->states('admin')->create();
        factory(User::class, 50)->states('client')->create();
    }
}
