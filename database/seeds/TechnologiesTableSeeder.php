<?php
/**
 * Created by PhpStorm.
 * User: hensansi
 * Date: 8/26/14
 * Time: 9:19 PM
 */
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologiesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Technology::create(['name' => 'CSS3']);
        Technology::create(['name' => 'HTML5']);
        Technology::create(['name' => 'Javascript']);
        Technology::create(['name' => 'D3.js']);
        Technology::create(['name' => 'jQuery']);
        Technology::create(['name' => 'MySql']);
        Technology::create(['name' => 'PHP']);
        Technology::create(['name' => 'PostgreSQL']);

    }
}
