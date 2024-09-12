<?php

echo "Produtos cadastrados no sistema.";

$escolha = 1;
$nomeProduto1 = "Maçã";
$nomeProduto2 = "Manga";
$nomeProduto3 = "Morango";
$produto1 = 15;
$produto2 = 10;
$produto3 = 5;
$comprado1 = 13;
$comprado2 = 9;
$comprado3 = 5;
$preco1 = 25;
$preco2 = 20;
$preco3 = 15;
$atualizado1 = $produto1 - $comprado1;
$atualizado2 = $produto2 - $comprado2;
$atualizado3 = $produto3 - $comprado3;

/* Para aparecer se o produto precisa ser reabastecido, basta alterar a variável $produto1 2 e 3
ou a variável $comprado1 2 e 3, se a diferença for <=4, aparecerá que precisa ser reabastecida */


echo "<br><br> $nomeProduto1, uma fruta doce e deliciosa, a quantidade em estoque é $produto1 e o seu valor unitário é R$ $preco1.";
echo "<br><br> $nomeProduto2, uma fruta doce e deliciosa, a quantidade em estoque é $produto2 e o seu valor unitário é R$ $preco2.";
echo "<br><br> $nomeProduto3, uma fruta doce e deliciosa, a quantidade em estoque é $produto3 e o seu valor unitário é R$ $preco3.";

      if ($escolha == 1 && $atualizado1 <= 4) {
        
        echo "<br><br><br><br> O produto comprado foi $nomeProduto1, a quantidade foi $comprado1 e o valor a ser pago é R$ ". $comprado1 * $preco1."."; 
        echo "<br><br> A quantidade de produtos atualizados no estoque é $atualizado1";
        echo "<br><br> O produto $nomeProduto1 precisa ser reabastecido.";

    } elseif ($escolha == 2 && $atualizado2 <= 4) {
        echo "<br><br><br><br> O produto comprado foi $nomeProduto2, a quantidade foi $comprado2 e o valor a ser pago é R$ ". $comprado2 * $preco2.".";     
        echo "<br><br> A quantidade de produtos atualizados no estoque é $atualizado2";
        echo "<br><br> O produto $nomeProduto2 precisa ser reabastecido.";

    } elseif ($escolha == 3 && $atualizado3 <= 4) {
        echo "<br><br><br><br> O produto comprado foi $nomeProduto3, a quantidade foi $comprado3 e o valor a ser pago é R$ ". $comprado3 * $preco3.".";
        echo "<br><br> A quantidade de produtos atualizados no estoque é $atualizado3";
        echo "<br><br> O produto $nomeProduto3 precisa ser reabastecido.";
    }
      else if ($escolha == 1 && $atualizado1 > 4) {
        
        echo "<br><br><br><br> O produto comprado foi $nomeProduto1, a quantidade foi $comprado1 e o valor a ser pago é R$ ". $comprado1 * $preco1."."; 
        echo "<br><br> A quantidade de produtos atualizados no estoque é $atualizado1";
       
    } elseif ($escolha == 2 && $atualizado2 > 4) {
        echo "<br><br><br><br> O produto comprado foi $nomeProduto2, a quantidade foi $comprado2 e o valor a ser pago é R$ ". $comprado2 * $preco2.".";     
        echo "<br><br> A quantidade de produtos atualizados no estoque é $atualizado2";
       

    } elseif ($escolha == 3 && $atualizado3 > 4) {
        echo "<br><br><br><br> O produto comprado foi $nomeProduto3, a quantidade foi $comprado3 e o valor a ser pago é R$ ". $comprado3 * $preco3.".";
        echo "<br><br> A quantidade de produtos atualizados no estoque é $atualizado3";
    }
   
?>