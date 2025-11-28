<?php include 'conexao.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Lista de Livros</title>
</head>

<body>
    <div class="container">
        <p></p>
        <div class="nav-buttons">
            <a href="cadastro.php" class="btn">Cadastrar Novo Livro</a>
        </div>
        <br>
        <h2>Livros Cadastrados</h2>
        <form method="GET" action="">
            <div class="input-box">
                <label>Buscar</label>
                <input type="text" name="busca" placeholder="Título ou categoria">
            </div>
            <button type="submit">Filtrar</button>
        </form>

        <table>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Categoria</th>
                <th>Quantidade</th>
            </tr>

            <?php
            $filtro = "";
            if (isset($_GET["busca"]) && $_GET["busca"] != "") {
                $busca = $_GET["busca"];
                $filtro = "WHERE titulo LIKE '%$busca%' OR categoria LIKE '%$busca%'";
            }

            $sql = "SELECT * FROM livros $filtro ORDER BY titulo";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                  <td>{$row['id']}</td>
                  <td>{$row['titulo']}</td>
                  <td>{$row['autor']}</td>
                  <td>{$row['categoria']}</td>
                  <td>{$row['quantidade']}</td>
                </tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>