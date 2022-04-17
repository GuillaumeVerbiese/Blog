<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,800" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Ma feuille de style pour mon blog -->
    <link rel="stylesheet" href="../css/blog.css">

    <title>Blog</title>
  </head>
  <body>

    <!-- HEADER -->
    <header>
      <!-- NAV -->
      <nav class="navbar navbar-expand-md navbar-light">
        <div class="container-fluid">  
          
          <a class="navbar-brand" href="./">A la dérive</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav ">
              <?php foreach( $dataCategoriesList as $categoryId => $categoryObject ) : ?>
                <li class="nav-item">
                  <a class="nav-link" href="index.php?page=category&id=<?= $categoryId ?>">
                    <?= $categoryObject->title ?>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div> 
      </nav>
      <section class="text-center">
        <h1>A la dérive</h1>
        <hr />
        <p>
          Un blog collaboratif de développeurs web
        </p>
      </section>
    </header>