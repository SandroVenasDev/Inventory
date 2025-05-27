<?php
session_start();
require 'conexao.php';

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
    <title>Visualizar Item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <?php include('navbar.php'); ?>
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Detalhes do Item
                <a href="index.php" class="btn btn-danger float-end">Voltar</a>
              </h4>
            </div>
            <div class="card-body">
              <p><strong>Nome:</strong> <?= $item['item_name'] ?></p>
              <p><strong>Categoria:</strong> <?= $item['category'] ?></p>
              <p><strong>Status:</strong> <?= $item['status'] ?></p>
              <p><strong>Preço:</strong> <?= $item['price'] ?></p>
              <p><strong>Tipo:</strong> <?= $item['type'] ?></p>
              <p><strong>Quantidade:</strong> <?= $item['amount'] ?></p>
              <p><strong>Data de Aquisição:</strong> <?= $item['date_of_purchased'] ?></p>
              <p><strong>Moeda:</strong> <?= $item['currency'] ?></p>
              <p><strong>Loja:</strong> <?= $item['store'] ?></p>
              <p><strong>Projeto:</strong> <?= $item['project'] ?></p>
              <p><strong>Departamento:</strong> <?= $item['department'] ?></p>
              <p><strong>Fabricante:</strong> <?= $item['manufacturer'] ?></p>
              <p><strong>Número do Item:</strong> <?= $item['item_number'] ?></p>
              <p><strong>Unidade de Medida:</strong> <?= $item['unit_of_measurement'] ?></p>
              <p><strong>Número de Série:</strong> <?= $item['serial_number'] ?></p>
              <p><strong>Descrição:</strong> <?= $item['description'] ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
