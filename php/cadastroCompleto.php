<?php
$email = $_GET['email'] ?? '';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Completo</title>
    <link rel="stylesheet" href="css/Cadastro.css">
</head>
<body>
    <form class="form" action="php/processaCadastro.php" method="POST">
        <p class="form-title">Complete seu cadastro</p>
        <div class="input-container">
            <input name="nome" placeholder="Nome" type="text" required>
        </div>
        <div class="input-container">
            <input name="email" placeholder="E-mail" type="email" value="<?php echo htmlspecialchars($email); ?>" readonly required>
        </div>
        <div class="input-container">
            <input name="data_nasc" placeholder="Data de Nascimento" type="date" required>
        </div>
        <div class="input-container">
            <input name="senha" placeholder="Senha" type="password" required>
        </div>
        <div class="input-container">
            <input name="confirma" placeholder="Confirme a Senha" type="password" required>
        </div>
        <button class="submit" type="submit">Cadastrar</button>
    </form>
</body>
</html>
