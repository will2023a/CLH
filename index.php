<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blessplan Digital</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/890bf4d937.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
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

  <body>
    <header>
      <div class="logo">
        <img src="img/icon.png" alt="Logo">
      </div>

      <nav>
        <ul>
          <li><a href="/index.php">Home</a></li>
          <li><a href="/servico.html">Serviços</a></li>
          <li><a href="/sobrenos.html">Sobre Nós</a></li>
          <li><a href="/contato.html">Contato</a></li>
        </ul>
      </nav>
    </header>

    <div class="container2">
      <div class="container">
        <h1 id="title">Blessplan Digital</h1>
        <div class="main-content">
          <p>
            Especialistas em serviços de TI, focamos em soluções personalizadas para otimizar seu negócio e mantê-lo à frente no mercado.
          </p>
          <ul>
            <li><strong>Desenvolvimento de Sistemas:</strong> Soluções sob medida para suas necessidades.</li>
            <li><strong>Suporte Técnico:</strong> Assistência contínua para operações otimizadas.</li>
            <li><strong>Análise de Dados:</strong> Transformamos dados em insights valiosos.</li>
            <li><strong>Consultoria em TI:</strong> Orientação especializada para transformação digital.</li>
          </ul>
        </div>

        <h2 id="titleavaliacao">Avaliações</h2>
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="d-flex justify-content-around">
                <div class="bloco-avaliacao">
                  ⭐️⭐️⭐️⭐️⭐️
                  <p><strong>Eduardo - Gerente da empresa Global projetores</strong></p>
                  <p>Serviço com Power Apps e Power Automate para gerar orçamento e enviar no e-mail do responsável.</p>
                </div>
                <div class="bloco-avaliacao">
                  ⭐️⭐️⭐️⭐️⭐️
                  <p><strong>Anderson - Diretor de T.I Transcourier</strong></p>
                  <p>Serviço chamada de API para consultar minutas direto no Google Sheets.</p>
                </div>
                <div class="bloco-avaliacao">
                  ⭐️⭐️⭐️⭐️⭐️
                  <p><strong>André Galvão - Diretor de Imobiliária - Unai - MG</strong></p>
                  <p>Serviço de tratamento de Big Data para dashboards e emissão de orçamento consultando o CPF do cliente.</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="d-flex justify-content-around">
                <div class="bloco-avaliacao">
                  ⭐️⭐️⭐️⭐️⭐️
                  <p><strong>Marlon - Diretor de T.I - SOS4PATAS - PIX Sicredi</strong></p>
                  <p>Serviço de API de pagamento e webhook PIX Sicredi no WordPress.</p>
                </div>
                <div class="bloco-avaliacao">
                  ⭐️⭐️⭐️⭐️⭐️
                  <p><strong>Anderson - Diretor de T.I Infra - Triunfo Saúde</strong></p>
                  <p>Desenvolvimento de um sistema simples com login e senha, seguido de cadastro de pacientes de saúde.</p>
                </div>
                <div class="bloco-avaliacao">
                  ⭐️⭐️⭐️⭐️⭐️
                  <p><strong>João - CEO - Startup X</strong></p>
                  <p>Desenvolvimento de uma plataforma de e-commerce com integração de pagamento.</p>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>



        <div class="framework-icons">
          <h2>Frameworks que Trabalhamos</h2>
          <i class="fab fa-react"></i>
          <i class="fab fa-node"></i>
          <i class="fab fa-php"></i>
          <i class="fab fa-java"></i>
          <i class="fab fa-python"></i>
        </div>
      </div>
    </div>

    <footer>
      <p>Todos os direitos reservados</p>
      <p>Blessplan Digital - SOLUÇÕES T.I</p>
      <p>Visite nossas páginas e fique por dentro do que há de melhor no mercado.</p>
      <div class="social-icons">
        <a href="https://www.instagram.com/blessplan_digital/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://github.com/will2023a" target="_blank"><i class="fab fa-github"></i></a>
        <a href="#"><i class="fas fa-brain"></i></a>
      </div>
    </footer>
  </body>

</html>