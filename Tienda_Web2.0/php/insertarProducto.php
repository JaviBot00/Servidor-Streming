<?php
$servername = "localhost";
$username = "php";
$password = "1234";
$database = "pruebas";


$cod = $_POST['cod'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];

// Create connection
$mysqli_link = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$mysqli_link) {
        die("Connection failed: " . mysqli_connect_error());
} else {
        echo "Connected successfully<br>";
}

$insert_query = "INSERT INTO productos(cod, descripcion, precio, stock) VALUES ('$cod', '$descripcion', '$precio', '$stock');";

// run the insert query
If ($mysqli_link->query($insert_query) === TRUE) {
    echo 'Record inserted successfully.';
} else {
  echo "Connection failed: " .$insert_query. "<br>" . $mysqli_link->error;
}

// close the db connection
mysqli_close($mysqli_link);
?>