<?php
/**
 * Created by PhpStorm.
 * User: matthew
 * Date: 2015-07-07
 * Time: 11:59 PM
 */

use Illuminate\Database\Seeder;

class TagsTasksTableSeeder extends Seeder {

    public function run()
    {
        // Wipe the table clean before populating
        DB::table('tags')->delete();

        $tasks = array(
            ['id' => 1, 'task_id' => 1, 'tags_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        DB::table('tags')->insert($tasks);
    }

}