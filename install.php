<?php
require "./includes/config.php";
try {
    $connection = new PDO("mysql:host=$host", $user, $pass, $options);
    $sql = file_get_contents("./includes/data/DB_builder.sql");
    $connection->exec($sql);

    echo "Database and table users created successfully.";
} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}
echo $sql;
?>