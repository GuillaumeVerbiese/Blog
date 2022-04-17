<?php

  //------------------------------------------------------------
  // Création des tableaux qui contiendront les données
  //------------------------------------------------------------

  // Les différents articles
  $dataArticlesList = [];

  // Les catégories
  $dataCategoriesList = [];

  // Les auteurs
  $dataAuthorsList = [];

  //-----------------------------------------------------------
  // Etape 1 : Se connecter à la BDD
  //-----------------------------------------------------------

  $pdo = new PDO(
    "mysql:dbname=;host=localhost;charset=UTF8", 
    "",  
    "", 
    [ PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING ]
  );

  //-----------------------------------------------------------
  // Etape 2 : Executer les requêtes
  //-----------------------------------------------------------

  // 2.1 Rédiger les requêtes SQL -----------------------------

  $sqlArticle  = "SELECT * FROM `post`";
  $sqlAuthor   = "SELECT * FROM `author`";
  $sqlCategory = "SELECT * FROM `category`";

  // 2.2 Exécuter les requêtes --------------------------------

  $pdoStatementArticle  = $pdo->query( $sqlArticle );
  $pdoStatementAuthor   = $pdo->query( $sqlAuthor );
  $pdoStatementCategory = $pdo->query( $sqlCategory );

  // 2.3 Récupérer les résultats ------------------------------

  $dataArticleFromDB  = $pdoStatementArticle->fetchAll( PDO::FETCH_ASSOC );
  $dataAuthorFromDB   = $pdoStatementAuthor->fetchAll( PDO::FETCH_ASSOC );
  $dataCategoryFromDB = $pdoStatementCategory->fetchAll( PDO::FETCH_ASSOC );

  // 2.4 Transformer le tableau de données en tableau d'objets


  foreach( $dataAuthorFromDB as $oneAuthorDataArray ) :
    $dataAuthorsList[ $oneAuthorDataArray['id'] ] = new Author(
      $oneAuthorDataArray['name'],
      $oneAuthorDataArray['image'],
      $oneAuthorDataArray['email']
    );  
  endforeach;

  foreach( $dataCategoryFromDB as $oneCategoryDataArray ) :
    $dataCategoriesList[ $oneCategoryDataArray['id'] ] = new Category(
      $oneCategoryDataArray['name'],
      $oneCategoryDataArray['position']
    );  
  endforeach;

  foreach( $dataArticleFromDB as $oneArticleDataArray ) :

    $dataArticlesList[ $oneArticleDataArray['id'] ] = new Article(
      $oneArticleDataArray['title'],
      $oneArticleDataArray['content'],
      $dataAuthorsList[ $oneArticleDataArray['author_id'] ]->name, 
      $oneArticleDataArray['published_date'],
      $dataCategoriesList[ $oneArticleDataArray['category_id'] ]->title 
    );  
  endforeach;

  