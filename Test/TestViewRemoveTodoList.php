<?php

require_once '../Model/TodoList.php';
require_once '../BusinessLogic/AddTodoList.php';
require_once '../View/ViewAddTodoList.php';
require_once '../View/ViewRemoveTodoList.php';
require_once '../BusinessLogic/ShowTodoList.php';
require_once '../BusinessLogic/RemoveTodoList.php';

viewAddTodoList();

showTodoList();

viewRemoveTodoList();
 ?>
