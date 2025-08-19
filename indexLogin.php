<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/Cadastro.css">
</head>
<body>
    <form class="form" action="php/verificaEmail.php" method="POST">
        <p class="form-title">Acesse ou cadastre-se</p>
        <div class="input-container">
            <input name="email" placeholder="E-mail" type="email" required>
        </div>
        <button class="submit" type="submit">Continuar</button>
    </form>
</body>
<script src="js/Cadastro.js"></script>
</html>