<div class="container">
  <div class="row bg-secondary">
    <div class="col text-center">
      <h1>Notes CRUD</h1>
    </div>
  </div>

  <div class="row my-3">

    <div class="col-sm-1">

      <a href="index.php">
        <button type="button" class="btn btn-success">Voltar</button>
      </a>

    </div>

  </div>



  <div class="col-sm">
    <div class="card shadow">
      <div class="card-body">

        <form action="" method="POST">

          <div class="form-row mb-3">
            <div class="form-group col-md-6">
              <label for="titleInput">Título</label>
              <input type="text" class="form-control" name="titleNote" id="titleInput">
            </div>
          </div>

          <div class="form-row mb-3">
            <div class="form-group col-md">
              <label for="descriptionArea">Descrição</label>
              <textarea class="form-control" placeholder="Preencha sua anotação aqui" name="descriptionNote" id="descriptionArea" style="height: 100px"></textarea>
            </div>
          </div>

          <div class="form-row">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
              <label class="form-check-label" name="priorityNote" for="flexSwitchCheckDefault">Prioridade</label>
            </div>
          </div>

          <button type="submit" class="btn btn-primary mt-3"><i class="fab fa-500px"></i>Inserir</button>
        </form>

      </div>
    </div>
  </div>
  <footer class="main-footer text-center bg-primary mt-3">
    <strong><span>Pronotech Soluções Tecnológicas</span> - </strong>
    CNPJ: 39.293.981/0001-48 <br>Copyright &copy; 2021
    <div class="float-right d-none d-sm-inline-block">
      <b>Versão</b> 1.0.0
    </div>
  </footer>
</div>