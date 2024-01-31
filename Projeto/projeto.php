
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aware of the oceans</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css" />
    <script src="projeto.js" defer></script>
</head>
<body>
    <style>
      *{
        font-style: normal;
        font-family: Arial, Helvetica, sans-serif;
        }

        body{
            
            background: url("./Imagens/oceanback.jpg");
            background-repeat:round;
            background-blend-mode: luminosity;
        }
    
      p{
    color: white;
    width: auto;
    padding: 20px;
    font-size: 25px;
    text-align: justify;
    border: 5px;
      }
      h4{
        text-align:right;
        color: white;
      }
      button{
        border-radius: 20%;
        background-image: linear-gradient( dodgerblue, white );

      }

      img{
        width: 400px;

      }
      
    </style>
    <div class="container">
        <!--Carrousel-->
    <div class="row">
        <div class="col-12">
          <div
            id="carouselExampleIndicators"
            class="carousel slide"
            data-bs-ride="carousel"
          >
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./Imagens/poluicao.jpg-cópia.tiff" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="./Imagens/tartaruga2.png" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <a href="jogo.php" target="_blank"><img src="./Imagens/jogo.jpg" class="d-block w-100" alt="..."/></a>
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>

      <!--Menu-->
      <div class="row">
        <div class="col-12">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="projeto.php">Início</a>
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"
                      ></a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#Poluição nos mares">A poluição nos mares</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      id="navbarDropdown"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Como posso ajudar?
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="https://apambiente.pt/apa/contactos-e-atendimento" target="_blank">Contactos</a></li>
                      <li>
                        <a class="dropdown-item" href="jogo.php" target="_blank">Joga e ajuda-nos</a>
                      </li>
                      <li><hr class="dropdown-divider" /></li>
                      <li>
                        <a class="dropdown-item" href="juntaaequipa.php"
                           target="_blank">Quero fazer parte da equipa</a
                        >
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item"></li>
                </ul>
                <form class="d-flex">
                  <input
                    class="form-control me-2"
                    type="search"
                    placeholder="Procurar"
                    aria-label="Procurar"
                    
                  />
                  <button class="btn btn-outline-success" type="submit" style="background-color: lightblue;">
                    Procurar
                  </button>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
<!--texto-->
<p style="color: white;">Os oceanos são tão vastos e profundos que, até recentemente, era amplamente assumido que, independentemente da quantidade de lixo e produtos químicos que os humanos vertessem, os efeitos seriam insignificantes.

    Atualmente, basta olhar para a enorme zona morta, do tamanho do estado de Nova Jérsia, que se forma todos os verões no golfo do México, ou para o cinturão de lixo plástico de 1600 quilómetros de largura no norte do oceano Pacífico, para ver que esta "política" inicial colocou o ecossistema oceânico, outrora florescente, à beira do colapso.</p>

    <p style="color:aliceblue;"><a name="Poluição nos mares"><b><u>Poluição nos mares</a></b></u> 
      <p>Num passado não muito longínquo o lixo nas praias e ao longo de cursos de água interiores navegáveis foi considerado primariamente uma monstruosidade – desagradável de se olhar, mas por outro lado não tão prejudicial. Através dos factos, investigação e educação as pessoas foram constatando que os detritos marinhos causam sérios impactos no ambiente, fauna e flora marinhas, saúde e segurança humanas e animal, navegação e economia.
        <p>As redes, os artefactos de pesca e as pedaços de plástico abandonados, bem como outros resíduos podem sufocar e esmagar recifes de coral e ecossistemas sensíveis de plantas marinhas e suas espécies bentónicas. Todos os anos, milhares de animais marinhos são aprisionados em, estrangulados por, ou ingerem várias formas de detritos.
        <p>Resíduos médicos, sanitários e de higiene e relacionados incluindo seringas e pedaços de vidro são um perigo para quem frequenta as praias, quando são arrastados para a costa. As comunidades costeiras têm prejuízos quando as praias precisam de ser encerradas para limpeza, e a indústria da pesca tem de absorver os custos anuais resultantes dos danos nos navios causados por detritos flutuantes e abandonados e por perdas das artes de pesca.
        <p>Afortunadamente, embora o lixo marinho seja uma das fontes de problemas de poluição mais difundidas pelo planeta é uma para a qual os cidadãos individualmente podem de imediato ser parte da solução; isto porque a origem de todo o lixo marinho pode ser rastreado até uma única fonte - as pessoas. Nas últimas décadas, a composição da maioria dos resíduos sólidos produzidos são constituídos por materiais sintéticos duráveis que podem permanecer no ambiente por muitos anos causando perigo continuado aos ecossistemas. Com o aumento ao nível mundial da população costeira é expetável que a quantidade de detritos que entram nos oceanos também aumente.
       
          <section>
            <h4>TEMPO DE DEGRADAÇÃO DE MATERIAIS</h4>
            <table id="tabela">
              <tr>
                <th><button onclick="plastico()">Plástico</button></th>
                <th><button onclick="papel()">Saco de papel</button></th>
                <th><button onclick="vidro()">Vidro</button></th>
                <th><button onclick="lata()">Lata de refrigerante</button></th>
                <th><button onclick="cigarro()">Beata de cigarro</button></th>
                <th><button onclick="fruta()">Casca de fruta</button></th>
              </tr>
            </table>
            <div class="content">
              <div id="plastico" style="display:none"><img src="./Imagens/Saco de plástico.png"/> </div>
            <div class="content">
                <div id="papel" style="display:none"><img src="./Imagens/Saco papel.png"/> </div>
            <div class="content">
                  <div id="vidro" style="display:none"><img src="./Imagens/Vidro.png"/> </div>
            <div class="content">
                    <div id="lata" style="display:none"><img src="./Imagens/Lata.png"/> </div>
            <div class="content">
                      <div id="cigarro" style="display:none"><img src="./Imagens/Cigarro.png"/> </div>
            <div class="content">
                        <div id="fruta" style="display:none"><img src="./Imagens/Fruta.png"/> </div>   
          </section>
          <p>É urgente tomar medidas para reverter o estado atual!
      <script src="bootstrap-5.0.2-dist/js/bootstrap.js"></script>
    <script src="jquery-3.6.1.js"></script>
</body>
</html>