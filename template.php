<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="js/style.css">
    <title>Cadastro de Produtos</title>
</head>

<body>
    <main>
        <form action="index.php" method="GET">
            <h1>Cadastro de Produtos</h1>
            <div class="field">
                <label for="nome">Digite o nome do produto</label>
                <input class="input" id="nome" name="nome" type="text" placeholder="Digite o nome do produto" required>
                <label for="descricao">Digite a descrição</label>
                <input class="input" id="descricao" name="descricao" type="text" placeholder="Digite a descrição">
                <label for="preco">Digite o preço</label>
                <input class="input" id="preco" name="preco" type="text" placeholder="Digite o preço">
                <label for="qtdEstoque">Digite a quantidade em estoque</label>
                <input class="input" id="qtdEstoque" name="qtdEstoque" type="text" placeholder="Digite a quantidade em estoque">
                <input class="input botao" id="enviarFormulario" type="submit" value="Enviar">
            </div>
        </form>

        <section>
            <table>
                <tr>
                    <th>Produto</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>qtdEstoque</th>
                </tr>
                <?php foreach ($listaProduto as $produto) : ?>
                    <tr>
                        <td><?php echo ($produto['nome']); ?></td>
                        <td><?php echo ($produto['descricao']); ?></td>
                        <td><?php echo ($produto['preco']); ?></td>
                        <td><?php echo ($produto['qtdEstoque']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </section>
    </main>
    <script src="./js/main.js"></script>
</body>

</html>
