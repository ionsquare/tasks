<?php
/**
 * Created by PhpStorm.
 * User: matthew
 * Date: 2015-07-07
 * Time: 9:58 PM
 */

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder {

    public function run()
    {
        // Wipe the table clean before populating
        DB::table('tasks')->delete();

        $projects = array(
            [   'id' => 1,
                'name' => 'Sample Task',
                'slug' => 'sample-task',
                'description' => 'Sample task description',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
        );

        DB::table('tasks')->insert($projects);
    }

}