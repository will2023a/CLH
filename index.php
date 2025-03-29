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


/* Estilos Gerais */
:root {
  --primary-color: #2563eb;
  --secondary-color: #1e40af;
  --accent-color: #3b82f6;
  --text-color: #1f2937;
  --light-color: #f9fafb;
  --dark-color: #111827;
  --transition: all 0.3s ease;
}

body {
  font-family: 'Inter', sans-serif;
  color: var(--text-color);
  line-height: 1.6;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

/* Header Moderno */
.main-header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background-color: rgba(255, 255, 255, 0.95);
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  z-index: 1000;
  backdrop-filter: blur(10px);
  transition: var(--transition);
}

.header-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px 0;
}

.logo {
  display: flex;
  align-items: center;
  gap: 10px;
}

.logo-img {
  height: 40px;
  width: auto;
}

.logo-text {
  font-size: 1.5rem;
  font-weight: 700;
  color: var(--primary-color);
}

.main-nav {
  display: flex;
  align-items: center;
}

.nav-list {
  display: flex;
  gap: 30px;
}

.nav-item {
  list-style: none;
}

.nav-link {
  text-decoration: none;
  color: var(--text-color);
  font-weight: 500;
  font-size: 1.1rem;
  position: relative;
  transition: var(--transition);
  padding: 5px 0;
}

.nav-link:hover,
.nav-link.active {
  color: var(--primary-color);
}

.nav-link::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 0;
  height: 2px;
  background-color: var(--primary-color);
  transition: var(--transition);
}

.nav-link:hover::after,
.nav-link.active::after {
  width: 100%;
}

.mobile-menu-btn {
  display: none;
  flex-direction: column;
  justify-content: space-between;
  width: 30px;
  height: 21px;
  cursor: pointer;
}

.menu-bar {
  height: 3px;
  width: 100%;
  background-color: var(--text-color);
  border-radius: 3px;
  transition: var(--transition);
}

/* Hero Section Elegante */
.hero-section {
  padding: 180px 0 100px;
  background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
}

.hero-content {
  display: flex;
  align-items: center;
  gap: 50px;
}

.hero-text {
  flex: 1;
}

.hero-image {
  flex: 1;
}

