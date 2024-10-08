<?php
require_once '../database/conexao.php';


$sql = "SELECT * FROM marca ORDER BY IDMarca DESC";
$stm = $conn->prepare($sql);
$stm->execute();
$marca = $stm->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/marcasparceiras.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="shortcut icon" href="../img/img2/iconshop1.png" type="image/x-icon">
    <title>ESE Shop</title>

</head>
<body>
    
    <?php include_once "../components/header.php"?>

    <main>
        <h2>Marcas Parceiras</h2>

        <div class="produtos">

        
        <?php
        include_once ("../controllers/marca/crudMarca.php");

        $data = findAllMarca();

            foreach ($data as $marca) {?>

            <div class="produto">
                <div class="imagem">
                    <img src="../img/img2/logo.png" alt="Imagem do Produto">
                </div>
                <div class="info">
                    <h3 class="desc-prod"><?= $marca["nomeMarca"]?></h3>
                    <div>
                        <button><a href="../dados/todasmarcas.php">Ver mais</a></button>
                    </div>
                </div>
            </div>

        <?php }?>

        </div>
        <div class="voltar">
            <a href="./index.php">Voltar para a pagina Incial</a>
        </div>
    </main>

</body>
</html>