<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $cat_home = new Category();
        $cat_home->category_name = 'Home';
        $cat_home->category_slug = 'home';
        $cat_home->save();

        $cat_ftrs = new Category();
        $cat_ftrs->category_name = 'Features';
        $cat_ftrs->category_slug = 'features';
        $cat_ftrs->save();

        $cat_rcps = new Category();
        $cat_rcps->category_name = 'Recipes';
        $cat_rcps->category_slug = 'recipes';
        $cat_rcps->save();

        $cat_rvws = new Category();
        $cat_rvws->category_name = 'Reviews';
        $cat_rvws->category_slug = 'reviews';
        $cat_rvws->save();

        $cat_cntct = new Category();
        $cat_cntct->category_name = 'Contact';
        $cat_cntct->category_slug = 'contact';
        $cat_cntct->save();	
    }
}
