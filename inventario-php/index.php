<?php
session_start();
require 'conexao.php';
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <?php include('navbar.php'); ?>
    <div class="container mt-4">
      <?php include('mensagem.php'); ?>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Lista de Inventário
                <a href="item-create.php" class="btn btn-primary float-end">Adicionar Item</a>
              </h4>
            </div>
            <div class="card-body">
            <form method="GET" class="row mb-3 align-items-center">
            <div class="col-md-2">
             <a href="exportar.php" class="btn btn-outline-success w-100 form-control">
              <i class="bi-download"></i> Exportar CSV
            </a>
            </div>
            <div class="col-md-10">
              <input type="text" name="search" class="form-control" placeholder="Pesquisar por nome do item" value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>">
            </div>
          </form>

            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nome do Item</th>
                  <th>Categoria</th>
                  <th>Status</th>
                  <th>Preço</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $search = isset($_GET['search']) ? mysqli_real_escape_string($conexao, $_GET['search']) : '';
                $sql = "SELECT * FROM inventario_tb";
                if (!empty($search)) {
                  $sql .= " WHERE item_name LIKE '%$search%'";
                }
                $itens = mysqli_query($conexao, $sql);
                if (mysqli_num_rows($itens) > 0) {
                  foreach ($itens as $item) {
                ?>
                <tr>
                  <td><?= $item['id'] ?></td>
                  <td><?= $item['item_name'] ?></td>
                  <td><?= $item['category'] ?></td>
                  <td><?= $item['status'] ?></td>
                  <td><?= $item['price'] ?></td>
                  <td>
                    <a href="item-view.php?id=<?= $item['id'] ?>" class="btn btn-secondary btn-sm"><span class="bi-eye-fill"></span>&nbsp;Visualizar</a>
                    <a href="item-edit.php?id=<?= $item['id'] ?>" class="btn btn-success btn-sm"><span class="bi-pencil-fill"></span>&nbsp;Editar</a>
                    <form action="acoes.php" method="POST" class="d-inline">
                      <button onclick="return confirm('Tem certeza que deseja excluir?')" type="submit" name="delete_item" value="<?= $item['id'] ?>" class="btn btn-danger btn-sm">
                        <span class="bi-trash3-fill"></span>&nbsp;Excluir
                      </button>
                    </form>
                  </td>
                </tr>
                <?php
                  }
                } else {
                  echo '<tr><td colspan="6" class="text-center">Nenhum item encontrado</td></tr>';
                }
                ?>
              </tbody>
            </table>
          </div>

          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

