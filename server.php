<?php

    //recupero il contenuto del file json
    $string = file_get_contents('data/todo_list.json');

    //lo converto in modo che sia visibile da php come array
    $array = json_decode($string, true);
    
    
?>