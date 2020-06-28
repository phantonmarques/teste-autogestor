<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = 'E-commerce';
        $category->save();

        $category1 = new Category();
        $category1->name = 'Carros';
        $category1->save();

        $category2 = new Category();
        $category2->name = 'Caminhões';
        $category2->save();

        $category3 = new Category();
        $category3->name = 'Aviões';
        $category3->save();
    }
}
