<?php

include_once('ligacao.php');


$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$nascimento = $_POST['nascimento'];
$morada = $_POST['morada'];
$classe = $_POST['classe'];
$sala = $_POST['sala'];
$contacto = $_POST['contacto'];

$cadastrar = mysqli_query($ligacao, "INSERT INTO `tb-alunos` (`indice`, `nome`, `apelido`, `nascimento`, `morada`, `classe`, `sala`, `contacto`) VALUES (NULL, '$nome', '$apelido', '$nascimento', '$morada', '$classe', '$sala', '$contacto');");


if ($cadastrar == true) {
    echo 
        "<script>
            window.alert(' Aluno cadastrado com sucesso ');
            location.href = '../massagem.php'
        </script>";  
}
else {
    echo 
        "<script>
            window.alert(' Aluno nao cadastrado ');
            location.href = '../cadastro.php'
        </script>";
};

?>