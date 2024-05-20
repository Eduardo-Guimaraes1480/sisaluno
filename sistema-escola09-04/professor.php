<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
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

    <article class="main2">
    
<div class="box">
    <div class="box1">
        <h1>Dados Academicos</h1> 

        <form action="listaprofessor.php" method="post">

        <div class="informe">
            <label for="nome">Informações</label>
            <input type="text" name="nome" placeholder="Digite Informações" required>
        </div>

        <div class="forme">
            <label for="endereco">Formação</label>
            <input type="text" name="endereco" placeholder="Grau de Formação" required>
        </div>

        <div class="cargahoraria">
            <label for="idade">Carga Horaria</label>
            <input type="number" name="idade" id="" required>
        </div>

            <div class="enviar">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>
    <div class="box2">
        <h1>Dados Pessoais</h1>

        <form action="index.html">
            <div class="nome">
                <label for="nome">Nome</label>
                <input type="text" name="nome" placeholder="Digite seu nome" required>
            </div>
    
            <div class="endereco">
                <label for="endereco">Endereço</label>
                <input type="text" name="endereco" placeholder="Digite seu endereço" required>
            </div>
    
            <div class="idade">
                <label for="idade">Idade</label>
                <input type="number" name="idade" id="" required>
            </div>
    
            <div class="password">
                <label for="Password">Password</label>
                <input type="text" name="password"  placeholder="Digite sua senha" required>
            </div>
            
            <div class="city">
                <label for="select">Cidade</label>
                <select name="select" id="cargo" name="city">
                    <option value="city 6">Caculé</option>
                    <option value="city 5">Guanambi</option>
                    <option value="city 4">Tauape</option>
                    <option value="city 3">Caitite</option>
                    <option value="city 2">Carinhanha</option>
                </select>
            </div>
            <div class="city">
                <label for="select">Estado</label>
                <select name="select" id="cargo" name="estado">
                    <option value="city 6">Bahia</option>
                    <option value="city 5">São Paulo</option>
                    <option value="city 4">Acre</option>
                    <option value="city 3">Amazonia</option>
                    <option value="city 2">Distrito Federal</option>
                </select>
            </div>
                <div class="enviar">
                    <input type="submit" value="Enviar">
                </div>
            
        </form>
</div>
    </article>
        <footer> rodape</footer> 
</body>
</html>