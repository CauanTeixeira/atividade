<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina2</title>
</head>
<body>
    <?php
    if ($get->get('A')<>''&&$get->get('B')<>''){
        $a = $get->get('A');
        $b = $get->get('B');
        $raiz = sqrt($a);
        $potecia = $b*$b;   
        ?>
    <section>
        <img src="<?=$value['img']?>">
        <p>Email: <?=$value['User'] ?></p>
        <p>Nome:<?=$value['name'] ?></p>
        <p>CPF:<?=$value['cpf'] ?></p> <br><br>
        <h2>Os resultados são:</h2>
        <p class = 'resultados'>A raiz quadrada de <?=$a?> é de: <?=$raiz?></p>
        <P class = 'resultados'>A potecialização de <?=$b?> é de: <?=$potecia?></P>
    </section>
    <?php     
    }
    ?>  
</body>
</html>
