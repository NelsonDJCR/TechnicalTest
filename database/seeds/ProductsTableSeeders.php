<?php

use Illuminate\Database\Seeder;

use App\Product as producto;
use App\Category;
use App\ProductImage;

class ProductsTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // model Factorier
        factory(Category::class, 5)->create();
        factory(producto::class, 50)->create();
        factory(ProductImage::class, 200)->create();

    }
}
