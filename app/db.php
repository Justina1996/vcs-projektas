<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "forma2");

function insert_into_database($name, $email, $phone, $message)
{
    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysqli->connect_error) {
        echo "Atsiprasome, bet svetaine susidure su problema.\n";
        echo 'Klaida: ' . $mysqli->connect_error . '\n';
        exit();
    }

    mysqli_query($mysqli, "INSERT INTO klientai (name, email, phone, message) VALUES('$name', '$email', '$phone', '$message')");
}
