<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'email'=>'ana@gmail.com',
                'password'=>'msdjhjjksdjksdsdj',
                'phone' => '09803823734'
            ],
            [
                'email'=>'ana@gmail2.com',
                'password'=>'msdjhjjksdjksdsdj',
                'phone' => '09803823734'
            ],
            [
                'email'=>'ana@gmail3.com',
                'password'=>'msdjhjjksdjksdsdj',
                'phone' => '09803823734'
            ],
            [
                'email'=>'ana@gmail4.com',
                'password'=>'msdjhjjksdjksdsdj',
                'phone' => '09803823734'
            ],
            [
                'email'=>'ana@gmail5.com',
                'password'=>'msdjhjjksdjksdsdj',
                'phone' => '09803823734'
            ],
            [
                'email'=>'ana@gmail6.com',
                'password'=>'msdjhjjksdjksdsdj',
                'phone' => '09803823734'
            ],
            [
                'email'=>'ana@gmail7.com',
                'password'=>'msdjhjjksdjksdsdj',
                'phone' => '09803823734'
            ],
            [
                'email'=>'ana@gmail8.com',
                'password'=>'msdjhjjksdjksdsdj',
                'phone' => '098303823734'
            ],
            [
                'email'=>'ana@gmail9.com',
                'password'=>'msdjhjjksdjksdsdj',
                'phone' => '0912803823734'
            ],
            [
                'email'=>'ana@gmail10.com',
                'password'=>'msdjhjjksdjksdsdj',
                'phone' => '09801223734'
            ],
        ]);

    }
}
