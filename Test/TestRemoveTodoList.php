<?php

require_once '../Model/TodoList.php';
require_once '../BusinessLogic/AddTodoList.php';
require_once '../BusinessLogic/ShowTodoList.php';
require_once '../BusinessLogic/RemoveTodoList.php';

addTodoList('Coba 1');
addTodoList('Coba 2');
addTodoList('Coba 3');
addTodoList('Coba 4');
addTodoList('Coba 5');

showTodoList();

removeTodoList(2);

showTodoList();

removeTodoList(4);

showTodoList();

$success = removeTodoList(4);
var_dump($success);

showTodoList();


 ?>
