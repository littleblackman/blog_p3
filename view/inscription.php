<?php include("header.php"); ?>
<div class="container" style="text-align:center">
  <form method='post' action='index.php?path=inscripValid#haut'>
      <input type='hidden' name='login' />
      <h2>Inscription<div id="haut"></div></h2>
      Prenom ou pseudo :<br>
      <input type='text' name='prenom'> <br>
      Courriel<br>
      <input type='email' name='mail'> <br>
      Mot de passe<br>
      <input type='password' name='pass'> <br>
      <input type='submit' class='myButton' value='Se connecter'>
  </form>
</div>
<?php include("footer.php"); ?>
