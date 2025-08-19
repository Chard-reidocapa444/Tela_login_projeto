<?php
$sucesso = isset($_GET['sucesso']) && $_GET['sucesso'] == '1';
$mensagem = $_GET['mensagem'] ?? '';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Cadastro</title>
    <link rel="stylesheet" href="../css/Cadastro.css">
</head>
<body>
    <div class="form">
        <h2><?php echo $sucesso ? 'Sucesso!' : 'Erro!'; ?></h2>
        <p><?php echo htmlspecialchars($mensagem); ?></p>
        <a href="../indexCadastro.php">Voltar para o cadastro</a>
    </div>
</body>
</html>
