
<?php
include"conectar.php";

$nome = $_POST["nome"];
$senha = $_POST["senha"];
$email = $_POST["email"];
$tipousuario = $_POST["tipo"];
$pasta = "../forms/img/";
$avatar = $_FILES["foto"]["name"];
$separa = explode(".", $avatar);
$separa = array_reverse($separa);
$tipo = $separa[0];
$avatarfinal = $nome . '.' . $tipo;
    if (move_uploaded_file($_FILES['foto']['tmp_name'], $pasta . $avatarfinal)) {
        $conectar->query ("INSERT INTO cadastro(nome, email, senha, tipo, foto) VALUES ('$nome','$email', '$senha', '$tipousuario', '$avatarfinal')");
        header("location:bemvindo.html");
    } else {
    echo "Upload negado";
    }      
?>   