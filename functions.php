<?php 

    function toDoItemAdd($toDoList, $toDoBar){
        
        $toDoList[] = ['todo' => $toDoBar['toDoBar'], 'done' => false];
        
        file_put_contents('todoitems.json', json_encode($toDoList, JSON_PRETTY_PRINT));

        return $toDoList;
    }

?>