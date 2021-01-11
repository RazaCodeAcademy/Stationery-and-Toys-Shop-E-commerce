<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Manager Role
        $role = new \App\Role([
            'name' => 'Manager'
        ]);
        $role->save();

        // Admin Role
        $role = new \App\Role([
            'name' => 'Admin'
        ]);
        $role->save();

        // Customer Role
        $role = new \App\Role([
            'name' => 'Customer'
        ]);
        $role->save();
    }
}
