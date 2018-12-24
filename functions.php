<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

define('DATA_FILE_NAME', 'users.txt');

$db= new PDO('mysql:host=localhost;dbname=test','root','root');



function checkEmpty($fieldName, $errorMessage) {
	global $values, $errors;

	if (empty($_POST[$fieldName])) {
		$errors[$fieldName] = $errorMessage;
	} else {
		$values[$fieldName] = $_POST[$fieldName];
	}
}

function saveUser($values) {
    global $db;
    $sql='INSERT INTO users (name, email, password)
VALUES (:name,:email,:password)';
    $querry = $db->prepare($sql);
    $querry ->execute([
        'name'=> $values['name'],
        'email'=> $values['email'],
        'password'=> $values['password']
    ]);
	$file = fopen(DATA_FILE_NAME, 'a');
	fputs($file, implode("\t", $values) . "\n");
	fclose($file);
}
