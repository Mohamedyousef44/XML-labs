<?php

function createPerson($arr, $xmlDocument)
{
    if (!empty($arr)) {

        $root = $xmlDocument->documentElement;
        $employee = $xmlDocument->createElement('person', ' ');

        $name = $xmlDocument->createElement('name', $arr['name']);
        $phone = $xmlDocument->createElement('phone', $arr['phone']);
        $address = $xmlDocument->createElement('address', $arr['address']);
        $email = $xmlDocument->createElement('email', $arr['email']);

        $employee->appendChild($name);
        $employee->appendChild($phone);
        $employee->appendChild($address);
        $employee->appendChild($email);

        $root->appendChild($employee);

    }
    
}


function updatePerson($arr, $persons, $index)
{

    $person = $persons->item($index);
    $person->getElementsByTagName('name')->item(0)->nodeValue = $arr['name'];
    $person->getElementsByTagName('phone')->item(0)->nodeValue = $arr['phone'];
    $person->getElementsByTagName('address')->item(0)->nodeValue = $arr['address'];
    $person->getElementsByTagName('email')->item(0)->nodeValue = $arr['email'];
}

function displayPerson($person)
{
    $arr = [];
if ($person != null) {
    $arr['name'] = $person->getElementsByTagName('name')->item(0)->nodeValue;
    $arr['phone'] = $person->getElementsByTagName('phone')->item(0)->nodeValue;
    $arr['address'] = $person->getElementsByTagName('address')->item(0)->nodeValue;
    $arr['email'] = $person->getElementsByTagName('email')->item(0)->nodeValue;
}
    return $arr;
}


function nextElement($index, $persons)
{
    if (!empty($persons)) {

        $index = ++$_SESSION['index'];

        if ($index < count($persons)) {
        
            return displayPerson($persons->item($index));

            } else {

                $_SESSION['index'] = $index = 0;
                return displayPerson($persons->item($index));
        }
    }  
}

function previousElement($index, $persons)
{

    if (!empty($persons)) {

        $index = --$_SESSION['index'];

    if ($index < 0) {

        $index = $_SESSION['index'] = $persons->length-1 ;
        return displayPerson($persons->item($index));

        } else {

            return displayPerson($persons->item($index));
        }
    } 
}

function deleteElement($index, $persons)
{
    if (!empty($persons)) {

        $person = $persons->item($index);
        $person->parentNode->removeChild($person);
        $index = --$_SESSION['index'];
        if ($index < 0) {
            $index = $_SESSION['index'] = 0;
        }

    }

}

