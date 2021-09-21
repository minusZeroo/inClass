<?php
    $dbHost = "localhost";
    $dbUsername = "root";
    $dbPassword = "pathfinder";


    $conn = new mysqli($dbHost, $dbUsername, $dbPassword, "iLikePHP");

    if ($conn === false) {
        die("could not connect to the database");
    }

    $person_name = $conn->real_escape_string($_POST['person_name']);
    $location = $conn->real_escape_string($_POST['location']);
    $email = $conn->real_escape_string($_POST['email']);

    $insert = "INSERT INTO person (name, location, email) 
                    VALUES ('$person_name', '$location', '$email')";

    if ($conn->query($insert) === true) {
        echo "Records were successfully inserted";
    } else {
        echo "Please check";
    }
    $conn->close();


















