<div class="container">
  <h1>Modifier le contenu de l'article<div id="haut"></div></h1>
  <form method='post' action='index.php?path=articleModifier#haut'>
     <input type='text' name='titre'value="<?php echo $articles -> getTitle(); ?>"></input><br>
     <input type="hidden" name="id" value="<?php echo $articles->getId(); ?>"/>
     <textarea name='content'><?php  echo $articles -> getContent()?></textarea>
     <input class="ajout" type="submit" value="Ajouté" title="Ajouté">
  </form>
</div>
