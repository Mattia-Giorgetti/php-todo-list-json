<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: X-Requested-With");
$file_url = './data.json';
$file_text = file_get_contents('./data.json');
$todo_list = json_decode($file_text);

if (isset($_POST['newTodoText'])) {
    $newTodo = [
        'text' => $_POST['newTodoText'],
        'done' => false,
    ];
    array_push($todo_list, $newTodo);
    print_r($todo_list);
    file_put_contents($file_url, json_encode($todo_list));
} elseif (isset($_POST['toggleToDoIndex'])) {

    $todoIndex = $_POST['toggleToDoIndex'];
    if ($todo_list[$todoIndex]->done == 1) {
        $todo_list[$todoIndex]->done = '';
    } else {
        $todo_list[$todoIndex]->done = 1;
    }
    file_put_contents($file_url, json_encode($todo_list));
} elseif (isset($_POST['deleteTodoIndex'])) {

    $todoIndex = $_POST['deleteTodoIndex'];
    array_splice($todo_list, $todoIndex, 1);
    file_put_contents($file_url, json_encode($todo_list));
} else {

    header('Content-Type: application/json');
    echo json_encode($todo_list);
}