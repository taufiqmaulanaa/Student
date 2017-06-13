<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
        	['name'=>'Admin'],
            ['name'=>'Receipttionist'],
            ['name'=>'Manager'],
            ['name'=>'CEO']
        	])
    }
}
