<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $task = new Task();
        $task->id = 1;
        $task->title = 'Task 1';
        $task->content = 'Content of Task 1';
        $task->save();
    }
}
