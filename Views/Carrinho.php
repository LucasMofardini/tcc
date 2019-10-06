
    <?php
    include_once('../Views/cabecalho.php');
    session_start();
    include_once('../Controller/config.php');

    ?>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<div class="carrinho-bloco" >

    <br><br>
  <center>
  <img class='carrinho-img' src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT32jftbvrjUkeZ582VrFbyXaGU0mQQp-pZOMpHQiwJdzoJ3LOl" alt="">
    <ul>
      <br>
      <li>Nome:</li>
      <li>Preço:</li>
      <form action='../Controller/DeletarPHP.php'>
        <br>
      	<button name='del' value='".$row['ProdutoID']."' >Tirar do carrinho</button>
      </form>
    </ul>
</center>
    </div>











     <?php
    if($_SESSION['logado'] == true){
    include_once('../Controller/CarrinhoPHP.php');
}else{
  echo "<p><a href='Login.php'>Efetue o login</a></p>";
}

    ?>
  </body>
</html>
<style media="screen">
.carrinho-bloco{
list-style-type: none;
}
  .carrinho-img{
    height: 20em;
    border-radius: 5px;
  }
  .lis{
    list-style: none;
    font-size:1.5em;
  }
  button{
    background-color: #B2002A;
border: none;
color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
  }
  ul{
    list-style-type: none;
  }
</style>
