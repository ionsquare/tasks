<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->unsigned()->nullable();
            $table->foreign('parent_id')->references('id')->on('tasks')->onDelete('cascade');
            $table->string('name')->default('');
            $table->string('slug')->default('');
            $table->text('description')->default('');
            $table->integer('priority')->default(100);
            $table->integer('size')->default(60);
            $table->timestamp('snooze_until')->nullable();
            $table->timestamp('due_at')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();
        });

        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('');
            $table->string('slug')->default('');
            $table->timestamps();
        });

        Schema::create('tags_tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('task_id')->unsigned()->default(0);
            $table->foreign('task_id')->references('id')->on('tasks');
            $table->integer('tag_id')->unsigned()->default(0);
            $table->foreign('tag_id')->references('id')->on('tags');
            $table->timestamps();
        });

        Schema::create('logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->unsigned()->nullable();
            $table->foreign('parent_id')->references('id')->on('tasks')->onDelete('cascade');
            $table->string('name')->default('');
            $table->string('slug')->default('');
            $table->text('description')->default('');
            $table->integer('time_spent')->default(60);
            $table->timestamps();
        });

        Schema::create('tags_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('log_id')->unsigned()->default(0);
            $table->foreign('log_id')->references('id')->on('logs');
            $table->integer('tag_id')->unsigned()->default(0);
            $table->foreign('tag_id')->references('id')->on('tags');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tags_logs');
        Schema::drop('logs');
        Schema::drop('tags_tasks');
        Schema::drop('tags');
        Schema::drop('tasks');
    }
}
