<div class="container">
    <h1 class="text-center">
      Catégorie - <?= $categoryToDisplay->title ?>
    </h1>

    <div class="row">

      <main class="col-lg-9">

        <?php 
          foreach( $dataArticlesList as $articleId => $articleObject ) :
            if( $categoryToDisplay->title === $articleObject->category ) :
              require __DIR__ . "/partials/article.tpl.php";
            endif;
          endforeach; 
        ?>

      </main>

      <?php 
        require __DIR__ . "/partials/aside.tpl.php"; 
      ?>
</div>