      <aside class="col-lg-3">
        
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Rechercher un article..."
            aria-label="Rechercher un article..." aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button">Allez</button>
          </div>
        </div>

        <div class="card">
          <h3 class="card-header">Catégories</h3>
          <ul class="list-group list-group-flush">
            <?php foreach( $dataCategoriesList as $categoryId => $categoryObject ) : ?>
              <li class="list-group-item">
                <a href="index.php?page=category&id=<?= $categoryId ?>">
                  <?= $categoryObject->title ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>

        <div class="card">
          <h3 class="card-header">Auteurs</h3>
          <ul class="list-group list-group-flush">
            <?php foreach( $dataAuthorsList as $authorId => $authorObject ) : ?>
              <li class="list-group-item">
                <a href="index.php?page=author&id=<?= $authorId ?>">
                  <?= $authorObject->name ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>

      </aside>