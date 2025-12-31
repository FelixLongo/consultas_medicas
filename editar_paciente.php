<?php include("conexao.php"); ?>
<?php
$id = $_GET["id"];
$sql = "SELECT * FROM pacientes WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Editar Paciente</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Editar Paciente</h1>
    <form method="POST" class="form-box">
      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
      <label>Nome:</label>
      <input type="text" name="nome" value="<?php echo $row['nome']; ?>" required>
      <label>Idade:</label>
      <input type="number" name="idade" value="<?php echo $row['idade']; ?>" required>
      <label>Telefone:</label>
      <input type="text" name="telefone" value="<?php echo $row['telefone']; ?>">
      <button type="submit">Atualizar</button>
    </form>
    <div class="voltar">
      <a href="listar_pacientes.php">← Voltar</a>
    </div>
  </div>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $telefone = $_POST["telefone"];

    $sql = "UPDATE pacientes SET nome='$nome', idade='$idade', telefone='$telefone' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
      echo "<p class='sucesso'>Paciente atualizado com sucesso!</p>";
    } else {
      echo "<p class='erro'>Erro: " . $conn->error . "</p>";
    }
  }
  ?>
</body>
</html>


