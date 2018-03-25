<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(ProjectUserTableSeeder::class);
        $this->call(StatusesTableSeeder::class);
        $this->call(TasksTableSeeder::class);
        $this->call(TaskUserTableSeeder::class);
    }
}