<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $pass = $_POST["pwd"];



    try {


            require_once "connection.php";

            $query = "SELECT id, nombre, apellido, email, telefono, pais, comida, artista, lugar, color, pwd, imagen FROM users WHERE email = :email && pwd = :pwd;";
    
            $stmt = $pdo->prepare($query);
    
    
    
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":pwd", $pass);
    
    
    
            $stmt->execute();
    
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            foreach ($results as $row) {
                $_SESSION["id"] = $row["id"];
                $_SESSION["nombre"] = $row["nombre"];
                $_SESSION["apellido"] = $row["apellido"];
                $_SESSION["email"] = $row["email"];
                $_SESSION["telefono"] = $row["telefono"];
                $_SESSION["pais"] = $row["pais"];
                $_SESSION["comida"] = $row["comida"];
                $_SESSION["artista"] = $row["artista"];
                $_SESSION["lugar"] = $row["lugar"];
                $_SESSION["color"] = $row["color"];
                $_SESSION["pwd"] = $row["pwd"];
                $_SESSION["imagen"] = $row["imagen"];
    
    
            }
    
            header("Location: index.php");
    
            /*if (true) {
    
    
                $_SESSION["id"] = $results["id"];
                $_SESSION["nombre"] = $results["nombre"];
                $_SESSION["apellido"] = $apellido;
                $_SESSION["email"] = $results["email"];
                $_SESSION["telefono"] = $telefono;
                $_SESSION["pais"] = $pais;
                $_SESSION["comida"] = $comida;
                $_SESSION["artista"] = $artista;
                $_SESSION["lugar"] = $lugar;
                $_SESSION["color"] = $color;
                $_SESSION["pwd"] = $pwd;
                $_SESSION["imagen"] = $imagen;
    
    
                echo $_SESSION["email"];
    
    
            } else {
    
            }*/
    
    
    
    
    
            $pdo = null;
            $stmt = null;
    
    
    
            die();
    

        


    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    echo"no encontro";
    header("Location: index.htmlz");
    die();
}