<div class="container">
    <h1 class="text-center">
      Auteur - <?= $authorToDisplay->name ?>
    </h1>

    <div class="row">

      <main class="col-lg-9">
        <?php 
          foreach( $dataArticlesList as $articleId => $articleObject ) :
            if( $authorToDisplay->name === $articleObject->author ) :
              require __DIR__ . "/partials/article.tpl.php";
            endif;
          endforeach; 
        ?>
      </main>

      <?php 
        require __DIR__ . "/partials/aside.tpl.php"; 
      ?>
</div>