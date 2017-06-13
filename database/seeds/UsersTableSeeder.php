<?php

use Illuminate\Database\Seeder;
use App\Role;
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
        		'name'=>'taufiq',
        		'username'=>'taufiq',
        		'email'=>'taufiqmaulanaa@gmail.com',
        		'password'=>bcrypt('seth.saren'),
        		'remember_token'=> str_random(10),
        	])
    }	
}
