<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_user')->insert([
            [
                'project_id' => '1',
                'user_id' => '1'
            ],
            [
                'project_id' => '2',
                'user_id' => '2'
            ],
            [
                'project_id' => '3',
                'user_id' => '3'
            ],
            [
                'project_id' => '4',
                'user_id' => '4'
            ],
            [
                'project_id' => '5',
                'user_id' => '5'
            ],
            [
                'project_id' => '6',
                'user_id' => '6'
            ],
            [
                'project_id' => '7',
                'user_id' => '7'
            ],
            [
                'project_id' => '8',
                'user_id' => '8'
            ],
            [
                'project_id' => '9',
                'user_id' => '9'
            ],
            [
                'project_id' => '10',
                'user_id' => '10'
            ],
            [
                'project_id' => '11',
                'user_id' => '11'
            ],
            [
                'project_id' => '12',
                'user_id' => '12'
            ],
            [
                'project_id' => '13',
                'user_id' => '13'
            ],
            [
                'project_id' => '14',
                'user_id' => '14'
            ],
            [
                'project_id' => '15',
                'user_id' => '15'
            ],
        ]);
    }
}
