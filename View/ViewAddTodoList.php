<?php

/**
* menampilkan addTodoList
*/

require_once __DIR__ . '/../Model/TodoList.php';
require_once __DIR__ . '/../BusinessLogic/AddTodoList.php';
require_once __DIR__ . '/../Util/Input.php';

function viewAddTodoList()
{
  echo "Tambah Todo" . PHP_EOL;

  $input = input("Input Todo ('x' untuk batal)");
  $choice = strtolower($input);
  if ($choice == 'x'):
    echo "Batal menambah Todo" . PHP_EOL;
  else:
    addTodoList($input);
  endif;
}
 ?>
