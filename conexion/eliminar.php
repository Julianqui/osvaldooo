<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "movies_db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to delete a record
    $sql = "DELETE FROM movies WHERE id=22";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "borrado existoso";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
