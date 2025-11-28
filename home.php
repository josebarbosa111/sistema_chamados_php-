<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Menu Principal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/chamado.css">
</head>
<body>
  <header class="header">
    <div class="logo">
        <span><img src="img/Computer Support.png" alt=""></span>
      <span>Menu</span>
    </div>
    <div class="user-info" title="Sair">
      <?php 
        session_start();
        if (isset($_SESSION['id_usuario'])) {
          $nome_usuarios = $_SESSION['id_usuario'];
          echo "Olá, ". $nome_usuarios;

        }else {

          echo "<script> alert('Você não está logado!') history.back(); </script>";

        }   
        ?>
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
        <path d="M16 13v-2H7V8l-5 4 5 4v-3zM18 19h-2v-2h2v-2h-2v-2h2v-2h-2V5h2a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2Z"/>
      </svg>
    </div>
  </header>
  <main class="main-menu">
    <div class="menu-buttons">
      <button >Criar novo chamado</button>
      <button>Chamados abertos</button>
      <button>Chamados pendentes</button>
      <button>Chamados fechados</button>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
