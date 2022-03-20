<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;    // we are importing this to save data in database via seeder

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
            // [
            //     'name'=>'LG mobile',
            //     "price"=>"300",
            //     "description"=>"A smartphone with 8gb ram and much more feature",
            //     "category"=>"mobile",
            //     "gallery"=>"https://i.pinimg.com/originals/f9/e9/26/f9e9264c0ad200e6c608e7449334504e.png"
            // ],

            // [
            //     'name'=>'Oneplus',
            //     "price"=>"200",
            //     "description"=>"A smartphone with 8gb ram & stock ROM",
            //     "category"=>"mobile",
            //     "gallery"=>"https://assets.mspimages.in/wp-content/uploads/2020/04/oneplus-8-pro-featured-image.jpg"
            // ],

            // [
            //     'name'=>'Redmi TV',
            //     "price"=>"300",
            //     "description"=>"A smartphone with 8gb ram and with Vivd color and much much more feature",
            //     "category"=>"mobile",
            //     "gallery"=>"https://i02.appmifile.com/32_operator_in/09/02/2022/eca8c86940c8f7f866f50629e1111618.jpg"
            // ],

            // [
            //     'name'=>'LG SmartTV',
            //     "price"=>"30",
            //     "description"=>"A smartphone with Vivd color and much more",
            //     "category"=>"TV",
            //     "gallery"=>"https://khoslaonline.com/wp-content/uploads/2020/04/05.png"
            // ],

            [
                'name'=>'Samsung washing machine',
                "price"=>"250",
                "description"=>"A faster colling firdge",
                "category"=>"Electrical Applaiyance",
                "gallery"=>"https://img.republicworld.com/republic-prod/stories/promolarge/xhdpi/hweqgaectftztlmd_1587451503.jpeg"
            ],
         ] );
   }
}
