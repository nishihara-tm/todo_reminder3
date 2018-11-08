<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->call([
//        UsersTableSeeder::class,
//        TaskUserTableSeeder::class,
//        RemindersTableSeeder::class,
//        TasksTableSeeder::class,
      ]);
      factory(App\TaskUser::class,3)->create()->each(function($task_user){
        factory(App\Reminder::class)->create(['task_user_id' => $task_user->id]);
      });
    }
}
