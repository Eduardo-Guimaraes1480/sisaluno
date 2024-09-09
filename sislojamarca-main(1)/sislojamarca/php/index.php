<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="shortcut icon" href="../img/img2/iconshop1.png" type="image/x-icon">
    <title>ESE Shop</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <?php include_once "../components/header.php"?>

    <div class="main1">
    
        <section>
            <img src="../img/eventos-carrousel/2.png" alt="" class="d-block" style="width: 100%">
        </section>  

        <div class="areablack">
            <?php 
            if (!isset($_SESSION["id"])) {
                echo "
                <h3><a href='../php/cadastro.php'>Cadastrar</a></h3>
                <p><a href='entrar.php'>Entrar</a></p>";
            } else {
                echo "
                <h3><a href='../php/cadclientes.php'>Cadastrar Clientes</a></h3>
                <p><a href='logout.php'>Sair</a></p>";
            }
            ?>
        </div>

    </div>

    <div class="mainback">
        <div class="produtos">

            <?php 
            include_once ("../controllers/produto/crudProduto.php");

            $data = findAllProduto();

            for($i = 0; $i < 1; $i++){
                
            foreach ($data as $produto) {?>

            <div class="produto" id="<?= $produto["CBarra"]?>">
                <div class="imagem">
                    <img src="../img/laboratoria/<?= $produto["CBarra"] ?>.PNG" alt="Imagem do Produto">
                </div>
                <div class="info">
                    <h3 class="desc-prod"><?= $produto["titulo"]?></h3>
                    <div>
                        <span>R$<?= str_replace(".", ",", $produto["preco"])?></span>
                        <button><a href="../php/produto-vd.php"><i class="fa-solid fa-cart-shopping"></i></a></button>
                    </div>
                </div>
            </div>

            <?php }}?>

        </div>

        <div class="produtos">

            <?php 
            include_once ("../controllers/produto/crudProduto.php");

            $data = findAllProduto();

            for($i = 0; $i < 1; $i++){
                
            foreach ($data as $produto) {?>

            <div class="produto" id="<?= $produto["CBarra"]?>">
                <div class="imagem">
                    <img src="../img/laboratoria/<?= $produto["CBarra"] ?>.PNG" alt="Imagem do Produto">
                </div>
                <div class="info">
                    <h3 class="desc-prod"><?= $produto["titulo"]?></h3>
                    <div>
                        <span>R$<?= str_replace(".", ",", $produto["preco"])?></span>
                        <button><a href="../php/produto-vd.php"><i class="fa-solid fa-cart-shopping"></i></a></button>
                    </div>
                </div>
            </div>

            <?php }}?>

        </div>

        <div class="produtos">

            <?php 
            include_once ("../controllers/produto/crudProduto.php");

            $data = findAllProduto();

            for($i = 0; $i < 1; $i++){
                
            foreach ($data as $produto) {?>

            <div class="produto" id="<?= $produto["CBarra"]?>">
                <div class="imagem">
                    <img src="../img/laboratoria/<?= $produto["CBarra"] ?>.PNG" alt="Imagem do Produto">
                </div>
                <div class="info">
                    <h3 class="desc-prod"><?= $produto["titulo"]?></h3>
                    <div>
                        <span>R$<?= str_replace(".", ",", $produto["preco"])?></span>
                        <button><a href="../php/produto-vd.php"><i class="fa-solid fa-cart-shopping"></i></a></button>
                    </div>
                </div>
            </div>

            <?php }}?>
        </div>
        
    </div>

    <?php include_once "../components/footer.php"?>

</body>
</html>