<?php
// Inclui a conexão
include_once '../db/dbConnect.php';

// Nome do Arquivo do Excel que será gerado
$arquivo = 'Lista de Emails - Leads.xls';

// Criamos uma tabela HTML com o formato da planilha para excel
$table = '<table border="1">';
$table .= '<tr>';
$table .= '<td colspan="2">Tabela de E-mails</tr>';
$table .= '</tr>';
$table .= '<tr>';
$table .= '<td><b>Nome</b></td>';
$table .= '<td><b>Email</b></td>';
$table .= '</tr>';

$sql = "SELECT `emailscolected`.`idEmailColected`,
`emailscolected`.`email`
FROM `shopmee_challenge`.`emailscolected`;
";

$result = $conn->query($sql);

$conn->close();

while ($row = $result->fetch_assoc()) {
    $table .= '<tr>';
    $table .= '<td>' . $row['idEmailColected'] . '</td>';
    $table .= '<td>' . $row['email'] . '</td>';
    $table .= '</tr>';
}

$table .= '</table>';

// Força o Download do Arquivo Gerado
header('Cache-Control: no-cache, must-revalidate');
header('Pragma: no-cache');
header('Content-Type: application/x-msexcel');
header("Content-Disposition: attachment; filename=\"{$arquivo}\"");
echo $table;
