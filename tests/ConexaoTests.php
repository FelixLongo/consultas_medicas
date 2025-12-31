<?php
use PHPUnit\Framework\TestCase;

class ConexaoTest extends TestCase {
    public function testConexaoComBanco() {
        // Simula a inclusão do seu arquivo de conexão
        include 'conexao.php'; 
        
        // Verifica se a variável de conexão existe e não tem erro
        $this->assertNotNull($conn);
        $this->assertFalse($conn->connect_error);
    }
}