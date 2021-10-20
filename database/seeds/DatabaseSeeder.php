<?php

use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
        	'name' => 'mhd rdwan', 
        	'email' => 'mohamadrdwan151997@gmail.com',
        	'password' => bcrypt('12345678')
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
