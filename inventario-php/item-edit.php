<?php
session_start();
require 'conexao.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    $_SESSION['mensagem'] = 'ID inválido.';
    header('Location: index.php');
    exit;
}

$item_id = $_GET['id'];
$sql = "SELECT * FROM inventario_tb WHERE id = '$item_id'";
$item = mysqli_query($conexao, $sql);
$item = mysqli_fetch_assoc($item);
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <?php include('navbar.php'); ?>
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Editar Item
                <a href="index.php" class="btn btn-danger float-end">Voltar</a>
              </h4>
            </div>
            <div class="card-body">
              <form action="acoes.php" method="POST">
                <input type="hidden" name="item_id" value="<?= $item['id'] ?>">

                <div class="mb-3">
                  <label>Nome do Item</label>
                  <input type="text" name="item_name" class="form-control" value="<?= $item['item_name'] ?>" required>
                </div>
                <div class="mb-3">
                  <label>Categoria</label>
                  <input type="text" name="category" class="form-control" value="<?= $item['category'] ?>" required>
                </div>
                <div class="mb-3">
                  <label>Status</label>
                  <input type="text" name="status" class="form-control" value="<?= $item['status'] ?>" required>
                </div>
                <div class="mb-3">
                  <label>Preço</label>
                  <input type="text" name="price" class="form-control" value="<?= $item['price'] ?>" required>
                </div>

                <!-- Campos extras para edição -->
                <div class="mb-3">
                  <label>Tipo</label>
                  <input type="text" name="type" class="form-control" value="<?= $item['type'] ?>">
                </div>
                <div class="mb-3">
                  <label>Quantidade</label>
                  <input type="number" name="amount" class="form-control" value="<?= $item['amount'] ?>">
                </div>
                <div class="mb-3">
                  <label>Data de Aquisição</label>
                  <input type="date" name="date_of_purchased" class="form-control" value="<?= $item['date_of_purchased'] ?>">
                </div>
                <div class="mb-3">
                  <label>Moeda</label>
                  <input type="text" name="currency" class="form-control" value="<?= $item['currency'] ?>">
                </div>
                <div class="mb-3">
                  <label>Loja</label>
                  <input type="text" name="store" class="form-control" value="<?= $item['store'] ?>">
                </div>
                <div class="mb-3">
                  <label>Projeto</label>
                  <input type="text" name="project" class="form-control" value="<?= $item['project'] ?>">
                </div>
                <div class="mb-3">
                  <label>Departamento</label>
                  <input type="text" name="department" class="form-control" value="<?= $item['department'] ?>">
                </div>
                <div class="mb-3">
                  <label>Fabricante</label>
                  <input type="text" name="manufacturer" class="form-control" value="<?= $item['manufacturer'] ?>">
                </div>
                <div class="mb-3">
  <label>Número do Item</label>
  <input type="text" name="item_number" class="form-control" value="<?= $item['item_number'] ?>">
</div>
<div class="mb-3">
  <label>Unidade de Medida</label>
  <input type="text" name="unit_of_measurement" class="form-control" value="<?= $item['unit_of_measurement'] ?>">
</div>
                <div class="mb-3">
                  <label>Número de Série</label>
                  <input type="text" name="serial_number" class="form-control" value="<?= $item['serial_number'] ?>">
                </div>
                <div class="mb-3">
                  <label>Descrição</label>
                  <textarea name="description" class="form-control"><?= $item['description'] ?></textarea>
                </div>

                <div class="mb-3">
                  <button type="submit" name="update_item" class="btn btn-success">Atualizar</button>
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
