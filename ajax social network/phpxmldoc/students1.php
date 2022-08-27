<?php
$students = array(
    array("name"=>"Ron", "email"=>"ron@gmail.com", "phone"=>"0000000000"), 
    array("name"=>"Harry", "email"=>"harry@gmail.com", "phone"=>"0000000000"),
    array("name"=>"Hermione", "email"=>"hermione@gmail.com", "phone"=>"0000000000"),
);
$doc = new DOMDocument();
$doc->formatOutput = true;

foreach($students as $student){
    $root = $doc->createElement('Student');
    $root = $doc->appendChild($root);
    
    $name_element = $doc->createElement('Name');
    $name_element->nodeValue=$student["name"];
    $root->appendChild($name_element);

    $email_element = $doc->createElement('Email');
    $email_element->nodeValue=$student["email"];
    $root->appendChild($email_element);

    $phone_element = $doc->createElement('Phone');
    $phone_element->nodeValue=$student["phone"];
    $root->appendChild($phone_element);
}

echo $doc->saveXML();

?>