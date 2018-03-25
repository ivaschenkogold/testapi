<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('task_user')->insert([
            [
                'task_id' => '1',
                'user_id' => '1'
            ],
            [
                'task_id' => '2',
                'user_id' => '2'
            ],
            [
                'task_id' => '3',
                'user_id' => '3'
            ],
            [
                'task_id' => '4',
                'user_id' => '4'
            ],
            [
                'task_id' => '5',
                'user_id' => '5'
            ],
            [
                'task_id' => '6',
                'user_id' => '6'
            ],
            [
                'task_id' => '7',
                'user_id' => '7'
            ],
            [
                'task_id' => '8',
                'user_id' => '8'
            ],
            [
                'task_id' => '9',
                'user_id' => '9'
            ],
            [
                'task_id' => '10',
                'user_id' => '10'
            ],
        ]);
    }
}
