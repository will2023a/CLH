<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blessplan Digital</title>
  <!-- PrimeFlex for modern layout -->
  <link rel="stylesheet" href="https://unpkg.com/primeflex@3.3.0/primeflex.css">
  <!-- PrimeIcons for modern icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/primeicons/6.0.1/primeicons.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      color: #333;
    }

    header {
      background-color: #002855;
      color: white;
      padding: 1rem 2rem;
      position: relative;
    }

    header .logo img {
      max-height: 50px;
    }

    header nav ul {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      gap: 1.5rem;
    }

    header nav ul li a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s;
    }

    header nav ul li a:hover {
      color: #f9a825;
    }

    /* Menu de hambúrguer */
    .hamburger {
      display: none;
      flex-direction: column;
      gap: 5px;
      cursor: pointer;
    }

    .hamburger span {
      display: block;
      width: 25px;
      height: 3px;
      background-color: white;
    }

    .mobile-menu {
      display: none;
      flex-direction: column;
      gap: 1rem;
      background-color: #002855;
      position: absolute;
      top: 100%;
      left: 0;
      width: 100%;
      padding: 1rem;
    }

    .mobile-menu a {
      color: white;
      text-decoration: none;
      font-weight: bold;
    }

    .mobile-menu a:hover {
      color: #f9a825;
    }

    @media (max-width: 768px) {
      nav ul {
        display: none;
      }

      .hamburger {
        display: flex;
      }

      .mobile-menu {
        display: none;
      }

      .mobile-menu.active {
        display: flex;
      }
    }
  </style>
</head>

<body>
  <?php
  // Verifica se há mensagens de sessão
  if (isset($_SESSION['mensagem'])) {
    $tipo = $_SESSION['tipo'] == "sucesso" ? "alert-success" : "alert-danger";
    echo "<div class='alert $tipo text-center' role='alert'>{$_SESSION['mensagem']}</div>";
    unset($_SESSION['mensagem']); // Remove a mensagem da sessão
    unset($_SESSION['tipo']);
  }
  ?>

  <header class="flex align-items-center justify-content-between">
    <div class="logo">
      <img src="img/icon.png" alt="Logo">
    </div>
    <nav>
      <ul class="flex">
        <li><a href="/index.php">Home</a></li>
        <li><a href="/servico.html">Serviços</a></li>
        <li><a href="/sobrenos.html">Sobre Nós</a></li>
        <li><a href="/contato.html">Contato</a></li>
      </ul>
      <div class="hamburger" onclick="toggleMenu()">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="mobile-menu" id="mobileMenu">
        <a href="/index.php">Home</a>
        <a href="/servico.html">Serviços</a>
        <a href="/sobrenos.html">Sobre Nós</a>
        <a href="/contato.html">Contato</a>
      </div>
    </nav>
  </header>

  <main class="p-4">
    <section class="mb-4">
      <h1 class="text-4xl text-primary mb-2">Blessplan Digital</h1>
      <p class="text-lg">
        Especialistas em serviços de TI, focamos em soluções personalizadas para otimizar seu negócio e mantê-lo à frente no mercado.
      </p>
      <ul class="list-none mt-3">
        <li><i class="pi pi-check-circle text-primary"></i> <strong>Desenvolvimento de Sistemas:</strong> Soluções sob medida para suas necessidades.</li>
        <li><i class="pi pi-check-circle text-primary"></i> <strong>Suporte Técnico:</strong> Assistência contínua para operações otimizadas.</li>
        <li><i class="pi pi-check-circle text-primary"></i> <strong>Análise de Dados:</strong> Transformamos dados em insights valiosos.</li>
        <li><i class="pi pi-check-circle text-primary"></i> <strong>Consultoria em TI:</strong> Orientação especializada para transformação digital.</li>
      </ul>
    </section>
  </main>

  <footer class="mt-4 text-center">
    <p>Todos os direitos reservados</p>
    <p>Blessplan Digital - SOLUÇÕES T.I</p>
    <p>Visite nossas páginas e fique por dentro do que há de melhor no mercado.</p>
  </footer>

  <script>
    function toggleMenu() {
      const mobileMenu = document.getElementById('mobileMenu');
      mobileMenu.classList.toggle('active');
    }
  </script>
</body>

</html>