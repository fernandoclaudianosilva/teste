<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){// Faz com que o site opere em post ao invés de Get
        session_start(); //Inicializar a Session  
        if($_POST['usuário'] == 'fatec' and $_POST['senha'] == 'araras'){ // Se o usuario e senha forem válidos aontecerá:
            $_SESSION['loggedin'] = TRUE; //  caso verdade a sessão será redirecionada
                header("location: home.php"); // Redireciona para o home.PHP
        } else {
            $_SESSION['loggedin'] = FALSE; //caso falso, o site será reiniciado
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Login</title>

</head>
<body>
    <h1 class="title">Cadastro de Alunos</h1>
  <section class="container"> 
    <div class="wrapper">
        <h2 class=""> </h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"><!-- Metodo de segurança para evitar ataques xss !-->
            <div class="form-group">
                <label>Usuario</label>
                <input type="text" name="usuário" class="form-control" placeholder="Coloque o usuário">
            </div>    
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="senha" class="form-control" placeholder="Coloque a senha">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" value="Acesso">Acessar</button>
            </div>
        </form>
    </div>
  </section>










</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
