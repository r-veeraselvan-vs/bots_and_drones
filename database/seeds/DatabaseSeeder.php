<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*$name="Other Products";
        $rules = [
                '@' => '-',
                '#' => '-',
                '$' => '-',
                '%' => '-',
                '&' => '-',
                '*' => '-',
                ')' => '-',
                '(' => '-',
                '_' => '-',
                '- ' => '-',
                ' -' => '-',
                '   ' => '-',
                '  ' => '-',
                ' ' => '-',
                '----' => '-',
                '---' => '-',
                '--' => '-',
                '-' => '-',
                '/' => '-',
            ];
            
            foreach($rules as $i => $rule){
                $name = str_replace($i, $rule,$name);
            }

            $count = 0;
            $random_number = '-'.rand(100,9999);
            $unique_slug = $name.$random_number;

        // \App\Models\User::factory(10)->create();
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 4,
                'name' => $name,
                'slug' => $unique_slug,
                'status' => 'Y',
                'created_at' => '2022-10-10 13:23:08',
                'updated_at' => '2022-10-10 13:23:08',
            ),
        ));*/

         \DB::table('admins')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Super Admin',
                'email' => 'admin@botsanddrones.in',
                'password' => Hash::make('bots@123#'),
                'created_at' => '2022-10-05 13:23:08',
                'updated_at' => '2022-10-05 13:23:08',
            ),
        ));
    }
}
