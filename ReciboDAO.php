<?php

include_once 'Conexao.php';

class ReciboDAO{
    public function cadastrarPedido(Recibo $r){
        $sql = 'insert into dados (cod_produto, descricao, valor, quantidade, pgto) values(?,?,?,?,?)';

        $banco = new conexao();
        $con = $banco->getConexao();
        $result = $con->prepare($sql);
        $result->bindValue(1, $r->getCod());
        $result->bindValue(2, $r->getDescricao());
        $result->bindValue(3, $r->getValor());
        $result->bindValue(4, $r->getQuantidade());
        $result->bindValue(5, $r->getPgto());
        $final = $result->execute();

        if($final){
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('cadastrado com sucesso');
            window.location.href ='index.php';
            </script>");
        } 
    }

    public function exibirPedido(){
        $sql = 'select * from dados';

        $banco = new conexao();
        $con = $banco->getConexao();
        $result = $con->prepare($sql);
        $result->execute();

        if($result->rowCount()>0){
            $valor = $result->fetchAll(\PDO::FETCH_ASSOC);
            return $valor;
        }
    }

    public function deletarPedido(Recibo $r){
        $sql = 'delete from dados where cod_produto=?';

        $banco = new conexao();
        $con = $banco->getConexao();
        $result = $con->prepare($sql);
        $result->bindValue(1, $r->getCod());
        $final = $result->execute();

        if($final){
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('deletado com sucesso');
            window.location.href ='index.php';
            </script>"); 
       }else{
        echo 'nao excluido';
       }
    }
}

?>