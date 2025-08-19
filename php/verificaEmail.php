<?php
require_once 'conecta.php';

$email = $_POST['email'] ?? '';
if (!$email) {
    header('Location: ../indexCadastro.php?erro=1');
    exit;
}


$stmt = $mysqli->prepare('SELECT id_user FROM tb_usuarios WHERE email = ?');
$stmt->bind_param('s', $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    // Email já cadastrado, redireciona para login2
    header('Location: ../login2.php?email=' . urlencode($email));
    exit;
} else {
    // Email não cadastrado, redireciona para cadastro2
    header('Location: ../cadastro2.php?email=' . urlencode($email));
    exit;
}
