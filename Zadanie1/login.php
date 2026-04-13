<?php

$login = $_POST['login'];
$password = $_POST['password'];
$remember = isset($_POST['remember']) ? "Zaznaczono" : "Nie zaznaczono";

echo "Login: " .$login . "<br>";
echo "Hasło: " .$password . "<br>";
echo "Checkbox: " .$remember;

?>
