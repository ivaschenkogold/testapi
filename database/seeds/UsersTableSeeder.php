<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'User1',
                'surname' => 'Sur1',
                'email' => 'mail1@mail.ua',
            ],
            [
                'name' => 'User2',
                'surname' => 'Sur2',
                'email' => 'mail2@mail.ua',
            ],
            [
                'name' => 'User3',
                'surname' => 'Sur3',
                'email' => 'mail3@mail.ua',
            ],
            [
                'name' => 'User4',
                'surname' => 'Sur4',
                'email' => 'mail4@mail.ua',
            ],
            [
                'name' => 'User5',
                'surname' => 'Sur5',
                'email' => 'mail5@mail.ua',
            ],
            [
                'name' => 'User6',
                'surname' => 'Sur6',
                'email' => 'mail6@mail.ua',
            ],
            [
                'name' => 'User7',
                'surname' => 'Sur7',
                'email' => 'mail7@mail.ua',
            ],
            [
                'name' => 'User8',
                'surname' => 'Sur8',
                'email' => 'mail8@mail.ua',
            ],
            [
                'name' => 'User9',
                'surname' => 'Sur9',
                'email' => 'mail9@mail.ua',
            ],
            [
                'name' => 'User10',
                'surname' => 'Sur10',
                'email' => 'mail10@mail.ua',
            ],
            [
                'name' => 'User11',
                'surname' => 'Sur11',
                'email' => 'mail11@mail.ua',
            ],
            [
                'name' => 'User12',
                'surname' => 'Sur12',
                'email' => 'mail12@mail.ua',
            ],
            [
                'name' => 'User13',
                'surname' => 'Sur13',
                'email' => 'mail13@mail.ua',
            ],
            [
                'name' => 'User14',
                'surname' => 'Sur14',
                'email' => 'mail14@mail.ua',
            ],
            [
                'name' => 'User15',
                'surname' => 'Sur15',
                'email' => 'mail15@mail.ua',
            ],
        ]);
    }
}
