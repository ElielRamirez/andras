<?php
  include "includes/config.php";
  include "includes/util.php";
  try  {
    $connection = new PDO($dsn, $user, $pass, $options);

    $sql = "SELECT *
            FROM huntings";

    $statement = $connection->prepare($sql);
    $statement->execute();

    $result = $statement->fetchAll();
    // var_dump($result);
  } catch(PDOException $error) {
      echo $sql . "<br>" . $error->getMessage();
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./public/css/style.css">
    <title>Gritos de Guerra</title>

</head>
<body>
  <form name="hunnting_form" action="add_hunting.php" method="post">
       <h2>REPORTA TU CASERIA</h2>
       <h3>Inserte el link de su captura aqui.</h3>
       <input type="text" name="name" placeholder="nombre" required>
      <select name="range" id="">
        <option selected disabled value="Rango">Rango...</option>
        <option value="R1">R1</option>
        <option value="R2">R2</option>
        <option value="R3">R3</option>
        <option value="R4">R4</option>
        <option value="R5">R5</option>
      </select>
       <input type="text" name="castle" placeholder="castillos" required>
       <textarea name="report" placeholder="reporte" required></textarea>
        <input type="submit" value="ENVIAR" >
  </form>
  <div class="collection" id="list">
    <h1>Listado de caserias</h1>
    <table>
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Rango</th>
        <th>Castillos</th>
        <th>Reporte</th>
        <th>Acciones</th>
      </tr>
      </thead>
      <tbody>
      <?php foreach ($result as $row) : ?>
        <tr>
          <td><?php echo escape($row["user_name"]); ?></td>
          <td><?php echo escape($row["user_range"]); ?></td>
          <td><?php echo escape($row["user_castle"]); ?></td>
          <td><?php echo escape($row["user_report"]); ?></td>
          <td class="actions"><i class="fa fa-trash" aria-hidden="true"></i><i class="fa fa-edit" aria-hidden="true"></i></td>

        </tr>
      <?php endforeach; ?>
      </tbody>
      
    </table>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
</body>
</html>