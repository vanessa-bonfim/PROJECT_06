<?php

    $infoNome = "Pedro";
    $posicao = "";
    $numero = "";
    
   
    $listaContatos = [
        ["nome" => "Maria", "telemovel" => 987546298],
        ["nome" => "Leonor", "telemovel" => 963475248],
        ["nome" => "Pedro", "telemovel" => 924587333],
        ["nome" => "Lucas", "telemovel" => 921457843],
        ["nome" => "Bernardo", "telemovel" => 921457843]
    ];

    foreach ($listaContatos as $indice => $valor) {
        
        if($valor["nome"] == $infoNome) {

           $posicao = $indice;

           $numero = $indice + 1; 

        }

        
        
    };


    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de contactos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Lista de contactos</h1>
        <div class="contact-list">

            <?php foreach($listaContatos as $geral) {?>

                <div class="contact">
                <div class="contact-image">
                    <img src="svg/user.svg" alt="<?php echo $geral["nome"]; ?>">
                </div>
                <div class="contact-number">                    
                    <span>+351 <?php echo $geral["telemovel"]; ?> </span>
                    
                </div>
                <div class="contact-name">
                    <span><?php echo $geral["nome"]; ?></span>
                    
                </div>
                </div>
            <?php }; ?>
        </div>
        <div class="contact-info">

            <h2><?php echo $infoNome ?></h2>
            
            <p>O contacto <strong><?php echo $infoNome ?></strong> está na posição <strong> <?php echo $posicao?></strong> da lista de contactos acima e é o Nº <strong> <?php echo $numero ?> </strong> da lista</p>
        
        </div>
    </div>
</body>
</html>