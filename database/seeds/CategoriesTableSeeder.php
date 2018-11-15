<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(\App\Models\Category::class, 5)->create();

        $categories[] = [
            'name' => 'Features',
            'alias' => 'features',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];

        $categories[] = [
            'name' => 'Reviews',
            'alias' => 'reviews',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];

        $categories[] = [
            'name' => 'Recipes',
            'alias' => 'recipes',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];

        $categories[] = [
            'name' => 'Restaurants',
            'alias' => 'restaurants',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];

        $categories[] = [
            'name' => 'Cafe',
            'alias' => 'cafe',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];

        $categories[] = [
            'name' => 'Food Park',
            'alias' => 'foodpark',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];

        $categories[] = [
            'name' => 'Hotels',
            'alias' => 'hotels',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];

        \App\Models\Category::insert($categories);
    }
}
