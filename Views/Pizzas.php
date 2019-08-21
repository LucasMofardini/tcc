<!DOCTYPE html>
<?php
$tipo = 1;
include_once('../Controller/config.php');
include_once('../Controller/PizzasPHP.php');
include_once('../Views/cabecalho.php');






?>
  <div style="float:left">

      <tr>
        <br>
                <img class="img-padrao"src="https://extra.globo.com/incoming/20107439-a1f-5a2/w488h275-PROP/pizza.jpg" >
                <br><br>
                <center>

              <td class="padrao" >Nome: <span class="nome-Pizzas">Calabresa</span>  </td> <br>
              <td class="padrao"> Preço: <span class="preco-pizza">R$30,00 </span>    </td><br>


              <a id="editar-produtos" href='Atualizar.php?id=  .$imp2['ProdutoID'].  '>Editar Produto</a><br><br>


          <form class='' action='../Controller/DeletarPHP.php' method='get'>
            <button  class="button" type='submit' value=  .$imp2['ProdutoID'].   name='apagar'>Deletar</button>
          </form>

          <form class='' action='#' method='get'>
            <br>
            <button class="button" type='submit' value=  .$imp2['ProdutoID'].   name='Carrinho'>Adicionar ao carrinho</button>
            <br>
          </form>
          </center>

      </tr>
      </div>
      <div style="float:right">

          <tr>
            <br>
                    <img class="img-padrao"src="https://extra.globo.com/incoming/20107439-a1f-5a2/w488h275-PROP/pizza.jpg" >
                    <br><br>
                      <center>
                  <td class="padrao" >Nome: <span class="nome-Pizzas">Calabresa</span>  </td> <br>
                  <td class="padrao"> Preço: <span class="preco-pizza">R$30,00 </span>    </td><br>


                  <a id="editar-produtos" href='Atualizar.php?id=  .$imp2['ProdutoID'].  '>Editar Produto</a><br>
              <form class='' action='../Controller/DeletarPHP.php' method='get'>
                <button  class="button" type='submit' value=  .$imp2['ProdutoID'].   name='apagar'>Deletar</button>
              </form>

              <form class='' action='#' method='get'>
                <br>
                <button class="button" type='submit' value=  .$imp2['ProdutoID'].   name='Carrinho'>Adicionar ao carrinho</button>
                <br>
              </form>
            </center>
          </tr>
          </div>
    <br><br><br>

<style>
@font-face {
src: url(fontes/beloved.otf);
font-family: beloved;
}

.button {
  background-color: rgb(183,13,41);
  border: none;
color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
}
#editar-produtos{
  font-size: 2em;
}
.padrao{
  font-family: beloved;
}

.img-padrao{
  width: 30em;
  border-radius: 1%;
  	transition: transform 0.3s linear 0.1s;
}
.img-padrao:hover{
  transform: scale(1.03);
	transition: 0.6s;
}

@media screen and (max-width: 800px){
  .img-padrao{
    width: 100%;
  }
}
</style>
