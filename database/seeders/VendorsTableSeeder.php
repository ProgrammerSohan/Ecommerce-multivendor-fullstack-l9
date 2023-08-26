<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendor;

class VendorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $vendorRecords = [
            ['id'=>2,'name'=>'Sohan','address'=>'CP-112','city'=>'Dhaka','state'=>'Dhaka',
            'country'=>'BD','pincode'=>'120001','mobile'=>'980000000000','email'=>'sohan@admin','status'=>0],
         ];
         Vendor::insert($vendorRecords);
    }
}
