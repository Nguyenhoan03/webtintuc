<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\ldl;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      

        DB::table('users')->insert([
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => bcrypt('admin123'),
            ],
           
          
        ]);


        DB::table('ldl')->insert([
            [
                'title' => 'User',
                'description' => 'user@gmail.com',
                'content' => 'fxfgnfgjgyjcyj',
            ],
           
          
        ]);


    }
}
