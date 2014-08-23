<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Temporary Zone</title>
  <link rel="shortcut icon" href="/images/favicon.ico">

  <link rel="stylesheet" href="/css/reset.css">
  <link rel="stylesheet" href="/css/style.css">

  <script src="/js/script.js"></script>
</head>


<body>

    <header>
    <ul >
        <li><h2><a href="/" >TZ</a></h2></li>
        <li><h2 class="breadcrumb">web</h2></li>

    </ul>
    <h1>    
Temporary <span>Web</span>
</h1>
  </header>


<main class="cf top">


<?php
  try {
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/php/connect.php";
    include_once($path);


  $stmt = $conn->prepare
  //Seleciona todas as ideias do utilizador logado, ligado às accções(quantidade/valor) e com uma subquery que devolve as hashtags
  

('SELECT t.id_trabalho,titulo,cliente,url,a,descricao,s.tecnologias AS "tecnologias"
from trabalho t,
(Select string_agg(te.nome, \' \') AS "tecnologias",t.id_trabalho
FROM trabalho t,grupo g, tecnologia te
WHERE g.id_trabalho=t.id_trabalho AND g.id_tecnologia=te.id_tecnologia
GROUP BY t.id_trabalho) s
WHERE s.id_trabalho=t.id_trabalho AND t.id_categoria=1;');

  $stmt->execute();

  $count_r=$stmt->rowCount();
  for ($x=0; $x<$count_r; $x++){
    $row = $stmt->fetch();

    echo '<div class="stripe cf" ><h2>'.$row['cliente'].'</h2>';
    echo '<a href="'.$row['a'].'">';
    echo '<div class="bg" style="background-image:url('.strtolower($row['a']).'/bg.jpg)" >';
    echo '<h1 class="text_strip">'.$row['titulo'].'</h1></div> </a>';
    echo '<h4>'.$row['tecnologias'].'</h4></div>';



  }
    #echo '<div class="stripe cf" ><h2>'.$row['cliente'].'</h2><a <h1 class="bg" style="background-image:url('.strtolower($row['a']).'/bg.jpg)" ><a href="'.$row['a'].'">'.$row['titulo'].'</a></h1> </a> <h4>'.$row['tecnologias'].'</h4></div>';

  } catch(PDOException $e) {
              echo 'ERROR: ' . $e->getMessage();
  }
?>



</main>


 </body>
</html>