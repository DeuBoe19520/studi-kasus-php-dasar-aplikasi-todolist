<?php

/**
* View untuk menampilkan todolist
*/

require_once __DIR__ . '/../Model/TodoList.php';
require_once __DIR__ . '/../BusinessLogic/ShowTodoList.php';
require_once __DIR__ . '/../View/ViewAddTodoList.php';
require_once __DIR__ . '/../View/ViewRemoveTodoList.php';
require_once __DIR__ . '/../Util/Input.php';

function viewShowTodoList()
{
  while (true):
    showTodoList();

    echo "Menu: " . PHP_EOL;
    echo "1. Tambah Todo" . PHP_EOL;
    echo "2. Hapus Todo" . PHP_EOL;
    echo "x. Keluar" . PHP_EOL;

    $choice = strtolower(input("Pilih"));
    if ($choice == '1'):
        viewAddTodoList();
    elseif ($choice == '2'):
        viewRemoveTodoList();
    elseif ($choice == 'x'):
        break;
    else:
        echo "Pilihan tidak dimengerti." . PHP_EOL;
    endif;
  endwhile;

  echo "Sampai Jumpa";
}
 ?>
