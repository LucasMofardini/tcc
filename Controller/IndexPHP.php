 <?php
   session_start();
                include_once('config.php');


     /*   if($_SESSION['logado'] = true){
          echo "LOGADO";

       }
        else{
          $_SESSION['logado'] = false;
          $_SESSION['nome'] = "Desconectado";
          echo "TESTE";
          echo "<a href='Login.php'>$username</a>";

        }
    if($_SESSION['logado'] == true)
{echo "Usúario logado";
}
else{
  echo '<a href = "Login.php">Você está desconectado,FAÇA O LOGIN</a>';
}*/
  //Verificação do login
  if(isset($_SESSION['logado'])){
    echo "";
  }
 if($_SESSION['logado']==false){
    echo '<div style="position:fixed; top:30em;" class="login-fixo"><a href = "Views/Login.php" style="color:#B2002A;"> <img class="" style="width:2em;" src="../Views/imagens/iconlogin.png" class="img-fluid" alt="Imagem responsiva"> Faça o login 	</a> </div>';
   

  }

  if($_SESSION['logado'] == true)
  {
    echo "Bem vindo ".$_SESSION['nome']."!!";
    echo "
    <form action='Controller/Logout.php'/>
    <button type='submit' value='LOGOUT'>
    </form>";
  }

         ?>
