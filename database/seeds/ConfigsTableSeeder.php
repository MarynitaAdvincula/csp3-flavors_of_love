<?php

use Illuminate\Database\Seeder;

class ConfigsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Config::insert([
            ['name' => 'site_name', 'value' => 'Flavors of Love'],
            ['name' => 'site_title', 'value' => 'Flavors of Love'],
            ['name' => 'copyright_owner', 'value' => 'Flavors of Love'],
            ['name' => 'admin_email', 'value' => 'admin@gmail.com'],
        ]);
    }
}
