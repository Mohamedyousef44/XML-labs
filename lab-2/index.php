<?php

require_once('functions.php');

$arr = ['name'=>'mohamed' , 'phone'=>'01285189755' , 'address'=>'sidibeshr', 'email'=>'20@gmail.com'];
$xmlDocument = new DOMDocument();
$xmlDocument->load("person.xml");

createPerson($arr, $xmlDocument);

$xmlDocument->save("person.xml");


$persons = $xmlDocument->getElementsByTagName('person'); //return dom node list with all persons tags

$arrOfPersons = [];

foreach ($persons as $person) {
    $arrOfPersons[] = $person ;
}


var_dump(displayPerson($arrOfPersons[0]));





