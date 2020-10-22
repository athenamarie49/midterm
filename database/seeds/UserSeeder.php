<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'lname' => 'Alombro',
                'fname' => 'Athena Marie',
                'address' => 'Cahayag, Tubigon',
                'phone' => '09341423453',
                'email' => 'athena@gmail.com',
                'password' => bcrypt('password123')
            ],

            [
                'lname' => 'Alombro',
                'fname' => 'Fatima',
                'address' => 'Pandan, Tubigon',
                'phone' => '09343421232',
                'email' => 'fatima@gmail.com',
                'password' => bcrypt('password123')
            ],

            [
                'lname' => 'Guinea',
                'fname' => 'Joel',
                'address' => 'Cabulijan, Tubigon',
                'phone' => '09232432234',
                'email' => 'joel@gmail.com',
                'password' => bcrypt('password123')

            ]
        ];

        foreach($data as $usr){
            \App\User::create($usr);
        }
    }
}
