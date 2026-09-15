<?php
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $ano = $_POST['ano_nascimento'];
    $idade = date('Y') - $ano;

    if ($idade >= 18) {
        $mensagem = "Acesso permitido, $nome!";
        // Salva no arquivo de log
        $linha = "$nome - $idade anos\n";
        file_put_contents('log_acessos.txt', $linha, FILE_APPEND);
    } else {
        $mensagem = "Acesso negado, $nome!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Desafio 1</title>
</head>
<body>

    <form method="POST">
        Nome: <input type="text" name="nome" required><br><br>
        Ano de Nascimento: <input type="number" name="ano_nascimento" required><br><br>
        <button type="submit">Verificar</button>
    </form>

    <?php if ($mensagem): ?>
        <h3><?php echo $mensagem; ?></h3>
    <?php endif; ?>

</body>
</html>