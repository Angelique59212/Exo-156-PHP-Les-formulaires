<?php
echo "Prénom: " . $_GET['firstName']. "<br>";
$name =ucfirst($_GET['firstName']);
if ($name === 'james') {
    echo "Bond, James Bond";
}
else {
    echo "Bonjour $name";
}