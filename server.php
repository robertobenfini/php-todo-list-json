<?php

    //recupero il contenuto del file json
    $string = file_get_contents('data/todo_list.json');

    //lo converto in modo che sia visibile da php come array
    $array = json_decode($string, true);
    
    if(isset($_POST['todoItem'])){
        
        $new_item=[
           'text' => $_POST['todoItem'],
           'done' => 'true'
        ];
        
        array_push($array, $new_item);

        $array_encoded = json_encode($array);

        file_put_contents('data/todo_list.json', $array_encoded);
    }

    header('Content-Type: application/json');
    
    //lo converto in modo che sia visibile da vue come array di oggetti
    echo json_encode($array);
?>