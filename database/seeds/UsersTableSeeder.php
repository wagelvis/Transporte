<?php

/**
 * Created by PhpStorm.
 * User: wagelvis
 * Date: 11/6/16
 * Time: 1:29 PM
 */

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('users')->insert(array (
            'name' => 'Wilmer Hernández',
            'email' => 'wilmer@nova.com.ve',
            'password' => \Hash::make('12345678')
        ));
    }
}