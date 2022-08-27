<?php
$name0 = "Ron";
$email0 = "ron@gmail.com";
$phone_no0 ="000000000";

$name1 = "Harry";
$email1 = "harry@gmail.com";
$phone_no1 ="000000000";

$name2 = "Hermione";
$email2 = "hermione@gmail.com";
$phone_no2 ="000000000";

$doc = new DOMDocument();
$doc->formatOutput = true;

$root = $doc->createElement('Student');
$root = $doc->appendChild($root);

$name_element = $doc->createElement('Name');
$name_element->nodeValue=$name0;
$root->appendChild($name_element);

$email_element = $doc->createElement('Email');
$email_element->nodeValue=$email0;
$root->appendChild($email_element);

$phone_element = $doc->createElement('Phone');
$phone_element->nodeValue=$phone_no0;
$root->appendChild($phone_element);

$root = $doc->createElement('Student');
$root = $doc->appendChild($root);

$name_element = $doc->createElement('Name');
$name_element->nodeValue=$name1;
$root->appendChild($name_element);

$email_element = $doc->createElement('Email');
$email_element->nodeValue=$email1;
$root->appendChild($email_element);

$phone_element = $doc->createElement('Phone');
$phone_element->nodeValue=$phone_no1;
$root->appendChild($phone_element);

$root = $doc->createElement('Student');
$root = $doc->appendChild($root);

$name_element = $doc->createElement('Name');
$name_element->nodeValue=$name2;
$root->appendChild($name_element);

$email_element = $doc->createElement('Email');
$email_element->nodeValue=$email2;
$root->appendChild($email_element);

$phone_element = $doc->createElement('Phone');
$phone_element->nodeValue=$phone_no2;
$root->appendChild($phone_element);

echo $doc->saveXML();

?>