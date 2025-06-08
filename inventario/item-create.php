<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Criar Item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <?php include('navbar.php'); ?>
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Adicionar Item
                <a href="index.php" class="btn btn-danger float-end">Voltar</a>
              </h4>
            </div>
            <div class="card-body">
              <form action="acoes.php" method="POST">
                <div class="mb-3">
                  <label>Nome do Item</label>
                  <input type="text" name="item_name" class="form-control" required>
                </div>
                <div class="mb-3">
                  <label>Categoria</label>
                  <input type="text" name="category" class="form-control" required>
                </div>
                <div class="mb-3">
                  <label>Status</label>
                  <input type="text" name="status" class="form-control" required>
                </div>
                <div class="mb-3">
                  <label>Preço</label>
                  <input type="text" name="price" class="form-control" required>
                </div>

                <!-- Campos extras para serem armazenados, mas não visíveis na criação -->
                <div class="mb-3">
                  <label>Tipo</label>
                  <input type="text" name="type" class="form-control">
                </div>
                <div class="mb-3">
                  <label>Quantidade</label>
                  <input type="number" name="amount" class="form-control">
                </div>
                <div class="mb-3">
                  <label>Data de Aquisição</label>
                  <input type="date" name="date_of_purchased" class="form-control">
                </div>
                <div class="mb-3">
                  <label>Moeda</label>
                  <input type="text" name="currency" class="form-control">
                </div>
                <div class="mb-3">
                  <label>Loja</label>
                  <input type="text" name="store" class="form-control">
                </div>
                <div class="mb-3">
                  <label>Projeto</label>
                  <input type="text" name="project" class="form-control">
                </div>
                <div class="mb-3">
                  <label>Departamento</label>
                  <input type="text" name="department" class="form-control">
                </div>
                <div class="mb-3">
                  <label>Fabricante</label>
                  <input type="text" name="manufacturer" class="form-control">
                </div>
                <div class="mb-3">
  <label>Número do Item</label>
  <input type="text" name="item_number" class="form-control">
</div>
<div class="mb-3">
  <label>Unidade de Medida</label>
  <input type="text" name="unit_of_measurement" class="form-control">
</div>
                <div class="mb-3">
                  <label>Número de Série</label>
                  <input type="text" name="serial_number" class="form-control">
                </div>
                <div class="mb-3">
                  <label>Descrição</label>
                  <textarea name="description" class="form-control"></textarea>
                </div>

                <div class="mb-3">
                  <button type="submit" name="create_item" class="btn btn-primary">Salvar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
