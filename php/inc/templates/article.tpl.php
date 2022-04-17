<div class="container">
  <div class="row">

    <main class="col-lg-9">

      <?php require __DIR__ . "/partials/article.tpl.php"; ?>

      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-between">
          <li class="page-item">
            <a class="page-link" href="index.html">
              <i class="fa fa-arrow-left"></i> Retour à l'accueil
            </a>
          </li>
        </ul>
      </nav>

    </main>
    
    <?php 
      require __DIR__ . "/partials/aside.tpl.php"; 
    ?>
    
  </div><!-- /.row -->
</div>