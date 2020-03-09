<?php
echo "Intentando conectar a la base de datos<br>";
require "./includes/config.php";
    // if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();
    try  {
        $connection = new PDO($dsn, $user, $pass, $options);
        if($connection){
            echo "Conexion establecida..<br>";
            echo "Procesando datos...<br>";
            $new_hunting = array(
                "user_name"=>$_POST['name'],
                "user_range"=>$_POST['range'],
                "user_castle"=>$_POST['castle'],
                "user_report"=>$_POST['report'],
                );
                
            $sql = sprintf(
                "INSERT INTO %s (%s) values (%s)",
                "huntings",
                implode(", ", array_keys($new_hunting)),
                ":" . implode(", :", array_keys($new_hunting))
            );
            $statement = $connection->prepare($sql);
            $statement->execute($new_hunting);
            echo "Datos guardados.<br>";
            echo "espere redireccionando...";
            sleep(3);
            header("Location: ./index.php?#list");

        }
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }

?>