<?php
    
 require '../config.php';
 require '../src/Artigos.php';
 require '../src/redireciona.php';
    
if($_SERVER['REQUEST_METHOD']=== 'POST'){
   $artigo = new Artigo($mysql);
   $artigo->adcionar($_POST['titulo'], $_POST['conteudo']);

   //redirecionar para uma página
   header('Location: /blog/admin/index.php');// adciona cabecalho http
   die();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta charset="UTF-8">
    <title>Adicionar Artigo</title>
</head>

<body>
    <div id="container">
        <h1>Adicionar Artigo</h1>
        <form action="adicionar-artigo.html" method="post">
            <p>
                <label for="">Digite o título do artigo</label>
                <input class="campo-form" type="text" name="titulo" id="titulo" />
            </p>
            <p>
                <label for="">Digite o conteúdo do artigo</label>
                <textarea class="campo-form" type="text" name="conteudo" id="conteudo"></textarea>
            </p>
            <p>
                <button class="botao">Criar Artigo</button>
            </p>
        </form>
    </div>
</body>

</html>