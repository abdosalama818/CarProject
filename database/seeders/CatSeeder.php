<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Cat;
use App\Models\ModelCar;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



            $name = [
                ['en'=> 'cat  en', 'ar'=> 'cat ar'],


            ];

            foreach ($name as $ge) {
                Cat::create(['name' => $ge]);
            }






            $nameBrand = [
                ['en'=> 'brand  en', 'ar'=> 'brand ar'],


            ];

            foreach ($nameBrand as $ge) {
                Brand::create(['name' => $ge]);
            }

            $namemodel = [
                ['en'=> 'model  en', 'ar'=> 'model ar'],


            ];

            foreach ($namemodel as $ge) {
                ModelCar::create(['name' => $ge]);
            }
    }
}
