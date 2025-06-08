<?php
require 'conexao.php';

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=inventario.csv');

$output = fopen('php://output', 'w');

// Cabeçalho do CSV
fputcsv($output, ['ID', 'Nome do Item', 'Categoria', 'Status', 'Preço']);

// Consulta ao banco
$sql = "SELECT * FROM inventario_tb";
$result = mysqli_query($conexao, $sql);

// Escreve os dados no CSV
while ($row = mysqli_fetch_assoc($result)) {
    fputcsv($output, [
        $row['id'],
        $row['item_name'],
        $row['category'],
        $row['status'],
        $row['price']
    ]);
}

fclose($output);
exit;
