<?php
/**
 * Created by PhpStorm.
 * User: hensansi
 * Date: 8/23/14
 * Time: 7:57 PM
 */

class CategoriesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Web'
        ]);
        Category::create([
            'name' => 'Print'
        ]);
    }

}
