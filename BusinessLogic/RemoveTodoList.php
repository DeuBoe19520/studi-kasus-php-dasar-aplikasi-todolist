<?php
/**
* Menghapus TodoList
*/

function RemoveTodoList(string $number): bool
{
  global $todos;

  $input = (int) $number;

  if ($input > sizeof($todos)):
    return false;
  endif;

  for ($i=$input; $i < sizeof($todos); $i++):
    $todos[$i] = $todos[$i + 1];
  endfor;
  unset($todos[sizeof($todos)]);

  return true;
}


 ?>
