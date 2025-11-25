<?php include 'conexao.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Livros</title>
</head>

<body>
    <div class="container">
        <p></p>
        <div class="nav-buttons">
            <a href="index.php" class="btn">Ver Lista de Livros</a>
        </div>
        <br>
        <h2>Cadastro de Livros</h2>
        <form method="POST" action="">
            <div class="input-box">
                <label>Título</label>
                <input type="text" name="titulo" required>
            </div>
            <div class="input-box">
                <label>Autor</label>
                <input type="text" name="autor">
            </div>
            <div class="input-box">
                <label>Ano</label>
                <input type="number" name="ano">
            </div>
            <div class="input-box">
                <label>Categoria</label>
                <select name="categoria" required>
                    <option value="">Selecione</option>
                    <option value="Romance">Romance</option>
                    <option value="Didático">Didático</option>
                    <option value="Fantasia">Fantasia</option>
                    <option value="Conto">Conto</option>
                    <option value="Crônica">Crônica</option>
                    <option value="Ficção Científica">Ficção Científica</option>
                    <option value="Terror">Terror</option>
                    <option value="Biografias">Biografias</option>
                    <option value="Poesia">Poesia</option>
                </select>
            </div>
            <div class="input-box">
                <label>Quantidade</label>
                <input type="number" name="quantidade">
            </div>
            <button type="submit">Cadastrar</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $titulo = $_POST["titulo"];
            $autor = $_POST["autor"];
            $ano = $_POST["ano"];
            $categoria = $_POST["categoria"];
            $quantidade = $_POST["quantidade"];

            if (!empty($titulo)) {
                $sql = "INSERT INTO livros (titulo, autor, ano, categoria, quantidade)
                    VALUES ('$titulo', '$autor', '$ano', '$categoria', '$quantidade')";
                if (mysqli_query($conn, $sql)) {
                    echo "<p class='sucesso'>Livro cadastrado com sucesso!</p>";
                } else {
                    echo "<p class='erro'>Erro: " . mysqli_error($conn) . "</p>";
                }
            } else {
                echo "<p class='erro'>O título não pode estar vazio.</p>";
            }
        }
        ?>
    </div>
</body>

</html>