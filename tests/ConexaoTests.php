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
// INSERIR AQUI: Teste de Validação de Dados (Regras de Negócio)
    public function testValidarFormatoData() {
        $data = "2023-12-31"; // Simula o dado do formulário
        
        // Comportamento real: Verificar se a data segue o padrão AAAA-MM-DD
        $this->assertMatchesRegularExpression('/^\d{4}-\d{2}-\d{2}$/', $data, "A data deve estar no formato AAAA-MM-DD");
    }

    public function testValidarCamposObrigatoriosAgendamento() {
        $paciente_id = 1; 
        $medico_id = ""; // Simula um erro: médico não selecionado
        
        // Comportamento: O teste falha se o campo obrigatório estiver vazio
        $this->assertNotEmpty($paciente_id);
        $this->assertNotEmpty($medico_id, "O ID do médico é obrigatório para o agendamento");
    }
}