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
        Category::create([
           'name' => 'Personal'
        ]);
        Category::create([
            'name' => 'Job'
        ]);
    }
}
