<?php include("conexao.php"); ?> 
<!DOCTYPE html> <html lang="pt"> 
  <head>   <meta charset="UTF-8">   
  <title>Cadastrar Paciente</title>   
  <link rel="stylesheet" href="styleC.css"> 
</head> 
<body>   
  <div class="container">    
     <h1>Cadastrar Paciente</h1>    
      <form method="POST" class="form-box">   
            <label>Nome:</label>       
            <input type="text" name="nome" required>  
                  <label>Idade:</label>     
                    <input type="number" name="idade" required> 
                           <label>Telefone:</label>       
                           <input type="text" name="telefone">     
                              <button type="submit">Salvar</button> 
                                </form>      <div class="voltar">  
  <a href="index.php">← Voltar à Página Inicial</a>   
  </div>      
  <?php     
  if ($_SERVER["REQUEST_METHOD"] == "POST") {   
        $nome = $_POST["nome"];      
         $idade = $_POST["idade"];    
            $telefone = $_POST["telefone"];      
              $sql = "INSERT INTO pacientes (nome, idade, telefone) VALUES ('$nome', '$idade', '$telefone')";
 if ($conn->query($sql) === TRUE) {  
 echo "<p class='sucesso'>Paciente cadastrado com sucesso!</p>"; 
       } else {         echo "<p class='erro'>Erro: " . $conn->error . "</p>";
              }     }     
              ?>   
              </div> 
            </body> 
            </html>
