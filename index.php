<?php include("conexao.php"); ?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Sistema de Consultas Médicas</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Bem-vindo à Clínica</h1>
    <div class="menu">
      <div class="menu-item">
        <a href="cadastrar_paciente.php">
          <img src="paciente.png" alt="Paciente">
          <p>Cadastrar Paciente</p>
        </a>
      </div>
      <div class="menu-item">
        <a href="cadastrar_medico.php">
          <img src="medico.png" alt="Médico">
          <p>Cadastrar Médico</p>
        </a>
      </div>
      <div class="menu-item">
        <a href="agendar_consulta.php">
          <img src="consulta.png" alt="Consulta">
          <p>Agendar Consulta</p>
        </a>
      </div>
      <div class="menu-item">
        <a href="listar_consultas.php">
          <img src="img/lista.png" alt="Lista">
          <p>Listar Consultas</p>
        </a>
      </div>
    </div>
  </div>
</body>
</html>
