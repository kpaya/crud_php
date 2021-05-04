<div class="container">
  <div class="row bg-secondary">
    <div class="col text-center">
      <h1>Notes - CRUD</h1>
    </div>
  </div>

  <div class="col-sm">
    <div class="card shadow">
      <div class="card-header">
        <h3><?= PAGETITLE ?></h3>
        <div class="card-body">

          <form action="" method="POST">

            <div class="form-row mb-3">
              <div class="form-group col-md-6">
                <label for="titleInput">Título</label>
                <input type="text" class="form-control" name="titleNote" id="titleInput" value="<?= isset($noteRetrieved->title) ? $noteRetrieved->title : '' ?>" required <?= PAGE == 'show' ? "readonly" : ''; ?>>
              </div>
            </div>

            <div class="form-row mb-3">
              <div class="form-group col-md">
                <label for="descriptionArea">Descrição</label>
                <textarea class="form-control" placeholder="Preencha sua anotação aqui" name="descriptionNote" id="descriptionArea" <?= PAGE == 'show' ? "readonly" : ''; ?> style="height: 100px"><?= isset($noteRetrieved->description) ? $noteRetrieved->description : '' ?></textarea>
              </div>
            </div>

            <div class="form-row mb-3">
              <div class="form-check form-switch">
                <input class="form-check-input" name="finishedNote" type="checkbox" id="finishedSwitch" <?= isset($noteRetrieved->finished) && $noteRetrieved->finished == 1 ? "checked" : ''; ?> <?= PAGE == 'show' ? "disabled" : ''; ?>>
                <label class="form-check-label" for="finishedSwitch">Finalizado</label>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <button type="submit" class="btn btn-primary" <?= PAGE == 'show' ? "disabled style='display: none;'" : ''; ?>>Inserir</button>
              </div>
              <div class="col-sm-6 text-end">
                <a href="index.php">
                  <button type="button" class="btn btn-success">Voltar</button>
                </a>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>