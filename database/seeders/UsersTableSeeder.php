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
                'id' => 2,
                'role_id' => 1,
                'name' => 'hamza',
                'email' => 'hamza@gmail.com',
                'avatar' => 'users\\March2021\\xMjRjtRO8eVsWQhgkg4f.JPG',
                'email_verified_at' => NULL,
                'password' => '$2y$10$PLT.MWSleA4Mh9fC.HTHk.hVPOobv.TxOdloLLctUbrMOMKyCDNzy',
                'remember_token' => 'H5EMPnSW4bPOMHZIIyQwswjmwLokXGXfQYdI6DP6ZmzMrVodczKwD297cNi1',
                'settings' => '{"locale":"en"}',
                'created_at' => '2021-03-26 17:06:47',
                'updated_at' => '2021-03-27 08:03:29',
            ),
            1 => 
            array (
                'id' => 3,
                'role_id' => 1,
                'name' => 'Muhammad Awab',
                'email' => 'awab@gmail.com',
                'avatar' => 'users\\March2021\\ZfjCFROP4X4oRLA5FkQU.JPG',
                'email_verified_at' => NULL,
                'password' => '$2y$10$K2AisRnbY3muGpRgq8irTudNIDVLaIC0OjUhSnMyGsq4GPBj0WbBm',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2021-03-27 08:02:41',
                'updated_at' => '2021-03-27 08:02:41',
            ),
            2 => 
            array (
                'id' => 4,
                'role_id' => 1,
                'name' => 'zeeshan',
                'email' => 'zeeshan@gmail.com',
                'avatar' => 'users\\March2021\\2WidNkz1meiyrV6880Lg.JPG',
                'email_verified_at' => NULL,
                'password' => '$2y$10$vczrQaO8K.TwYoCiFFtUFeKC154R7SVO7ejqMJwx7ENgSciVxHgfK',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2021-03-27 08:04:26',
                'updated_at' => '2021-03-27 09:47:40',
            ),
            3 => 
            array (
                'id' => 5,
                'role_id' => 2,
                'name' => 'haris',
                'email' => 'haris@gmail.com',
                'avatar' => 'users\\March2021\\A54Js13w3whPlBfsfCvo.JPG',
                'email_verified_at' => NULL,
                'password' => '$2y$10$2cYi9wLMHj7Ns2TlPiqVFO6IYGZpBXrcCCMdgtdVxILNCgLkiU0g2',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2021-03-27 08:05:22',
                'updated_at' => '2021-03-27 08:05:22',
            ),
        ));
        
        
    }
}