<?php

/**
* Menambah TodoList
*/

function addTodoList(string $todo)
{
  global $todos;

  $number = sizeof($todos) + 1;

  $todos[$number] = $todo;
}
 ?>
