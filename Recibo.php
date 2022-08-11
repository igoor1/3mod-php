<?php

class recibo{
    private $cod_produto, $descricao, $quantidade, $valor, $pgto;

    public function getCod(){
        return $this->codigo;
    }
    public function setCod($cod_produto){
        $this->codigo = $cod_produto;
    }

    public function getDescricao(){
        return $this->descricao;
    }
    public function setDEscricao($descricao){
        $this->descricao = $descricao;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }
    public function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
    }

    public function getValor(){
        return $this->valor;
    }
    public function setValor($valor){
        $this->valor = $valor;
    }

    public function getPgto(){
        return $this->pgto;
    }
    public function setPgto($pgto){
        $this->pgto = $pgto;
    }
}
?>