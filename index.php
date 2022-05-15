<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyword" content="Palavras-chave,do,meu,site">
    <meta name="description" content="Descrição do meu website">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>estilo/style.css">
    <link href="<?php echo INCLUDE_PATH;?>estilo/all.css" rel="stylesheet">
    <title>Projeto 01</title>
</head>
<body>
    <header>
        <div class="center">
            <div class="logo left"><a href="/">Logomarca</a></div><!--Logo-->
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contatos">Contatos</a></li>
                </ul>
            </nav><!--menu desktop-->

            <nav class="mobile right">

            <div class="btn-menu-mobile">
                <i class="fa-solid fa-bars"></i>
            </div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contatos">Contatos</a></li>
                </ul>
            </nav><!--menu mobile-->
            <div class="clear"></div>
        </div><!--center-->
    </header>

    <?php

        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        
        if(file_exists('pages/'.$url.'.php')){

            include('pages/'.$url.'.php');
        }
        else{
            //Podemos fazer o que quiser, poia a página não existe
            include('pages/404.php');
        }

    ?>

    <footer>
        <div class="center">
            <p>Todos os direitos reservados</p>
        </div><!--center-->
    </footer>
    
    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/script.js"></script>
</body>
</html>