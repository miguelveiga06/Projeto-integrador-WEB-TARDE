<php
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>CadastroDeProdutos</title>

    <link rel="stylesheet" href="style.css">

</head>
<header>    
    <h1>PagMaix</h1>
</header>
    <body> 

    <div class="boxDoCadastro" >
    
    <form action="/cadastrar-produto" method="post" class="cacha">
      
        <h1 class="cacha">Cadastro de Produtos</h1>
        
        <label for="nome" >Nome do Produto:</label>
        <input type="text" id="nome" name="nome" required>
        
        <label for="marca">marca:</label>
        <input type="varchar" id="marca" name="marca" required>

        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao" rows="1" required></textarea>

        <label for="quantidade">Quantidade:</label>
        <input type="number" id="quantidade" name="quantidade" required>

        <label for="lote_produto ">Lote:</label>
        <input type="number" id="lote_produto" name="lote_produto" required>

        

        <label for="categoria_produto">categoria do produto:</label>
        <input type="varchar" id="categoria_produto" name="categoria_produto" required>

        <div class="dataContainer">
            <div class="menor">
                <label for="data_fabricacao">Data de Fabricação:</label>
                <input type="date" id="data_fabricacao" name="data_fabricacao" required>
            </div>
            
            <div class="menor">
                <label for="data_vencimento">Data de Vencimento:</label>
                <input type="date" id="data_vencimento" name="data_vencimento" required>   
            </div>
        </div>
        <div class="botoesContainer">
         
            <button type="submit" class="botaoDCadastrar" >Cadastrar</button>
            <button type="submit"class="botaoDCadastrar" href="Menu.html">Estoque</button>
            <button type="button" class="botaoDCadastrar" onclick="window.history.back();" >     voltar</button>  
   
   
    </footer>
    </form> 
    </div> 
</div>
    </body>
    
    
<footer class="footer">
    <p>produção turma desenvolvimento web tarde</p>
   
</footer>
</html>