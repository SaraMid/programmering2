<?php
include("databaselogin.php");


//echo "Der er forbindelse til bogbehandling.php<br>";
$titel = $_POST['titel'];
$aarstal = $_POST['aarstal'];
$genre = $_POST['genre'];
$beskrivelse = $_POST['beskrivelse'];
$sprog = $_POST['sprog'];


$errorsFound = [];
if (empty($titel)) {
    $errorsFound['titel'] = 'Angiv titel';
}

if (empty($forfatter) {
    $errorsFound['forfatter'] = 'Angiv forfatter';
}

if (empty($aarstal) {
    $errorsFound['aarstal'] = 'Angiv årstal';
}
if (empty($spilletid)) {
    $errorsFound['genre'] = 'Angiv Genre';
}

if (empty($beskrivelse)) {
    $errorsFound['beskrivelse'] = 'Angiv en beskrivelse af bogen';
}
if (empty($sprog)) {
    $errorsFound['sprog'] = 'Angiv bogens sprog';
}

$_SESSION['formErrors'] = $errorsFound;
$_SESSION['lastInput'] = $_POST;
if (!empty($errorsFound)) {
    header('Location: index.php');
}
else {
    $sql = "INSERT INTO bogdatabase (titel, forfatter, aarstal, beskrivelse, genre, sprog) VALUES ('".$titel."', '".$forfatter."', '".$aarstal."', '".$beskrivelse."', '".$genre."', '".$sprog."')"; 
    echo("SQL: " . $sql);
    if ($conn->query($sql) === TRUE) {
//echo "Data gemt i databasen"<br>";
        
    } else {
//echo "Fejl: " . $sql . "<br>" . $conn->error . "<br>";
        echo "Der er sket en fejl<br>";
    }
    $conn->close(); //Lukker for dataforbindelse
    header('Location: index.php');
}
?>