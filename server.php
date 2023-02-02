<?php
    $string = file_get_contents('todoitems.json');

    $toDoList = json_decode($string, true);

    if(isset($_POST['addItem'])){
        $addedItem = $_POST['addItem'];

        $toDoArray = [
            "todo" => $addedItem,
            "done" => false,
        ];

        $toDoArray = $_POST;

        $toDoItems[] = $toDoBar;

        file_put_contents('todoitems.json', json_encode($toDoItems));
    }

    header('Content-Type: application/json');
    
    echo json_encode($string);
?>