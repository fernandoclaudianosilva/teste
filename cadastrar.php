<?php
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if( $_POST['nome'] != ""  &&   $_POST['genero'] != "" && $_POST['Ra'] != "" && $_POST['curso'] != "")  {
            $nome = $_POST['nome'];
            $Curso = $_POST['Curso'];
            $genero = $_POST['genero'];
            $Ra = $_POST['Ra'];

            $filename = "Alunos.TXT";
        
            // ATENCAO: Verificar se o arquivo existe
            if (!file_exists($filename)) {
                // Abrir no Modo Write
                $handle = fopen($filename, "w");
            } else {
                // Abir no Modo Append
                $handle = fopen($filename, "a");
            }
            fwrite($handle," Nome : $nome, Genero: $genero,Ra: $Ra, Curso:  $Curso \n");
            fclose($handle);
            header("location: home.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
</head>
<body>
<h1 class="title">Cadastro de Alunos</h1>
    <div class="wrapper">
        <form action="cadastrar.php" method="post">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control" value="">

            </div>    
            <div class="form-group">
                <label>Sexo</label>
                <input type="text" name="genero" class="form-control" value="">

            </div>
            <div class="form-group">
                <label>Ra</label>
                <input type="text" name="Ra" class="form-control" value="">
            </div>
            <div class="form-group">
                <label>Curso</label>
                <input type="text" name="curso" class="form-control" value="">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" value="Cadastrar">Cadastrar</button>
            </div>     
        </form>
    </div>    
</body>
</html>