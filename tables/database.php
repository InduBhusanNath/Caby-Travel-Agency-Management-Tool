
<?php
$servername="localhost";
$username="root";
$password=" ";

$username="ytcojnul_root";
//

//$password="aeietyadmin";


try {
    $conn = new PDO("mysql:host=$servername;dbname=db", $username, $password);
    // setting the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE db";
    // using exec() because no results are returned
    $conn->exec($sql);
    echo "Database created successfully with the name newDB";
    }
catch(PDOException $e)
    {
    echo $sql . "
" . $e->getMessage();
    }
$conn = null;
?>

