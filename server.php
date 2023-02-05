<?php

    include __DIR__ .'/functions.php';

    $string = file_get_contents('todoitems.json');

    $toDoList = json_decode($string, true);



    // if(isset($_POST['toDoAdd'])){
    //     $addedItem = $_POST['toDoAdd'];

    //     $toDoArray = [
    //         "todo" => $addedItem,
    //         "done" => false,
    //     ];

    //     $toDoList[] = $toDoArray;

    //     file_put_contents('todoitems.json', json_encode($toDoList));
    // }



    if(isset($_POST['toDoBar'])){
        $toDoList = toDoItemAdd($toDoList, $_POST);
    }



    header('Content-Type: application/json');
    
    echo json_encode($toDoList);
?>