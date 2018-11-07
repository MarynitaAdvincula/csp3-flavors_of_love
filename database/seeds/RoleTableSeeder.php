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
        //Populate initial roles
        $role_user = new Role();
        $role_user->name = 'User';
        $role_user->description = 'A normal user';
        $role_user->save();

        //Author User
        $role_author = new Role();
        $role_author->name = 'Author';
        $role_author->description = 'An author user';
        $role_author->save();

        //Admin User
        $role_admin = new Role();
        $role_admin->name = 'Admin';
        $role_admin->description = 'An admin user';
        $role_admin->save();
    }
}
