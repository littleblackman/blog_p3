<?php

// require('AbstractEntityRepository.php');

class ArticleRepository extends AbstractEntityRepository{

  public function add(Article $article){
   $req = $this ->db->prepare('INSERT INTO Article (author,title,content,resume,dateCreation)VALUES(:author,:title,:content,:resume,NOW())');
   $req->bindValue(':author',$article->getAuthor());
   $req->bindValue(':title',$article->getTitle());
   $req->bindValue(':content',$article->getContent());
   $req->bindValue(':resume',$article->getResume());
   $result = $req->execute();
   if($result){
     header("Location:index.php");
   }else echo "erreur de la base";
  }

  public function articleModifier(Article $article){
    $resultat = $this -> db->prepare("UPDATE Article
                            SET title = :title, content = :content, resume = :resume
                            WHERE :id = `id`");
    $resultat->bindValue(':title',$article->getTitle());
    $resultat->bindValue(':content',$article->getContent());
    $resultat->bindValue(':resume',$article->getResume());
    $resultat->bindValue(':id',$article->getId());
    $resultat->execute();
  }

  public function articleSup($id){
    $resultat = $this -> db->prepare("DELETE FROM Article
                            WHERE :id=id");
    $resultat->bindValue(':id', $id);
    $resultat->execute();
  }

}
