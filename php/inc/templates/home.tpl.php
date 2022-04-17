  <div class="container">
    <div class="row">

      <main class="col-lg-9">

        <?php foreach( $dataArticlesList as $articleId => $articleObject ) : ?>
          <?php require __DIR__ . "/partials/article.tpl.php"; ?>
        <?php endforeach; ?>

        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-between">
            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-arrow-left"></i> Précédent</a></li>
            <li class="page-item"><a class="page-link" href="#">Suivant <i class="fa fa-arrow-right"></i></a></li>
          </ul>
        </nav>

      </main>

      <?php 
        require __DIR__ . "/partials/aside.tpl.php"; 
      ?>

    </div>