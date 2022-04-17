<?php


// ===========================================================
// Inclusion des fichiers nécessaires
// ===========================================================

require __DIR__ . '/kint.phar';

require __DIR__ . '/inc/classes/Article.php';
require __DIR__ . '/inc/classes/Author.php';
require __DIR__ . '/inc/classes/Category.php';

// -----------------------------------------------------
// Récupération de la page à afficher
// -----------------------------------------------------

// Par défaut, page d'accueil
$pageToDisplay = 'home';

if( isset($_GET['page']) && $_GET['page'] !== '') 
{
  $pageToDisplay = $_GET['page'];
}

// inclision des données en BDD
require __DIR__ . '/inc/data_from_db.php';

if( $pageToDisplay === 'home' ) 
{
  // ------------------
  // Page d'Accueil
  // ------------------

} 
elseif( $pageToDisplay === 'article' ) 
{
  // ------------------ 
  // Page Article
  // ------------------

  // Récupération de la liste d'objets Article
  $articlesList = $dataArticlesList;

  // On souhaite récupérer uniquement les données de l'article
  // à afficher avec filtre
  $articleId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

  if( $articleId !== false && $articleId !== null ) 
  {
    $articleObject = $articlesList[$articleId];
  } 
  else 
  {
    // Renvoi sur la pge d'acceuil si l'id n'existe pas ou si l'élément transmis n'est pas le bon
    $pageToDisplay = 'home';
  }
} 
elseif( $pageToDisplay === 'author' ) 
{
  // récupértion de l'id
  $authorID = $_GET['id'] ?? 0;

  $authorToDisplay = $dataAuthorsList[ $authorID ] ?? null;
} 
elseif( $pageToDisplay === 'category' ) 
{
  $categoryID = $_GET['id'] ?? 0;

  $categoryToDisplay = $dataCategoriesList[ $categoryID ] ?? null;

}

// ===========================================================
// Affichage
// ===========================================================

require __DIR__ . '/inc/templates/header.tpl.php';
require __DIR__ . '/inc/templates/' . $pageToDisplay . '.tpl.php';
require __DIR__ . '/inc/templates/footer.tpl.php';
