<?php

/*
* Menampilkan todo dalam list
*/

function showTodoList()
{
  global $todos;

  echo "TODOLIST" . PHP_EOL;

  foreach ($todos as $number => $value):
    echo "$number. $value" . PHP_EOL;
  endforeach;

echo "" . PHP_EOL;
}
 ?>
