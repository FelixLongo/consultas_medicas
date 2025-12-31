<?php include("conexao.php"); ?>
<?php
$id = $_GET["id"];
$sql = "DELETE FROM pacientes WHERE id=$id";
if ($conn->query($sql) === TRUE) {
  echo "<p class='sucesso'>Paciente excluído com sucesso!</p>";
} else {
  echo "<p class='erro'>Erro: " . $conn->error . "</p>";
}
echo "<a href='listar_pacientes.php'>← Voltar</a>";
?>
