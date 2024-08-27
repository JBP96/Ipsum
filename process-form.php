<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $pais = $_POST["pais"];
    $comida = $_POST["comida"];
    $artista = $_POST["artista"];
    $lugar = $_POST["lugar"];
    $color = $_POST["color"];
    $pwd = $_POST["pwd"];
    $foto = $_POST["foto"];


    

    try {
        require_once "connection.php";

        $query = "INSERT INTO users (nombre, apellido, email, telefono, pais, comida, artista, lugar, color, pwd, imagen) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$nombre, $apellido, $email, $telefono, $pais, $comida, $artista, $lugar, $color, $pwd, $foto]);


              /*  // Create the email and send the message
                $to = "$email"; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
                $email_subject = "Prueba Ipsum";
                $email_body = "Tu usuario se ha registrado correctamente a la aplicacion prueba ipsum.\n\n";
                $headers = "From: noreply@ipsum.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
                mail($to,$email_subject,$email_body,$headers); */





        $pdo = null;
        $stmt = null;

        header("Location: index.php");

        


        die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    header("Location: index.php");
}