<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("tasks")->insert([
            [
                'author_id' => '1',
                'project_id' => '1',
                'name' => 'name1',
                'description' => 'description1',
                'mark' => '1',
                'status_id' => '1',
            ],
            [
                'author_id' => '2',
                'project_id' => '2',
                'name' => 'name1',
                'description' => 'description1',
                'mark' => '2',
                'status_id' => '2',
            ],[
                'author_id' => '3',
                'project_id' => '3',
                'name' => 'name1',
                'description' => 'description1',
                'mark' => '3',
                'status_id' => '2',
            ],[
                'author_id' => '4',
                'project_id' => '4',
                'name' => 'name1',
                'description' => 'description1',
                'mark' => '2',
                'status_id' => '4',
            ],[
                'author_id' => '5',
                'project_id' => '5',
                'name' => 'name1',
                'description' => 'description1',
                'mark' => '1',
                'status_id' => '1',
            ],[
                'author_id' => '6',
                'project_id' => '6',
                'name' => 'name1',
                'description' => 'description1',
                'mark' => '2',
                'status_id' => '4',
            ],[
                'author_id' => '7',
                'project_id' => '7',
                'name' => 'name1',
                'description' => 'description1',
                'mark' => '4',
                'status_id' => '3',
            ],[
                'author_id' => '8',
                'project_id' => '8',
                'name' => 'name1',
                'description' => 'description1',
                'mark' => '5',
                'status_id' => '4',
            ],[
                'author_id' => '9',
                'project_id' => '9',
                'name' => 'name1',
                'description' => 'description1',
                'mark' => '5',
                'status_id' => '1',
            ],[
                'author_id' => '10',
                'project_id' => '10',
                'name' => 'name1',
                'description' => 'description1',
                'mark' => '2',
                'status_id' => '3',
            ],[
                'author_id' => '11',
                'project_id' => '1',
                'name' => 'name1',
                'description' => 'description1',
                'mark' => '1',
                'status_id' => '2',
            ],[
                'author_id' => '12',
                'project_id' => '2',
                'name' => 'name1',
                'description' => 'description1',
                'mark' => '3',
                'status_id' => '3',
            ],[
                'author_id' => '13',
                'project_id' => '3',
                'name' => 'name1',
                'description' => 'description1',
                'mark' => '1',
                'status_id' => '1',
            ],[
                'author_id' => '14',
                'project_id' => '4',
                'name' => 'name1',
                'description' => 'description1',
                'mark' => '1',
                'status_id' => '1',
            ],[
                'author_id' => '15',
                'project_id' => '5',
                'name' => 'name1',
                'description' => 'description1',
                'mark' => '1',
                'status_id' => '1',
            ],[
                'author_id' => '1',
                'project_id' => '6',
                'name' => 'name1',
                'description' => 'description1',
                'mark' => '1',
                'status_id' => '1',
            ],[
                'author_id' => '2',
                'project_id' => '7',
                'name' => 'name1',
                'description' => 'description1',
                'mark' => '1',
                'status_id' => '1',
            ],[
                'author_id' => '3',
                'project_id' => '8',
                'name' => 'name1',
                'description' => 'description1',
                'mark' => '1',
                'status_id' => '1',
            ],[
                'author_id' => '4',
                'project_id' => '9',
                'name' => 'name1',
                'description' => 'description1',
                'mark' => '1',
                'status_id' => '1',
            ],[
                'author_id' => '5',
                'project_id' => '10',
                'name' => 'name1',
                'description' => 'description1',
                'mark' => '1',
                'status_id' => '1',
            ],
        ]);
    }
}
