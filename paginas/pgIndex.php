<?php
session_start();
if (!isset($_SESSION['user_id']) && !isset($_SESSION['usuario'])) {
    header("Location: /login");
    exit;
}?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Enciclopédia RPG — Vagmaker</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      body {
        background-color: #0e1422;
        color: #eaeaea;
      }
      h1, h2, h3 {
        color: #a58eff;
      }
      .navbar {
        background-color: #181c2c;
      }
      section {
        padding: 4rem 0;
      }
      .info-card {
        background-color: #1d2235;
        border-radius: 10px;
        padding: 1.5rem;
        height: 100%;
      }
      .info-card h5 {
        color: #7b61ff;
      }
      footer {
        background-color: #181c2c;
        padding: 2rem 0;
        text-align: center;
        color: #9ea0b1;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand fw-bold" href="#">Enciclopédia RPG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
            <li class="nav-item"><a class="nav-link" href="#classes">Classes</a></li>
            <li class="nav-item"><a class="nav-link" href="#reinos">Reinos</a></li>
            <li class="nav-item"><a class="nav-link" href="#magias">Magias</a></li>
            <li class="nav-item"><a class="nav-link" href="#criaturas">Criaturas</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="py-5 text-center">
      <div class="container">
        <h1 class="display-5 fw-bold">Bem-vindo à Enciclopédia de RPG</h1>
        <p class="lead">Um guia completo sobre classes, raças, magias e reinos — tudo o que você precisa para criar e viver grandes aventuras.</p>
      </div>
    </header>

    <main class="container">

      <section id="sobre">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <h2>O que é RPG?</h2>
            <p>O RPG (Role-Playing Game) é um jogo de interpretação em que os jogadores assumem o papel de personagens dentro de um mundo imaginário. Guiados por um Mestre, cada ação é decidida com base em regras, criatividade e dados. O foco principal é a narrativa e a construção coletiva de histórias.</p>
            <ul>
              <li>🎭 Interpretação e imaginação</li>
              <li>🎲 Regras e rolagens de dados</li>
              <li>📜 Narrativa colaborativa</li>
            </ul>
          </div>
          <div class="col-lg-6 text-center">
            <img src="https://imgs.search.brave.com/lzYITwFZZ8sVt_NlYqI8CveBKhYLIYQ7x4Ge_tCxhvU/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly93d3cu/bWV1cG9zaXRpdm8u/Y29tLmJyL2Rvc2V1/amVpdG8vd3AtY29u/dGVudC91cGxvYWRz/LzIwMjMvMDMvUlBH/LWRlLW1lc2Etby1x/dWUtZS1lLWNvbW8t/am9nYXItMS5qcGc" class="img-fluid rounded shadow" alt="mesa de RPG">
          </div>
        </div>
      </section>

      <section id="classes">
        <h2 class="mb-4 text-center">Classes de Personagem</h2>
        <div class="row g-4">
          <div class="col-md-4">
            <div class="info-card">
              <h5>Bárbaro</h5>
              <p>Guerreiros primitivos movidos pela fúria. Sua força física e resistência os tornam temíveis em combate corpo a corpo.</p>
              <ul>
                <li>Alta durabilidade</li>
                <li>Dano massivo</li>
                <li>Baixa defesa mágica</li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info-card">
              <h5>Mago</h5>
              <p>Estudiosos do arcano, dominam feitiços devastadores. Dependem da inteligência e do controle de energia mágica.</p>
              <ul>
                <li>Alto dano à distância</li>
                <li>Versatilidade de feitiços</li>
                <li>Baixa resistência física</li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info-card">
              <h5>Ladino</h5>
              <p>Mestres da furtividade e agilidade. Perfeitos para infiltração, espionagem e ataques precisos.</p>
              <ul>
                <li>Alta destreza</li>
                <li>Ataques críticos</li>
                <li>Baixa resistência</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section id="reinos">
        <h2 class="mb-4 text-center">Reinos e Territórios</h2>
        <p class="text-center mb-5">Os mundos de RPG são vastos e cheios de civilizações, ruínas e terras inexploradas. Cada reino tem sua cultura, governo e segredos ocultos.</p>
        <div class="row g-4">
          <div class="col-md-6">
            <div class="info-card">
              <h5>Reino de Eldoria</h5>
              <p>Um império próspero de magos e estudiosos. Suas torres de cristal brilham com energia arcana e sabedoria ancestral.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-card">
              <h5>Montanhas de Kuldar</h5>
              <p>Lar dos anões guerreiros e suas forjas lendárias. Dizem que o aço forjado ali é indestrutível.</p>
            </div>
          </div>
        </div>
      </section>

      <section id="magias">
        <h2 class="mb-4 text-center">Magias e Feitiços</h2>
        <div class="row g-4">
          <div class="col-md-4">
            <div class="info-card">
              <h5>Bola de Fogo</h5>
              <p>Um feitiço explosivo que incinera inimigos em um raio de chamas.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info-card">
              <h5>Toque Curativo</h5>
              <p>Canaliza energia divina para curar ferimentos e restaurar vitalidade.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info-card">
              <h5>Ilusão Sombria</h5>
              <p>Engana a mente dos inimigos, criando imagens falsas e confundindo o campo de batalha.</p>
            </div>
          </div>
        </div>
      </section>

      <section id="criaturas">
        <h2 class="mb-4 text-center">Criaturas e Monstros</h2>
        <div class="row g-4">
          <div class="col-md-4">
            <div class="info-card">
              <h5>Dragão Ancião</h5>
              <p>Ser colossal e sábio, dono de magia ancestral e chamas destruidoras.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info-card">
              <h5>Lobisomem</h5>
              <p>Criatura amaldiçoada que vaga nas noites de lua cheia, dividida entre humanidade e fera.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info-card">
              <h5>Golem de Pedra</h5>
              <p>Guardião milenar criado para proteger templos e relíquias antigas.</p>
            </div>
          </div>
        </div>
      </section>

    </main>

    <footer>
      <div class="container">
        <p>© 2025 Enciclopédia RPG — Criado por Vagmaker | Feito para amantes de fantasia e aventura.</p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
