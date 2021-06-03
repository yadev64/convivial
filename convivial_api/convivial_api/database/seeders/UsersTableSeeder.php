<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Yadev Jayachandran',
                'email' => 'yadev64@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$XZvK0T7Rzs4rmwe18rT8Ue.26ojXf29Azbr/pU79rR2DD05PRcPW.',
                'remember_token' => NULL,
                'created_at' => '2021-05-29 20:36:00',
                'updated_at' => '2021-05-29 20:36:00',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'John Doe',
                'email' => 'john@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$5NeyXypav/IIaPcUmC4ZVeeNmN0fFmuopZZrWqslZYx38rTyQe9he',
                'remember_token' => NULL,
                'created_at' => '2021-05-29 20:36:21',
                'updated_at' => '2021-05-29 20:36:21',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Xamarin',
                'email' => 'xam@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$gvDm2bxfwFxFWPJ0NTyWT.JcT4ONqjZp91ZfLdwYfYOKNJlpIInFS',
                'remember_token' => NULL,
                'created_at' => '2021-05-29 20:36:37',
                'updated_at' => '2021-05-29 20:36:37',
            ),
        ));
        
        
    }
}