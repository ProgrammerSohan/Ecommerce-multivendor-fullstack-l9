<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRecords = [
            ['id'=>3,'name'=>'Sohan','type'=>'vendor','vendor_id'=>2,'mobile'=>'980000000000',
            'email'=>'sohan@admin.com','password'=>'$2a$12$mS/u1e.cTx4kWtGbZZ1/1OpPvIF2jtuQpiQeEkXzHCYRKPCM4eY2G','image'=>'','status'=>0],

        ];
        Admin::insert($adminRecords);

    }
}
