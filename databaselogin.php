<?php

    $servername = "sql.itcn.dk:3306";

    $username = "sara212b.EADANIA";

    $password = "*";

    $database = "sara212b.EADANIA";  

    $conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {  //Vi tjekker om forbindelsen mislykkedes
    die("Forbindelse mislykkedes: " . $conn->connect_error);

}
    //echo "Connection established :-)<br>"; //Udkommenterer kode med enten fejl- eller successbeskeder
?>