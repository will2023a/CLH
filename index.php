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
</head>

<body class="p-4">
  <?php
  // Verifica se há mensagens de sessão
  if (isset($_SESSION['mensagem'])) {
    $tipo = $_SESSION['tipo'] == "sucesso" ? "alert-success" : "alert-danger";
    echo "<div class='alert $tipo text-center' role='alert'>{$_SESSION['mensagem']}</div>";
    unset($_SESSION['mensagem']); // Remove a mensagem da sessão
    unset($_SESSION['tipo']);
  }
  ?>

  <header class="flex align-items-center justify-content-between mb-4">
    <div class="logo">
      <img src="img/icon.png" alt="Logo" class="w-4rem">
    </div>
    <nav>
      <ul class="list-none flex gap-3">
        <li><a href="/index.php" class="text-primary hover:text-primary-600">Home</a></li>
        <li><a href="/servico.html" class="text-primary hover:text-primary-600">Serviços</a></li>
        <li><a href="/sobrenos.html" class="text-primary hover:text-primary-600">Sobre Nós</a></li>
        <li><a href="/contato.html" class="text-primary hover:text-primary-600">Contato</a></li>
      </ul>
    </nav>
  </header>

  <main>
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

    <section class="mb-4">
      <h2 class="text-3xl text-primary mb-3">Avaliações</h2>
      <div class="grid grid-nogutter">
        <div class="col-12 md:col-4">
          <div class="card p-3 shadow-2">
            <span class="text-yellow-500">⭐️⭐️⭐️⭐️⭐️</span>
            <p><strong>Eduardo - Gerente da empresa Global projetores</strong></p>
            <p>Serviço com Power Apps e Power Automate para gerar orçamento e enviar no e-mail do responsável.</p>
          </div>
        </div>
        <div class="col-12 md:col-4">
          <div class="card p-3 shadow-2">
            <span class="text-yellow-500">⭐️⭐️⭐️⭐️⭐️</span>
            <p><strong>Anderson - Diretor de T.I Transcourier</strong></p>
            <p>Serviço chamada de API para consultar minutas direto no Google Sheets.</p>
          </div>
        </div>
        <div class="col-12 md:col-4">
          <div class="card p-3 shadow-2">
            <span class="text-yellow-500">⭐️⭐️⭐️⭐️⭐️</span>
            <p><strong>André Galvão - Diretor de Imobiliária - Unai - MG</strong></p>
            <p>Serviço de tratamento de Big Data para dashboards e emissão de orçamento consultando o CPF do cliente.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="mb-4">
      <h2 class="text-3xl text-primary mb-3">Frameworks que Trabalhamos</h2>
      <div class="flex gap-3">
        <i class="pi pi-react text-4xl text-primary"></i>
        <i class="pi pi-node text-4xl text-primary"></i>
        <i class="pi pi-php text-4xl text-primary"></i>
        <i class="pi pi-java text-4xl text-primary"></i>
        <i class="pi pi-python text-4xl text-primary"></i>
      </div>
    </section>
  </main>

  <footer class="mt-4 text-center">
    <p>Todos os direitos reservados</p>
    <p>Blessplan Digital - SOLUÇÕES T.I</p>
    <p>Visite nossas páginas e fique por dentro do que há de melhor no mercado.</p>
    <div class="flex justify-content-center gap-3 mt-2">
      <a href="https://www.instagram.com/blessplan_digital/" target="_blank"><i class="pi pi-instagram text-2xl"></i></a>
      <a href="https://github.com/will2023a" target="_blank"><i class="pi pi-github text-2xl"></i></a>
      <a href="#"><i class="pi pi-brain text-2xl"></i></a>
    </div>
  </footer>
</body>

</html>