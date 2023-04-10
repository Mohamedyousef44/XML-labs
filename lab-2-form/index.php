<?php

require_once('functions.php');

session_start();
$index = isset($_SESSION['index']) ? $_SESSION['index'] : 0 ;

$xmlDocument = new DOMDocument();

$xmlDocument->load("person.xml");

$persons = $xmlDocument->getElementsByTagName('person');

$person =[];


    if (array_key_exists('next', $_POST)) {
    
        $person = nextElement($index, $persons);
    
    }elseif (array_key_exists('previous', $_POST)) {
    
        $person = previousElement($index, $persons);
    
    }elseif (array_key_exists('insert', $_POST)) {
    
        createPerson($_POST, $xmlDocument);
        $xmlDocument->save("person.xml");
        $index = ++$_SESSION['index'];
        $person = displayPerson($persons->item($index));
    
    }elseif (array_key_exists('update', $_POST)) {

        updatePerson($_POST, $persons, $index);
        $xmlDocument->save("person.xml");
        $person = displayPerson($persons->item($index));
        
    }elseif (array_key_exists('delete', $_POST)) {
    
        deleteElement($index, $persons);
        $xmlDocument->save("person.xml");
        $person = displayPerson($persons->item($index));
    
    }else {
    
        $person = displayPerson($persons->item($index));
        $_SESSION['index'] = $index;
    
    }



require_once('./form.php');



