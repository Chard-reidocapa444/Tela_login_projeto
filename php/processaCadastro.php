<?php
require_once 'conecta.php';

// Recebe os dados do formulário

$nome = $_POST['nome'] ?? '';
$data_nasc = $_POST['data_nasc'] ?? '';
$email = $_POST['email'] ?? '';
$fone = $_POST['fone'] ?? '';
$senha = $_POST['senha'] ?? '';
$confirma = $_POST['confirma'] ?? '';

// Validação simples
if ($senha !== $confirma) {
    $mensagem = 'As senhas não coincidem!';
    $sucesso = false;
} else {
    // Prepara e executa o insert
        $stmt = $mysqli->prepare('INSERT INTO tb_usuarios (nome, data_nascimento, email, senha, fone) VALUES (?, ?, ?, ?, ?)');
        if ($stmt) {
            $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
            $stmt->bind_param('sssss', $nome, $data_nasc, $email, $senha_hash, $fone);
        if ($stmt->execute()) {
            $mensagem = 'Cadastro realizado com sucesso!';
            $sucesso = true;
        } else {
            $mensagem = 'Erro ao cadastrar: ' . $stmt->error;
            $sucesso = false;
        }
        $stmt->close();
    } else {
        $mensagem = 'Erro na preparação da query: ' . $mysqli->error;
        $sucesso = false;
    }
}

// Redireciona para a página de resultado
header('Location: resultado.php?sucesso=' . ($sucesso ? '1' : '0') . '&mensagem=' . urlencode($mensagem));
exit;
