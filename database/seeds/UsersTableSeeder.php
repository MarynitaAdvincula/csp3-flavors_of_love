<?php

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (env("APP_ENV") == 'local') {
            $owner = User::create(
                [
                    'name' => 'Jane Dow',
                    'username' => 'owner',
                    'password' => \Hash::make('owner'),
                    'email' => 'owner@gmail.com',
                    'last_ip' => '127.0.0.1',
                ]
            );

            $admin = User::create(
                [
                    'name' => 'Admin',
                    'username' => 'admin',
                    'password' => \Hash::make('admin'),
                    'email' => 'admin@gmail.com',
                    'last_ip' => '127.0.0.1',
                ]
            );

            $author = User::create(
                [
                    'name' => 'Author',
                    'username' => 'author',
                    'password' => \Hash::make('author'),
                    'email' => 'author@gmail.com',
                    'last_ip' => '127.0.0.1',
                ]
            );
            $reader = User::create(
                [
                    'name' => 'Reader',
                    'username' => 'reader',
                    'password' => \Hash::make('reader'),
                    'email' => 'reader@gmail.com',
                    'last_ip' => '127.0.0.1',
                ]
            );
            $ownerRole = Role::where('name', 'owner')->first();
            $adminRole = Role::where('name', 'admin')->first();
            $authorRole = Role::where('name', 'author')->first();
            $readerRole = Role::where('name', 'reader')->first();
            $owner->attachRoles([$ownerRole]);
            $admin->attachRoles([$adminRole]);
            $author->attachRoles([$authorRole]);
            $reader->attachRoles([$readerRole]);
        } else {
            $owner = User::create(
                [
                    'name' => 'Jane Dow',
                    'username' => 'janedow',
                    'password' => \Hash::make('owner'),
                    'email' => 'admin@gmail.com',
                    'last_ip' => '127.0.0.1',
                ]
            );
            $ownerRole = Role::where('name', 'owner')->first();
            $owner->attachRoles([$ownerRole]);
        }
    }
}
