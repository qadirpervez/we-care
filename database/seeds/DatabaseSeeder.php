<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for($i = 1; $i < 16; $i++){
        DB::table('ranks')->insert([
            'rank' => 'Level '.$i,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
      }
      DB::table('admins')->insert([
          'name' => 'Qadir Pervez',
          'email' => 'qadir@admin.com',
          'password' => bcrypt('admin'),
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('stockists')->insert([
        'name' => 'Qadir Pervez',
        'shop_name' => 'Qadir Web Store',
        'email' => 'qadir@stockist.com',
        'address' => '123 Mains',
        'city' => 'Kolkata',
        'state' => 'West Bengal',
        'zip' => '700039',
        'total_business' => 0,
        'password' => bcrypt('stockist'),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('resellers')->insert([
        'name' => 'Qadir Pervez',
        'shop_name' => 'Qadir Stores'
        'email' => 'qadir@reseller.com',
        'address' => '123 Mains',
        'city' => 'Kolkata',
        'state' => 'West Bengal',
        'zip' => '700039',
        'total_business' => 0,
        'password' => bcrypt('reseller'),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('users')->insert([
        'code_no' => 'QP03915',
        'unit_no' => 'QP03915',
        'name' => 'Qadir Pervez',
        'email' => 'qadir@user.com',
        'password' => bcrypt('user'),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
      ]);
      DB::table('products')->insert([
        'product_name' => 'DIABOCARE CAPSULE',
        'product_type' => 'CONTROLLER BLOOD SUGAR',
        'composition' => 'EXTRACT 500MG CAPSULE',
        'dose' => '2 CAPSULE TWO TIMES BEFORE FOOD. WITH WARM WATER',
        'course' => 'AS PER DEPEND YOU',
        'size' => '60 CAPSULE IN SINGLE PACK',
        'packet' => 'HDPE BOTTLE WITH CHILD LOCK',
        'pack_color' => 'HDPE BOTTLE (WHITE,BROWN,BLACK,RED,SILVER)',
        'label' => 'MATT THURMAL ,GLOSSY, TRANSPARENT',
        'price' => '250',
        'bp' => '50',
      ]);
    }
}
