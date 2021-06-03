<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customers')->delete();
        
        \DB::table('customers')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Yadev Jayachandran',
                'email' => 'yadev64@gmail.com',
                'phone' => 12345678,
                'created_at' => '2021-05-29 15:20:59',
                'updated_at' => '2021-05-29 15:20:59',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'John Doe',
                'email' => 'john@gmail.com',
                'phone' => 12345678,
                'created_at' => '2021-05-29 15:24:07',
                'updated_at' => '2021-05-29 15:24:07',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Mandy Doe',
                'email' => 'mandy@gmail.com',
                'phone' => 22345675,
                'created_at' => '2021-05-29 15:26:06',
                'updated_at' => '2021-05-29 15:26:06',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Manu',
                'email' => 'manu@man.in',
                'phone' => 5398345,
                'created_at' => '2021-05-30 14:08:53',
                'updated_at' => '2021-05-30 14:08:53',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Yadev Jayachandran',
                'email' => 'yadev64@gmail.com',
                'phone' => 343525245,
                'created_at' => '2021-05-30 17:19:44',
                'updated_at' => '2021-05-30 17:19:44',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Yadev Jayachandran',
                'email' => 'yadev64@gmail.com',
                'phone' => 42552,
                'created_at' => '2021-05-30 17:20:02',
                'updated_at' => '2021-05-30 17:20:02',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'Tom',
                'email' => 'tom@xyz.com',
                'phone' => 23424545,
                'created_at' => '2021-05-30 17:48:56',
                'updated_at' => '2021-05-30 17:48:56',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'Dany',
                'email' => 'daniel@xyz.com',
                'phone' => 23423495,
                'created_at' => '2021-05-30 18:05:18',
                'updated_at' => '2021-05-30 18:05:18',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'Frontier',
                'email' => 'frontier@gmail.com',
                'phone' => 32422545,
                'created_at' => '2021-06-01 07:40:05',
                'updated_at' => '2021-06-01 07:40:05',
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'Dani',
                'email' => 'dan@gmail.com',
                'phone' => 349204,
                'created_at' => '2021-06-01 07:51:43',
                'updated_at' => '2021-06-01 07:51:43',
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'Samuel L Jackson',
                'email' => 'sam@sam.co',
                'phone' => 42432347,
                'created_at' => '2021-06-01 18:23:06',
                'updated_at' => '2021-06-01 18:23:06',
            ),
            11 => 
            array (
                'id' => 13,
                'name' => 'Tomy Hilfigher',
                'email' => 'hello@tomyh.com',
                'phone' => 24897340,
                'created_at' => '2021-06-01 18:24:50',
                'updated_at' => '2021-06-01 18:24:50',
            ),
            12 => 
            array (
                'id' => 14,
                'name' => 'Ron Wilson',
                'email' => 'ron@ron.co',
                'phone' => 2348943,
                'created_at' => '2021-06-02 01:45:03',
                'updated_at' => '2021-06-02 01:45:03',
            ),
            13 => 
            array (
                'id' => 15,
                'name' => 'Donald',
                'email' => 'donald@gmail.com',
                'phone' => 42394234,
                'created_at' => '2021-06-02 19:36:31',
                'updated_at' => '2021-06-02 19:36:31',
            ),
            14 => 
            array (
                'id' => 16,
                'name' => 'Abhiram',
                'email' => 'abhi@gmail.com',
                'phone' => 342525425,
                'created_at' => '2021-06-02 19:40:05',
                'updated_at' => '2021-06-02 19:40:05',
            ),
            15 => 
            array (
                'id' => 17,
                'name' => 'James',
                'email' => 'jblancing@jbl.com',
                'phone' => 32252524,
                'created_at' => '2021-06-02 19:54:26',
                'updated_at' => '2021-06-02 19:54:26',
            ),
            16 => 
            array (
                'id' => 18,
                'name' => 'Ferrari',
                'email' => 'fri@ferrari.com',
                'phone' => 2328542,
                'created_at' => '2021-06-02 19:55:27',
                'updated_at' => '2021-06-02 19:55:27',
            ),
            17 => 
            array (
                'id' => 19,
                'name' => 'Rony',
                'email' => 'ron@sanandreas.com',
                'phone' => 423864239,
                'created_at' => '2021-06-02 19:57:51',
                'updated_at' => '2021-06-02 19:57:51',
            ),
            18 => 
            array (
                'id' => 20,
                'name' => 'Yadev',
                'email' => 'yadev64@gmail.com',
                'phone' => 23482634,
                'created_at' => '2021-06-02 20:01:22',
                'updated_at' => '2021-06-02 20:01:22',
            ),
            19 => 
            array (
                'id' => 21,
                'name' => 'Someone',
                'email' => 'adkja@afad.com',
                'phone' => 3423432,
                'created_at' => '2021-06-02 20:04:26',
                'updated_at' => '2021-06-02 20:04:26',
            ),
            20 => 
            array (
                'id' => 22,
                'name' => 'Yadev',
                'email' => 'hello@yadev.co',
                'phone' => 34282433,
                'created_at' => '2021-06-02 20:05:11',
                'updated_at' => '2021-06-02 20:05:11',
            ),
            21 => 
            array (
                'id' => 23,
                'name' => 'yadev',
                'email' => 'yadev@gmail.com',
                'phone' => 2348328,
                'created_at' => '2021-06-02 20:06:54',
                'updated_at' => '2021-06-02 20:06:54',
            ),
            22 => 
            array (
                'id' => 24,
                'name' => 'Tomy',
                'email' => 'tom@tom.com',
                'phone' => 23423333,
                'created_at' => '2021-06-02 20:07:53',
                'updated_at' => '2021-06-02 20:07:53',
            ),
            23 => 
            array (
                'id' => 26,
                'name' => 'Yadev Jayachandran',
                'email' => 'yadev64@gmail.com',
                'phone' => 3234234,
                'created_at' => '2021-06-02 20:40:29',
                'updated_at' => '2021-06-02 20:40:29',
            ),
            24 => 
            array (
                'id' => 27,
                'name' => 'Daniel',
                'email' => 'dan@gmail.com',
                'phone' => 5345334,
                'created_at' => '2021-06-03 00:29:11',
                'updated_at' => '2021-06-03 00:29:11',
            ),
            25 => 
            array (
                'id' => 28,
                'name' => 'Dan',
                'email' => 'daniel@mail.com',
                'phone' => 34535445,
                'created_at' => '2021-06-03 01:47:33',
                'updated_at' => '2021-06-03 01:47:33',
            ),
        ));
        
        
    }
}