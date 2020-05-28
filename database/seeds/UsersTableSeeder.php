<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Category;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
            'name'     => 'Admin',
            'email'    => 'vcachi91@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => true
        ]);

        Category::create([
            'name'     => 'Default'
        ]);
    }
}
