<?php

use Illuminate\Database\Seeder;

class UserRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manager = new \App\User([
            'name' => 'Manager',
            'email' => 'storemanager@gmail.com',
            'password' => Hash::make('manager123')
        ]);
        $manager->save();

        $manager->roles()->sync(1);

    }
}
