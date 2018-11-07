<?php
use Illuminate\Database\Seeder;
use App\Role;
use App\User;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Roles

        $role_user = Role::where('name', 'User')->first();
        $role_admin = Role::where('name', 'Admin')->first();	
        $role_author = Role::where('name', 'Author')->first();


        //user data
    	$user_reg = new User();
    	$user_reg->first_name = 'Mike';
    	$user_reg->last_name = 'Lauri';
    	$user_reg->username = 'mlauri';
    	$user_reg->email = 'mk@gmail.com';
    	$user_reg->password = bcrypt('secret');
    	$user_reg->save();
    	$user_reg->roles()->attach($role_user);


    	//admin data
    	$admin = new User();
    	$admin->first_name = 'Scott';
    	$admin->last_name = 'Summers';
    	$admin->username = 'ssummers';
    	$admin->email = 'ss@gmail.com';
    	$admin->password = bcrypt('secret');
    	$admin->save();
    	$admin->roles()->attach($role_admin);

    	//author data
    	$author = new User();
    	$author->first_name = 'Jean';
    	$author->last_name = 'Grey';
    	$author->username = 'jgrey';
    	$author->email = 'jg@gmail.com';
    	$author->password = bcrypt('secret');
    	$author->save();
    	$author->roles()->attach($role_author);

    }
}
