<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista do Professor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img src="ESE7.png" alt="">
        <nav>
          <a href="index.html">Index</a>
            <a href="alunos.php">Aluno</a>
            <a href="professor.php">Professor</a>
            <a href="listaalunos.php">Lista Alunos</a>
            <a href="listaprofessor.php">Lista Professor</a>
        </nav>
           
        <img src="ESE7.png" alt="">
    </header>

    <article class="main1" style="width:100%">

        <h2>Lista Professor</h2>

        <table>
          <td>Nome</td>
          <td>Idade</td>
          <td>Endereço</td>
          <td>Senha</td>
        </tr>
        <tr>
        <?php
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];
            $endereco = $_POST['endereco'];
            $password = $_POST['password'];

          echo"<td>$nome</td>";
          echo"<td>$idade</td>";
          echo"<td>$endereco</td>";
          echo"<td>$password</td>";
          ?>
          </tr>
          </table>
</article>
    <footer> rodape</footer> 
</body>
</html>