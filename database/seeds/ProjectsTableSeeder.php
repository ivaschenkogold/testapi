<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            [
                'author_id' => '1',
                'name' => 'project1',
                'body' => 'body1',
                'status_id' => '1'
            ],
            [
                'author_id' => '2',
                'name' => 'project2',
                'body' => 'body2',
                'status_id' => '2'
            ],
            [
                'author_id' => '3',
                'name' => 'project3',
                'body' => 'body3',
                'status_id' => '3'
            ],
            [
                'author_id' => '4',
                'name' => 'project4',
                'body' => 'body4',
                'status_id' => '4'
            ],
            [
                'author_id' => '5',
                'name' => 'project5',
                'body' => 'body5',
                'status_id' => '1'
            ],
            [
                'author_id' => '6',
                'name' => 'project6',
                'body' => 'body6',
                'status_id' => '2'
            ],
            [
                'author_id' => '7',
                'name' => 'project7',
                'body' => 'body7',
                'status_id' => '3'
            ],
            [
                'author_id' => '8',
                'name' => 'project8',
                'body' => 'body8',
                'status_id' => '4'
            ],
            [
                'author_id' => '9',
                'name' => 'project9',
                'body' => 'body9',
                'status_id' => '1'
            ],
            [
                'author_id' => '10',
                'name' => 'project10',
                'body' => 'body10',
                'status_id' => '2'
            ],
        ]);
    }
}
