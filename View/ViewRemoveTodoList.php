<?php

/**
* view untuk removeTodoList
*/

require_once __DIR__ . '/../Model/TodoList.php';
require_once __DIR__ . '/../BusinessLogic/RemoveTodoList.php';
require_once __DIR__ . '/../Util/Input.php';

function viewRemoveTodoList()
{
  echo "Hapus Todo" . PHP_EOL;
  $input = input("Input nomor Todo ('x' untuk batal)");
  $choice = strtolower($input);
  if ($choice == 'x'):
    echo "Batal menghapus Todo.";
  else:
    $success = removeTodoList($input);
    if ($success):
      echo "Sukses menghapus Todo nomor $input" . PHP_EOL;
    else:
      echo "Gagal menghapus Todo nomor $input" . PHP_EOL;
    endif;
  endif;
}
 ?>
