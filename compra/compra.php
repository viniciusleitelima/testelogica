<?php


if (isset($_POST["nome"]) && isset($_POST["preco_unitario"]) && isset($_POST["qtd"])) {
    $valor_desconto = null;
    $preco_pagar = null;
    $nome = $_POST['nome'];
    $qtd = $_POST['qtd'];
    $preco_unitario = str_replace(',','.',$_POST['preco_unitario']);
   $preco_total = floatval($preco_unitario) * $_POST['qtd'];
   if ($qtd <= 5){
       $preco_pagar = $preco_total - $preco_total * 0.02;
       $valor_desconto =  $preco_total * 0.02;
   }elseif (($qtd > 5) && ($qtd <= 10)){
       $valor_desconto =   $preco_total * 0.03;
       $preco_pagar =  $preco_total - $preco_total * 0.03;
   }elseif ($qtd > 10){
       $valor_desconto =  $preco_total * 0.05;
       $preco_pagar =  $preco_total - $preco_total * 0.05;
   }else{
       echo "Não foi possivel calcular o valor com desconto";
   }
   echo "Produto: ".$nome."<br/>";
   echo "Valor total: (".round($preco_unitario,2)."*".$qtd.") = R$ ".round($preco_total,2)."<br/>";
   echo "Desconto: R$ ".round($valor_desconto,2)."<br/>";
   echo "Total a pagar: (".round($preco_total,2)."-".round($valor_desconto,2).") = R$ ".round($preco_pagar,2);
}

