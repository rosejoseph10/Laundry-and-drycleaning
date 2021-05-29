<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class serviceseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            
        [ 
                'service'=>'Laundry',
                "features"=>"Washing & Ironing and Normal Wash",
                "unit"=>"kg",
                "price"=>"₹90.00",
                "gallery"=>"https://static4.depositphotos.com/1017817/330/i/600/depositphotos_3300491-stock-photo-the-fresh-smell-of-linen.jpg"
               
               
        ],
        [
            
                'service'=>'Organic Wash',
                "features"=>"Normal Service",
                "unit"=>"kg",
                "price"=>"₹130.00",
                "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTvXU-RmQJBjO7Aavr3N_BhmimwaGE-Ftyvti5RrD3mCfbB14HFs1fYMxpF3FpBcl8d4I&usqp=CAU"
        ],
        [
            
                'service'=>'Curtain Wash',
                "features"=>"Exclusive Curtain Care",
                "unit"=>"kg",
                "price"=>"₹130.00",
                "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQBYLY3zPmAyOOY5mMZncqiblHSxhrm3b7PA&usqp=CAU"
               
               
        ],
        [
            
            
            'service'=>'Ironing',
            "features"=>"Normal Service",
            "unit"=>"kg",
            "price"=>"₹60.00",
            "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGYBLuBbm7J-eYiGuc7qu9Q1qZIMm-KBRHFA&usqp=CAU"
           
           
        ],
        [
            
            'service'=>'Premium Laundry',
            "features"=>"Washing & Ironing",
            "unit"=>"kg",
            "price"=>"₹140.00",
            "gallery"=>"https://i2.wp.com/www.jacksonlaundromat.com/wp-content/uploads/2019/10/Laundro-8.jpg?fit=1600%2C1067&ssl=1"
           
           
        ]
        ]);
    }
}