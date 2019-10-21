<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['Admin', 'Moderator', 'User'];
        
        for($role = 0; $role < count($roles); $role++)
        {
            Role::create(['name' => $roles[$role]]);
        }
    }
}
