<?php
/**
 * Created by PhpStorm.
 * User: matthew
 * Date: 2015-07-07
 * Time: 11:47 PM
 */

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder {

    public function run()
    {
        // Wipe the table clean before populating
        DB::table('tags')->delete();

        $tasks = array(
            ['id' => 1, 'name' => 'Default', 'slug' => 'default', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        DB::table('tags')->insert($tasks);
    }

}