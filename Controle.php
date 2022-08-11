<?php
$cod = $_GET["CodProd"];
$Descricao = $_GET["Descricao"];
$Qtde = $_GET["Qtde"];
$Valor = $_GET["Valor"];
$Pgto = isset($_GET["Pagto"]);
$botao = $_GET["btn"];

include 'Recibo.php';

$rec = new Recibo();
$rec->setCod($cod);
$rec->setDescricao($Descricao);
$rec->setQuantidade($Qtde);
$rec->setValor($Valor);
$rec->setPgto($Pgto);


include 'ReciboDAO.php';
$recDao = new ReciboDAO();

if($botao =='Enviar'){
    $recDao->cadastrarPedido($rec);
}

else if($botao == 'Pesquisar'){
    $recDao->exibirPedido();

    foreach($recDao->exibirPedido() as $valor){
        echo $valor['descricao'].'<br>';
        echo $valor['quantidade'].'<br>';
        echo $valor['valor'].'<br>';
        echo $valor['quantidade'].'<br>';
        echo $valor['pgto'].'<hr>';

    }
}

else if($botao =='Excluir'){
    $recDao->deletarPedido($rec);
}







/*include_once "CalculoValor.php";
$Calc = new CalculoFinal;

$Calc->setValor($Valor);
$Calc->setQtde($Qtde);

if ($Pagto == "Vista")
{
    $Calc->setPorc(0.95);
}
else
{
    $Calc->setPorc(1.075);
}

echo ' *** RECIBO *** ' . '<br>';
echo 'O produto ' .  $Descricao . '<br>';
echo '...'. '<br>';
echo 'Valor ' . $Valor . '<br>';
echo 'Final ' . $Calc->Calculo(); */

?>