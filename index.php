<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Cadastro de Produto</title>
  </head>
  <body>
    <h1>Cadastro de Produto</h1>

    <form action="Controle.php" method="GET">
        <label for="CodProd">Código Produto</label>
        <input type="number" name="CodProd" id="CodProd" min=1 max=10><br>

        <label for="Descricao">Descricao</label>
        <input type="text" name="Descricao" id="Descricao" size=40><br>

        <label for="Valor">Valor</label>
        <input type="number" name="Valor" id="Valor">   <br>     

        <label for="Qtde">Qtde</label>
        <input type="number" name="Qtde" id="Qtde"> <br>  

        <label for="Pagto">Pagto</label>
        <input type="radio" name="Pagto" id="Vista" value="V">Vista
        <input type="radio" name="Pagto" id="Prazo" value="P">Prazo

        <br><br>
        <input type="submit" name='btn' value="Enviar">
        <input type="submit" name='btn' value="Pesquisar">
        <input type="submit" name='btn' value="Excluir">
    </form>
  </body>
</html>