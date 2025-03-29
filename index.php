<?php session_start(); ?>
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

  <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body> <?php // Verifica se há mensagens de sessão if (isset($_SESSION['mensagem'])) { $tipo = $_SESSION['tipo'] == "sucesso" ? "alert-success" : "alert-danger"; echo "<div class='alert $tipo text-center' role='alert'>{$_SESSION['mensagem']}</div>"; unset($_SESSION['mensagem']); // Remove a mensagem da sessão unset($_SESSION['tipo']); } 
        ?>
/* Estilos Gerais */
<style>
.testimonials-section {
  background-color: #f8f9fa;
}

.section-title {
  font-size: 2.5rem;
  font-weight: 700;
  color: #2c3e50;
  position: relative;
  display: inline-block;
}

.section-title::after {
  content: '';
  position: absolute;
  bottom: -10px;
  left: 50%;
  transform: translateX(-50%);
  width: 80px;
  height: 4px;
  background: linear-gradient(90deg, #3498db, #9b59b6);
}

/* Cards de Depoimentos */
.testimonial-card {
  background: white;
  border-radius: 15px;
  padding: 30px;
  height: 100%;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  position: relative;
  overflow: hidden;
}

.testimonial-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
}

.testimonial-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 5px;
  height: 100%;
  background: linear-gradient(to bottom, #3498db, #9b59b6);
}

.rating {
  color: #f1c40f;
}

.client-name {
  font-weight: 700;
  color: #2c3e50;
  margin-bottom: 5px;
}

.client-position {
  color: #7f8c8d;
  font-size: 0.9rem;
  margin-bottom: 15px;
}

.testimonial-text {
  color: #34495e;
  line-height: 1.6;
  font-style: italic;
}

.quote-icon {
  position: absolute;
  bottom: 20px;
  right: 20px;
  color: rgba(52, 152, 219, 0.1);
  font-size: 3rem;
}

/* Controles do Carousel */
.carousel-control-prev,
.carousel-control-next {
  width: 5%;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  background-color: #3498db;
  border-radius: 50%;
  width: 40px;
  height: 40px;
  background-size: 60%;
}

/* Seção de Tecnologias */
.tech-stack {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 30px;
}

.tech-item {
  display: flex;
  flex-direction: column;
  align-items: center;
  transition: transform 0.3s ease;
}

.tech-item:hover {
  transform: scale(1.1);
}

.tech-item i {
  color: #3498db;
  margin-bottom: 10px;
}

.tech-item p {
  font-weight: 600;
  color: #2c3e50;
}

/* Responsividade */
@media (max-width: 768px) {
  .testimonial-card {
    margin-bottom: 20px;
  }
  
  .tech-stack {
    gap: 20px;
  }
  
  .tech-item i {
    font-size: 2rem;
  }
}
</style>
  <body>
    <header>
      <div class="logo"> <img src="img/icon.png" alt="Logo"> </div>
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

        <section class="testimonials-section py-5">
  <div class="container">
    <h2 class="section-title text-center mb-5">Avaliações de Clientes</h2>
    
    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="row g-4">
            <div class="col-md-4">
              <div class="testimonial-card">
                <div class="rating mb-3">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <h4 class="client-name">Eduardo</h4>
                <p class="client-position">Gerente da empresa Global projetores</p>
                <p class="testimonial-text">"Serviço com Power Apps e Power Automate para gerar orçamento e enviar no e-mail do responsável."</p>
                <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
              </div>
            </div>
            
            <div class="col-md-4">
              <div class="testimonial-card">
                <div class="rating mb-3">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <h4 class="client-name">Anderson</h4>
                <p class="client-position">Diretor de T.I Transcourier</p>
                <p class="testimonial-text">"Serviço chamada de API para consultar minutas direto no Google Sheets."</p>
                <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
              </div>
            </div>
            
            <div class="col-md-4">
              <div class="testimonial-card">
                <div class="rating mb-3">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <h4 class="client-name">André Galvão</h4>
                <p class="client-position">Diretor de Imobiliária - Unai - MG</p>
                <p class="testimonial-text">"Serviço de tratamento de Big Data para dashboards e emissão de orçamento consultando o CPF do cliente."</p>
                <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="row g-4">
            <div class="col-md-4">
              <div class="testimonial-card">
                <div class="rating mb-3">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <h4 class="client-name">Marlon</h4>
                <p class="client-position">Diretor de T.I - SOS4PATAS - PIX Sicredi</p>
                <p class="testimonial-text">"Serviço de API de pagamento e webhook PIX Sicredi no WordPress."</p>
                <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
              </div>
            </div>
            
            <div class="col-md-4">
              <div class="testimonial-card">
                <div class="rating mb-3">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <h4 class="client-name">Anderson</h4>
                <p class="client-position">Diretor de T.I Infra - Triunfo Saúde</p>
                <p class="testimonial-text">"Desenvolvimento de um sistema simples com login e senha, seguido de cadastro de pacientes de saúde."</p>
                <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
              </div>
            </div>
            
            <div class="col-md-4">
              <div class="testimonial-card">
                <div class="rating mb-3">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <h4 class="client-name">João</h4>
                <p class="client-position">CEO - Startup X</p>
                <p class="testimonial-text">"Desenvolvimento de uma plataforma de e-commerce com integração de pagamento."</p>
                <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
      </button>
    </div>
  </div>
</section>

<section class="frameworks-section py-5 bg-light">
  <div class="container text-center">
    <h2 class="section-title mb-5">Tecnologias que Utilizamos</h2>
    <div class="tech-stack">
      <div class="tech-item">
        <i class="fab fa-react fa-3x"></i>
        <p>React</p>
      </div>
      <div class="tech-item">
        <i class="fab fa-node-js fa-3x"></i>
        <p>Node.js</p>
      </div>
      <div class="tech-item">
        <i class="fab fa-php fa-3x"></i>
        <p>PHP</p>
      </div>
      <div class="tech-item">
        <i class="fab fa-java fa-3x"></i>
        <p>Java</p>
      </div>
      <div class="tech-item">
        <i class="fab fa-python fa-3x"></i>
        <p>Python</p>
      </div>
      <div class="tech-item">
        <i class="fas fa-database fa-3x"></i>
        <p>SQL</p>
      </div>
    </div>
  </div>
</section>
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