<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Category 1',
                'slug' => 'category-1',
                'created_at' => '2021-03-26 16:56:12',
                'updated_at' => '2021-03-26 16:56:12',
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Category 2',
                'slug' => 'category-2',
                'created_at' => '2021-03-26 16:56:12',
                'updated_at' => '2021-03-26 16:56:12',
            ),
        ));
        
        
    }
}