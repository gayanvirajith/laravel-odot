<?php

class TodoListTableSeeder extends Seeder {

  public function run() {

    DB::table('todo_lists')->insert(
      array(
        array(
          'id' => 1,
          'name' => 'List one'
        ),
        array(
          'id' => 2,
          'name' => 'List two'
        )
      )
    );  
  }
}