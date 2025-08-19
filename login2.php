<?php
$email = $_GET['email'] ?? '';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Entrar</title>
    <link rel="stylesheet" href="css/Cadastro.css">
</head>
<body>
    <form class="form" action="php/processaLogin.php" method="POST">
        <p class="form-title">Faça login</p>
        <div class="input-container">
            <input name="email" placeholder="E-mail" type="email" value="<?php echo htmlspecialchars($email); ?>" readonly required>
        </div>
        <div class="input-container">
            <input name="nome" placeholder="Nome" type="text" required>
        </div>
        <div class="input-container">
            <input name="senha" placeholder="Senha" type="password" required>
        </div>
        <button class="submit" type="submit">Entrar</button>
    </form>
</body>
</html>
