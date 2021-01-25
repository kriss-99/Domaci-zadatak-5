<?php

    $todos = json_decode(file_get_contents('../todo.db'), true);

    if(isset($_POST['tekst']) && $_POST['tekst']!=='')
    {
        $tekst = $_POST['tekst'];
    }
    
    if(isset($_POST['opis']) && $_POST['opis']!=='')
    {
        $opis = $_POST['opis'];
    }
     
    if(isset($_POST['index']) && is_numeric($_POST['index']))
    {
        $index = $_POST['index'];  
    } 
    else
    { 
        exit("Error"); 
    }
    
    $todos[$index]['opis'] = $opis;
    $todos[$index]['tekst'] = $tekst;

    if(file_put_contents('../todo.db', json_encode($todos)))
    {
        exit("OK");
    }
    else
    { 
        exit("Error file_put_contents"); 
    }
?>