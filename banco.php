<?php

require("config.php");

try {
    $pdo = new PDO(DSN, USUARIO, SENHA);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("ERRO: Não foi possível conectar: " . $e->getMessage());
}

function insertProduto($pdo, $produto): void
{
    $query = "
        INSERT INTO cadastro_produtos.produto (nome, descricao, preco, qtdEstoque)
        VALUES (:nome, :descricao, :preco, :qtdEstoque);
    ";

    $stmt = $pdo->prepare($query);
    $stmt->execute([
        ':nome' => $produto['nome'],
        ':descricao' => $produto['descricao'],
        ':preco' => $produto['preco'],
        ':qtdEstoque' => $produto['qtdEstoque']
    ]);
}

function recuperarProduto($pdo): array
{
    $produtos = [];
    $query = "SELECT * FROM cadastro_produtos.produto;";
    $result = $pdo->query($query);

    foreach ($result as $produto) {
        $produtos[] = $produto;
    }

    return $produtos;
}

?>
