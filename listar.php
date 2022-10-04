    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listagem | Cadastro</title>
        <link>
    <body>
        <table border="1">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Senha</th>
                <th>Email</th>
                <th>Tipo</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody>
    <?php
    include"conectar.php";
     $sql = "SELECT * FROM cadastro ORDER BY nome DESC";
     $resultado = $conectar ->query($sql);
    while ($linha = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>".$linha['nome'],"</td>";
        echo "<td>".$linha['senha'],"</td>";
        echo "<td>".$linha['email'],"</td>";
        echo "<td>".$linha['tipo'],"</td>";
        echo "<td>".$linha['foto'],"</td>";
    }
    echo "</table>";

?>
    </tbody>
    </body>
    </html>
    
    
    