<?php
/**
 * Created by PhpStorm.
 * User: hensansi
 * Date: 8/26/14
 * Time: 9:19 PM
 */
use Illuminate\Database\Seeder;
use App\Models\Mix;

class MixesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        Mix::create(['id_work' => 1,'id_technology' => 7]);
        Mix::create(['id_work' => 1,'id_technology' => 8]);
        Mix::create(['id_work' => 2,'id_technology' => 4]);
        Mix::create(['id_work' => 2,'id_technology' => 5]);
        Mix::create(['id_work' => 2,'id_technology' => 3]);
        Mix::create(['id_work' => 3,'id_technology' => 1]);
        Mix::create(['id_work' => 3,'id_technology' => 2]);
        Mix::create(['id_work' => 3,'id_technology' => 3]);
        Mix::create(['id_work' => 3,'id_technology' => 6]);
        Mix::create(['id_work' => 3,'id_technology' => 7]);
        /*
        Mix::create(['id_work' => 4,'id_technology' => 1]);
        Mix::create(['id_work' => 4,'id_technology' => 2]);
        Mix::create(['id_work' => 4,'id_technology' => 7]);
        Mix::create(['id_work' => 4,'id_technology' => 6]);
        */
        Mix::create(['id_work' => 4,'id_technology' => 1]);
        Mix::create(['id_work' => 4,'id_technology' => 2]);
        Mix::create(['id_work' => 5,'id_technology' => 1]);
        Mix::create(['id_work' => 5,'id_technology' => 2]);

        Mix::create(['id_work' => 6,'id_technology' => 1]);
        Mix::create(['id_work' => 6,'id_technology' => 2]);

        /*
        Mix::create(['id_work' => 7,'id_technology' => 1]);
        Mix::create(['id_work' => 7,'id_technology' => 2]);
        */
    }
}

