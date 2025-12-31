<?php include("conexao.php"); ?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Lista de Consultas</title>
</head>
<body>
  <h1>Consultas Agendadas</h1>
  <table border="1">
    <tr>
      <th>Paciente</th>
      <th>Médico</th>
      <th>Especialidade</th>
      <th>Data</th>
      <th>Hora</th>
    </tr>
    <?php
    $sql = "SELECT p.nome AS paciente, m.nome AS medico, m.especialidade, c.data, c.hora
            FROM consultas c
            JOIN pacientes p ON c.paciente_id = p.id
            JOIN medicos m ON c.medico_id = m.id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["paciente"]."</td>
                <td>".$row["medico"]."</td>
                <td>".$row["especialidade"]."</td>
                <td>".$row["data"]."</td>
                <td>".$row["hora"]."</td>
              </tr>";
      }
    } else {
      echo "<tr><td colspan='5'>Nenhuma consulta encontrada</td></tr>";
    }
    ?>
  </table>
</body>
</html>