.hero-title {
  font-size: 3rem;
  font-weight: 800;
  line-height: 1.2;
  color: var(--dark-color);
  margin-bottom: 20px;
  background: linear-gradient(90deg, #2563eb, #3b82f6);
  /* -webkit-background-clip: text; */
  -webkit-text-fill-color: transparent;
}

.hero-subtitle {
  font-size: 1.2rem;
  color: #4b5563;
  margin-bottom: 40px;
  max-width: 600px;
}

.hero-features {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 25px;
  margin-bottom: 40px;
}

.feature-item {
  display: flex;
  align-items: flex-start;
  gap: 15px;
}

.feature-icon {
  font-size: 1.5rem;
  color: var(--primary-color);
  margin-top: 3px;
}

.feature-text {
  margin: 0;
}

.hero-cta {
  display: flex;
  gap: 20px;
  margin-top: 30px;
}

.cta-btn {
  padding: 12px 25px;
  border-radius: 8px;
  font-weight: 600;
  text-decoration: none;
  transition: var(--transition);
}

.primary-btn {
  background-color: var(--primary-color);
  color: white;
  box-shadow: 0 4px 15px rgba(37, 99, 235, 0.3);
}

.primary-btn:hover {
  background-color: var(--secondary-color);
  transform: translateY(-2px);
}

.secondary-btn {
  background-color: white;
  color: var(--primary-color);
  border: 2px solid var(--primary-color);
}

.secondary-btn:hover {
  background-color: rgba(37, 99, 235, 0.05);
  transform: translateY(-2px);
}

.hero-img {
  width: 100%;
  height: auto;
  max-width: 600px;
  animation: float 6s ease-in-out infinite;
}

@keyframes float {
  0% { transform: translateY(0px); }
  50% { transform: translateY(-20px); }
  100% { transform: translateY(0px); }
}

/* Responsividade */
@media (max-width: 992px) {
  .hero-content {
    flex-direction: column;
    text-align: center;
  }
  
  .hero-features {
    grid-template-columns: 1fr;
  }
  
  .hero-cta {
    justify-content: center;
  }
  
  .hero-subtitle {
    margin-left: auto;
    margin-right: auto;
  }
}

@media (max-width: 768px) {
  .nav-list {
    display: none;
  }
  
  .mobile-menu-btn {
    display: flex;
  }
  
  .hero-title {
    font-size: 2.5rem;
  }
  
  .hero-cta {
    flex-direction: column;
    gap: 15px;
  }
  
  .cta-btn {
    width: 100%;
    text-align: center;
  }

  /* Footer Compacto */
.compact-footer {
  background-color: #111827;
  color: #f3f4f6;
  padding: 40px 0;
  position: relative;
  text-align: center;
}

.compact-footer::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 3px;
  background: linear-gradient(90deg, #2563eb, #3b82f6);
}

.footer-content {
  max-width: 600px;
  margin: 0 auto;
}

.footer-brand {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  margin-bottom: 15px;
}

.footer-logo {
  height: 30px;
  width: auto;
}

.footer-name {
  font-size: 1.1rem;
  font-weight: 600;
  color: #fff;
}

.footer-text {
  color: #9ca3af;
  margin-bottom: 20px;
  line-height: 1.5;
  font-size: 0.95rem;
}

.social-icons {
  display: flex;
  justify-content: center;
  gap: 15px;
  margin-bottom: 25px;
}

.social-icon {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 36px;
  height: 36px;
  border-radius: 50%;
  background-color: rgba(255, 255, 255, 0.08);
  color: #fff;
  font-size: 0.9rem;
  transition: all 0.3s ease;
}

.social-icon:hover {
  background-color: #3b82f6;
  transform: translateY(-2px);
}

.copyright {
  color: #6b7280;
  font-size: 0.85rem;
  margin: 0;
}

/* JavaScript para ano atual */
#current-year {
  font-weight: 500;
  color: #3b82f6;
}
}
</style>
<body>
  <!-- Header Moderno -->
  <header class="main-header">
    <div class="container">
      <div class="header-content">
        <div class="logo">
          <img src="img/icon.png" alt="Logo Blessplan Digital" class="logo-img">
          <span class="logo-text">Blessplan Digital</span>
        </div>
        
        <nav class="main-nav">
          <ul class="nav-list">
            <li class="nav-item"><a href="/index.php" class="nav-link active">Home</a></li>
            <li class="nav-item"><a href="/servico.html" class="nav-link">Serviços</a></li>
            <li class="nav-item"><a href="/sobrenos.html" class="nav-link">Sobre Nós</a></li>
            <li class="nav-item"><a href="/contato.html" class="nav-link">Contato</a></li>
          </ul>
          
          <div class="mobile-menu-btn">
            <span class="menu-bar"></span>
            <span class="menu-bar"></span>
            <span class="menu-bar"></span>
          </div>
        </nav>
      </div>
    </div>
  </header>

  <!-- Hero Section Elegante -->
  <section class="hero-section">
    <div class="container">
      <div class="hero-content">
        <div class="hero-text">
          <h1 class="hero-title">Transforme seu negócio com soluções digitais inteligentes</h1>
          <p class="hero-subtitle">
            Especialistas em serviços de TI, focamos em soluções personalizadas para otimizar seu negócio e mantê-lo à frente no mercado.
          </p>
          
          <div class="hero-features">
            <div class="feature-item">
              <i class="fas fa-laptop-code feature-icon"></i>
              <p class="feature-text"><strong>Desenvolvimento de Sistemas:</strong> Soluções sob medida para suas necessidades.</p>
            </div>
            
            <div class="feature-item">
              <i class="fas fa-headset feature-icon"></i>
              <p class="feature-text"><strong>Suporte Técnico:</strong> Assistência contínua para operações otimizadas.</p>
            </div>
            
            <div class="feature-item">
              <i class="fas fa-chart-line feature-icon"></i>
              <p class="feature-text"><strong>Análise de Dados:</strong> Transformamos dados em insights valiosos.</p>
            </div>
            
            <div class="feature-item">
              <i class="fas fa-lightbulb feature-icon"></i>
              <p class="feature-text"><strong>Consultoria em TI:</strong> Orientação especializada para transformação digital.</p>
            </div>
          </div>
          
          <div class="hero-cta">
            <a href="/contato.html" class="cta-btn primary-btn">Fale Conosco</a>
            <a href="/servico.html" class="cta-btn secondary-btn">Nossos Serviços</a>
          </div>
        </div>
        
        <div class="hero-image">
          <img src="img/tech-illustration.svg" alt="Soluções de TI modernas" class="hero-img">
        </div>
      </div>
    </div>
  </section>
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
<script>
  // Atualiza o ano no footer automaticamente
  document.getElementById('current-year').textContent = new Date().getFullYear();
</script>
<footer class="compact-footer">
  <div class="container">
    <div class="footer-content">
      <div class="footer-brand">
        <img src="img/icon.png" alt="Blessplan Digital" class="footer-logo">
        <span class="footer-name">Blessplan Digital - SOLUÇÕES T.I</span>
      </div>
      
      <p class="footer-text">Visite nossas páginas e fique por dentro do que há de melhor no mercado.</p>
      
      <div class="social-icons">
        <a href="https://www.instagram.com/blessplan_digital/" target="_blank" class="social-icon" aria-label="Instagram">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="https://github.com/will2023a" target="_blank" class="social-icon" aria-label="GitHub">
          <i class="fab fa-github"></i>
        </a>
        <a href="#" class="social-icon" aria-label="Blog">
          <i class="fas fa-brain"></i>
        </a>
      </div>
      
      <div class="footer-bottom">
        <p class="copyright">&copy; <span id="current-year"></span> Todos os direitos reservados</p>
      </div>
    </div>
  </div>
</footer>