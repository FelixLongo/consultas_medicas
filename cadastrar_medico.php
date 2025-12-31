<?php include("conexao.php"); ?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Cadastrar Médico</title>
  <link rel="stylesheet" href="styleS.css">
</head>
<body>
  <div class="container">
    <h1>Cadastrar Médico</h1>
    <form method="POST" class="form-box">
      <label>Nome:</label>
      <input type="text" name="nome" required><br><br>
      <label>Especialidade:</label>
      <input type="text" name="especialidade" required><br><br>
      <button type="submit">Salvar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nome = $_POST["nome"];
      $especialidade = $_POST["especialidade"];

      $sql = "INSERT INTO medicos (nome, especialidade) VALUES ('$nome', '$especialidade')";
      if ($conn->query($sql) === TRUE) {
        echo "<p class='sucesso'>Médico cadastrado com sucesso!</p>";
      } else {
        echo "<p class='erro'>Erro: " . $conn->error . "</p>";
      }
    }
    ?>
  </div>
</body>
</html>