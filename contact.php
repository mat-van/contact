<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mat&vann";

$your_name = ($_POST['Ime']);
$your_surname = ($_POST['Prezime']);
$your_phone = ($_POST['Telefon']);
$subject = ($_POST['Predmet']);
$your_message = ($_POST['Poruka']);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO forme (Ime, Prezime, Telefon, Predmet, Poruka)
VALUES ('$your_name', '$your_surname', '$your_phone', '$subject' ,'$your_message')";

if ($conn->query($sql) === TRUE) {
    echo "You have successfully submitted the form.We will contact you shortly $your_name";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
