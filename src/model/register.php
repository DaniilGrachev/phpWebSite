<?php

require_once __DIR__ . '/../controller/helpers.php';

$name = $_POST['name'] ?? null;
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;
$conf_password = $_POST['conf_password'] ?? null;

addOldValue('name', $name);
addOldValue('email', $email);

//Validation

if (empty($name)){
    addValidationError('name', 'Incorrect Name');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    addValidationError('email', 'Incorrect Email');
}

if (!empty($password))
{
    addValidationError('password', 'Password cannot be empty');
}

if ($password === $conf_password)
{
    addValidationError('conf_password', "Passwords are different");
}

if (!empty($_SESSION['validation'])) {
    redirect('/phpWebSite/src/view/templates/reg.php');
}