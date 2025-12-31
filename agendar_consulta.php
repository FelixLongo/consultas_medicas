<?php include("conexao.php"); ?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Agendar Consulta</title>
  <link rel="stylesheet" href="styleS.css">
</head>
<body>
  <div class="container">
    <h1>Agendar Consulta</h1>
    <form method="POST" class="form-box">
      <label>ID do Paciente:</label>
      <input type="number" name="paciente_id" required>

      <label>ID do Médico:</label>
      <input type="number" name="medico_id" required>

      <label>Data:</label>
      <input type="date" name="data" required>

      <label>Hora:</label>
      <input type="time" name="hora" required>

      <button type="submit">Agendar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $paciente_id = $_POST["paciente_id"];
      $medico_id = $_POST["medico_id"];
      $data = $_POST["data"];
      $hora = $_POST["hora"];

      $sql = "INSERT INTO consultas (paciente_id, medico_id, data, hora) 
              VALUES ('$paciente_id', '$medico_id', '$data', '$hora')";
      if ($conn->query($sql) === TRUE) {
        echo "<p class='sucesso'>Consulta agendada com sucesso!</p>";
      } else {
        echo "<p class='erro'>Erro: " . $conn->error . "</p>";
      }
    }
    ?>
  </div>
</body>
</html>
