<?php
session_start();
require 'conexao.php';

if (isset($_POST['create_item'])) {
  // Sanitização dos dados
  $item_name = mysqli_real_escape_string($conexao, trim($_POST['item_name']));
  $category = mysqli_real_escape_string($conexao, trim($_POST['category']));
  $status = mysqli_real_escape_string($conexao, trim($_POST['status']));
  $price = mysqli_real_escape_string($conexao, trim($_POST['price']));
  $type = mysqli_real_escape_string($conexao, trim($_POST['type']));
  $amount = mysqli_real_escape_string($conexao, trim($_POST['amount']));
  $date_of_purchased = mysqli_real_escape_string($conexao, $_POST['date_of_purchased']);
  $currency = mysqli_real_escape_string($conexao, trim($_POST['currency']));
  $store = mysqli_real_escape_string($conexao, trim($_POST['store']));
  $project = mysqli_real_escape_string($conexao, trim($_POST['project']));
  $department = mysqli_real_escape_string($conexao, trim($_POST['department']));
  $manufacturer = mysqli_real_escape_string($conexao, trim($_POST['manufacturer']));
  $serial_number = mysqli_real_escape_string($conexao, trim($_POST['serial_number']));
  $description = mysqli_real_escape_string($conexao, trim($_POST['description']));
  $item_number = mysqli_real_escape_string($conexao, trim($_POST['item_number']));
  $unit_of_measurement = mysqli_real_escape_string($conexao, trim($_POST['unit_of_measurement']));

  // Inserção no banco de dados
  $sql = "INSERT INTO inventario_tb 
        (item_name, category, status, price, type, amount, date_of_purchased, currency, store, project, department, manufacturer, serial_number, description, item_number, unit_of_measurement) 
        VALUES 
        ('$item_name', '$category', '$status', '$price', '$type', '$amount', '$date_of_purchased', '$currency', '$store', '$project', '$department', '$manufacturer', '$serial_number', '$description', '$item_number', '$unit_of_measurement')";

  if (!mysqli_query($conexao, $sql)) {
    $_SESSION['mensagem'] = 'Erro no banco: ' . mysqli_error($conexao);
    header('Location: index.php');
    exit;
  }

  if (mysqli_affected_rows($conexao) > 0) {
    $_SESSION['mensagem'] = 'Item criado com sucesso';
    header('Location: index.php');
    exit;
  } else {
    $_SESSION['mensagem'] = 'Erro ao criar item';
    header('Location: index.php');
    exit;
  }
}

if (isset($_POST['update_item'])) {
  // Sanitização dos dados
  $item_id = mysqli_real_escape_string($conexao, $_POST['item_id']);
  $item_name = mysqli_real_escape_string($conexao, trim($_POST['item_name']));
  $category = mysqli_real_escape_string($conexao, trim($_POST['category']));
  $status = mysqli_real_escape_string($conexao, trim($_POST['status']));
  $price = mysqli_real_escape_string($conexao, trim($_POST['price']));
  $type = mysqli_real_escape_string($conexao, trim($_POST['type']));
  $amount = mysqli_real_escape_string($conexao, trim($_POST['amount']));
  $date_of_purchased = mysqli_real_escape_string($conexao, $_POST['date_of_purchased']);
  $currency = mysqli_real_escape_string($conexao, trim($_POST['currency']));
  $store = mysqli_real_escape_string($conexao, trim($_POST['store']));
  $project = mysqli_real_escape_string($conexao, trim($_POST['project']));
  $department = mysqli_real_escape_string($conexao, trim($_POST['department']));
  $manufacturer = mysqli_real_escape_string($conexao, trim($_POST['manufacturer']));
  $serial_number = mysqli_real_escape_string($conexao, trim($_POST['serial_number']));
  $description = mysqli_real_escape_string($conexao, trim($_POST['description']));
  $item_number = mysqli_real_escape_string($conexao, trim($_POST['item_number']));
  $unit_of_measurement = mysqli_real_escape_string($conexao, trim($_POST['unit_of_measurement']));

  // Atualização no banco de dados
  $sql = "UPDATE inventario_tb 
        SET item_name = '$item_name', category = '$category', status = '$status', price = '$price', type = '$type', amount = '$amount', 
            date_of_purchased = '$date_of_purchased', currency = '$currency', store = '$store', project = '$project', 
            department = '$department', manufacturer = '$manufacturer', serial_number = '$serial_number', description = '$description',
            item_number = '$item_number', unit_of_measurement = '$unit_of_measurement'
        WHERE id = '$item_id'";

  mysqli_query($conexao, $sql);
  if (mysqli_affected_rows($conexao) > 0) {
    $_SESSION['mensagem'] = 'Item atualizado com sucesso';
    header('Location: index.php');
    exit;
  } else {
    $_SESSION['mensagem'] = 'Erro ao atualizar item';
    header('Location: index.php');
    exit;
  }
}

if (isset($_POST['delete_item'])) {
  $item_id = mysqli_real_escape_string($conexao, $_POST['delete_item']);
  $sql = "DELETE FROM inventario_tb WHERE id = '$item_id'";
  mysqli_query($conexao, $sql);
  if (mysqli_affected_rows($conexao) > 0) {
    $_SESSION['mensagem'] = 'Item excluído com sucesso';
    header('Location: index.php');
    exit;
  } else {
    $_SESSION['mensagem'] = 'Erro ao excluir item';
    header('Location: index.php');
    exit;
  }
}
?>
