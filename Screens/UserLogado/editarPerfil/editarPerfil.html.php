<?php
include 'editarPerfil.php';

// Exibe a tabela com os dados cadastrados
$table = $_GET['table'] ?? 'empresas';
$columns = $_GET['columns'] ?? 'nome_empresa, cnpj';
include '../../../verificar_tabela.php';

$name = $_SESSION['nome_empresa'];
?> 

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresas Cadastradas</title>
    <link rel="stylesheet" href="editarPerfil.css">
    <link rel="stylesheet" href="../../Geral/header.css">
    <link rel="stylesheet" href="../../Geral/global.css">
    <link rel="stylesheet" href="../logged_in_user.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" defer></script>
    <script src="../../Geral/header.js" defer></script>
    <script src="../logged_in_user.js" defer></script>
</head>
<body> 
    <header>
        <div class="container">
            <nav class="nav-menu">
                <div> <a href= "../user_logado.php" class="logo">PDA</a></div>

                <div class="size-text">
                    <button class="button-size_text" id="increase-font">A+</button>
                    <button class="button-size_text" id="decrease-font">A-</button>
                </div> <!-- class="size-text" FIM -->
                    
                <div><i id="mode-icon" class="fa-solid fa-moon icons"></i></div>

                    <button class="user_logado">
                        <i class="fa-solid fa-user"></i>
                        <?php echo 'Ola, ' . $name; ?> 
                        <div id="logado"></div>
                    </button> <!-- {class="user_logado" > END} -->
                     
                    <div class="menu-logado">
                        <a class="editar-perfil" href="editarPerfil.html.php">
                            <i class="fa-solid fa-gear"></i>
                            <div class="cf_text">
                                <h6 class="cf_title">Editar Perfil</h6>
                                <p class="cf_subtitle">Atualize suas credenciais</p>
                            </div> <!-- class="cf_text" > END -->
                        </a> <!-- {class="nome_empresa" > END} -->
                    
                        <a class="cadastrar_funcionario" href="../../UserLogadoCadastrofunc/editar.php">
                            <i class="fa-solid fa-wrench"></i>
                            <div class="cf_text">
                                <h6 class="cf_title">Cadastro de funcionários</h6>
                                <p class="cf_subtitle">Cadastre seus funcionários no projeto</p>
                            </div> <!-- class="cf_text" > END -->
                        </a> <!-- {class="cadastrar_funcionario cdf" > END} -->
                    
                        <a class="leave" href="../logout.php">
                            <img class="image_leave" src="../../../images/login_user/logout.png" alt="logout" />
                            <h6 class="text_leave">Sair da conta</h6>
                        </a> <!-- {class="leave" > END} -->
                    </div> <!-- {class="menu-logado" > END} -->
                    
                    </nav> <!-- {class="nav-menu" > END} -->
                    </div> <!-- {class="container" > END} -->
                    
        </header>
    <main>
        <div class="container">
            <!-- Formulário de alteração de email e senha -->
            <h1>Alterar Email e Senha</h1>
            <?php if ($message): ?>
            <p style="color: green;"><?php echo $message; ?></p>
            <?php endif; ?>
            <?php if ($error): ?>
            <p style="color: red;"><?php echo $error; ?></p>
            <?php endif; ?> 
                    
            <form method="POST">
                <div class="container_form">

                    <div class="input_group">
                        <div class="container_input">
                            <label for="email_atual">Email Atual:</label><br>
                            <input type="email" id="email_atual" name="email_atual"><br><br>
                        </div>
                        
                        <div class="container_input">
                            <label for="novo_email">Novo Email:</label><br>
                            <input type="email" id="novo_email" name="novo_email"><br><br>
                        </div>
                    </div>
                    <div class="input_group">
                        <div class="container_input">
                            <label for="senha_atual">Senha Atual:</label><br>
                            <input type="password" id="senha_atual" name="senha_atual"><br><br>
                        </div>
                        
                        <div class="container_input">
                            <label for="nova_senha">Nova Senha:</label><br>
                            <input type="password" id="nova_senha" name="nova_senha"><br><br>
                        </div>
                        
                        <div class="container_input">
                            <label for="confirmar_senha">Confirmar Nova Senha:</label><br>
                            <input type="password" id="confirmar_senha" name="confirmar_senha"><br><br>
                        </div>
                    </div>
                </div>
                <button type="submit">Atualizar Dados</button>
            </form>
                
            <?php 
            // Fechar a conexão
            $conn->close(); 
            ?>
        </div>
    </main>
</body>
</html>
