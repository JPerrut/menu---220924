<?php
include 'dashboard_adminOFC.php';
$id_empresa = $_SESSION['user_id'];
// Definir tabela e colunas com base no tipo de exibição
$tableName = $_GET['table'] ?? 'funcionarios';
$columns = $_GET['columns'] ?? 'id_funcionario,nome_func,cpf,rg';
$isAdmin = $_GET['isAdmin'] ?? TRUE;
include 'buscarOFC.php';
include 'verificar_tabelaOFC.php';
unset($_POST['id_empresa']);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionários Cadastrados</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
            text-align: left;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    
<h2><?php echo ucfirst($tableName); ?> Cadastrados</h2>
    <?php echo generateTable($result, $tableName, $columns); 
    
    // Fechar a conexão
    $conn->close();
    ?>
</body>
</html>