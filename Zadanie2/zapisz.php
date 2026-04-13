<?php

$nick = $_POST['nick'];
$comment = $_POST['comment'];

echo "<p>Autor: <b>" .$nick . "</b></p>";
echo "<p>Komentarz (HTML): <b>" .$comment . "</b></p>";
echo "<p>Komentarz (Tekst): " . $comment . "</p>";

?>