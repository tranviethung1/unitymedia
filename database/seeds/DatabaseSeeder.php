<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(GeneralSettingSeeder::class);
    }
}

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        //
        DB::table('users')->insert([
                'name' => 'Admin',
                'email' => 'admin_unitymedia@mail.com',
                'password' => bcrypt('admin_unitymedia@123'),
                'role' => 1,
                'created_at' => new DateTime()
            ]);

    }
}

