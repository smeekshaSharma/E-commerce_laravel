<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name'=>'Oppo mobile',
            "price"=>"20000",
            "description"=>"A smartphone with 4gb ram and much more features",
            "category"=>"Mobile",
            "gallery"=>"https://c0.lestechnophiles.com/images.frandroid.com/wp-content/uploads/2020/09/oppo-reno-4-pro-frandroid-2020.png?resize=350"
            ],
            [
                'name'=>'Panasonic Tv',
                "price"=>"36000",
                "description"=>"A smart TV with much more features",
                "category"=>"TV",
                "gallery"=>"https://tvrepaircompany.ca/wp-content/uploads/2020/04/Panasonic-TV.jpg"
             ],
            [
                'name'=>'Sony LCD',
                "price"=>"32000",
                "description"=>"A smart LCD with much more features",
                "category"=>"TV",
                "gallery"=>"https://www.electrofarm.co.uk/wp-content/uploads/2020/09/91coU9OAnAL._AC_SL1500_.jpg"
            ],
            [
                'name'=>'LG Fridge',
                "price"=>"60000",
                "description"=>"A Fridge with much more features",
                "category"=>"Fridge",
                "gallery"=>"https://th.bing.com/th/id/R.c0d1408b36014beafac88201cedcc32b?rik=RTkfaxJK4VmEXg&riu=http%3a%2f%2fc.shld.net%2frpx%2fi%2fs%2fi%2fspin%2fimage%2fspin_prod_176409001%3f%3fhei%3d64%26wid%3d64%26qlt%3d50&ehk=QhhXVV2jpCsbvUgzy298Hq6TopTKajXLBvkAoi%2fKtkM%3d&risl=&pid=ImgRaw&r=0"
            ],
            [
                'name'=>'LG Washing Machine',
                "price"=>"75000",
                "description"=>"A smart washing machine with much more features",
                "category"=>"Washimg Machine",
                "gallery"=>"https://johnlewis.scene7.com/is/image/JohnLewis/232273404?$rsp-pdp-port-1440$"
            ],

        ]);
    }
}
