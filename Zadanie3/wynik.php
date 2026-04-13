<?php

echo "Wybrane opcje:<br>";
echo "Owoc: " . ($_POST['fruit'] ?? 'brak') . "<br>";
echo "Wykształcenie: " . ($_POST['edu'] ?? 'nie wybrano') . "<br>";

if (!empty($_POST['hobby'])) {
    echo "Hobby: " .implode(", ", $_POST['hobby']);
} else {
    echo "Hobby: nie wybrano żadnego.";
}

?>