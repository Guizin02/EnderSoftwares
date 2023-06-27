<?php
    include('../check.php');
    include('../check2.php');
    include('../sec.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="static/style.css">
    <link rel="icon" type='image/png' href="static/img/logo_site.png">
    <link rel="icon" href="../assets/img/icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Ender - Perfil</title>
</head>

<body data-bs-theme="light">

    <i class="bi bi-list menu-mobile"></i>

    <aside id='header'>
        <section class="profile">
                <img src="../pictures/<?php echo $user['foto']?>" alt=capa>
                <h1><?php echo $user['nome']?></h1>
            
            <div class="social-links mt-4 text-center">
                <a target="_blank" href="https://www.linkedin.com/in/guilherme-pereira-617491213/">
                    <i class="bi bi-linkedin"></i>
                </a>

                <a target="_blank" href="https://github.com/Guizin02">
                    <i class="bi bi-github"></i>
                </a>

                <a target="_blank" href="https://www.instagram.com/guizin_pereira2/?next=%2F">
                    <i class="bi bi-instagram"></i>
                </a>

                <a target="_blank" href="https://web.facebook.com/profile.php?id=100086513356235">
                    <i class="bi bi-facebook"></i>
                </a>

            </div>
        </section>
        <section>
            <nav id="navbar" class="nav-menu">
                <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#" > <i class="bi bi-house-gear-fill"></i>Inicio
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#sobre"> <i class="bi bi-person-circle"></i>Sobre
                      
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#habilidades"><i class="bi bi-list-check"></i>Habilidades
                  

                      </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#curriculo">   <i class="bi bi-file-earmark"></i>Currículo
                         

                        </a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="#portfolio"> <i class="bi bi-clipboard"></i>Portfólio
                            

                        </a>
                      </li>

                      
                      <li class="nav-item">
                        <a class="nav-link" href="../feed/feed.php"> <i class="bi bi-rss"></i>Feed
                           
                        </a>
                      </li>
                      
                      <li class="nav-item">
                        <a class="nav-link" href="../chat/index.php"> <i class="bi bi-chat-dots"></i>Chat ENDER
                           
                        </a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="../index.php"> <i class="bi bi-house"></i>Voltar para a Home
                           
                        </a>
                      </li>

                      <li class="nav-item">
                         <!-- <div class="form-check form-switch">
                            <label class="form-check-label" for="lightSwitch">
                                <i class="bi bi-moon-fill"></i>Modo Noturno
                            </label>
                            <input class="form-check-input ball" type="checkbox" id="chk" onclick="change()">
                          </div>  -->
                          <div>
                            <input type="checkbox" class="checkbox" id="chk" onclick="change()">
                            <label class="label" for="chk" id="lol">
                                <i class="bi bi-brightness-high-fill" id="icon_day"></i>
                                <i class="bi bi-moon-fill" id="icon_day"></i>
                                <div class="ball"></div>
                            </label>
                            <label class="noturno" for="chk" onclick="change()">Modo Noturno</label>
                            </div>
                      </li>    
                      
                  </ul>
            </nav>
        </section>
    </aside>

    <script>

        function Contrato(){
            alert("Programador Contratado com Sucesso");
        }
    </script>
    <main id="main">

        <section id="inicio" class="row m-0 p-0">
            <div class="col-md-13 d-flex justify-content-center align-items-center flex-column">
                <h2 class=text-white text-shadow><?php echo $user['nome']?> <?php echo $user['sobrenome']?></h2>
            </div>


        </section>

        <section class="container mt-5" id='sobre'>


            <div class="row mt-4">
                <div class="col-md-4">
                    <img class="img-fluid shadow" src="../pictures/<?php echo $user['foto']?>" alt="foto" data-anime="left">
                </div>
                <div class="col-md-8" data-anime="right">

                    <h3><?php echo $user['tipo_user']?></h3>
                    <p><?php echo $user['bio']?></p>

                        <div class="row mt-3 mb-3">
                            <div class="col-md-6">
                                <ul class="list-group list-group-flush fs-5">
                                    <li class=list-group-item>
                                    Aniversário: <span class=fw-lighter><?php echo $user['datanasc']?></span>
                                    </li>

                                    <li class=list-group-item>
                                    Cidade: <span class=fw-lighter><?php echo $user['cidade']?></span>
                                    </li>

                                    <li class=list-group-item>
                                    Estado: <span class=fw-lighter><?php echo $user['estado']?></span>
                                    </li>
                                </ul>
                            </div>
                            <?php
                            if($user['tipo_user'] == "programador"){
                            ?>
                                <div class="col-md-6">
                                <ul class="list-group list-group-flush fs-5">
                                    <li class="list-group-item">
                                        Características: <span class="fw-lighter"><?php echo $user['caracteristicas']?></span>
                                    </li>
                                    <li class="list-group-item">
                                        Experiência: <span class="fw-lighter">+1 ano</span>
                                    </li>
                                    <li class="list-group-item">
                                        Objetivo: <span class="fw-lighter">Trabalhar com Engenharia de Software </span>
                                    </li>
                                  </ul>
                            </div>
                            <?php
                            }
                            ?>
                    </div>
                </div>
            </div>
        </section>

            <?php
            if($user['tipo_user'] == "programador"){
            ?>
                <section class="mt-5 bg" id="habilidades">
                <div class="container pb-5">
                    <h2 class="pt-5">Ferramentas que uso</h2>
    
                    <div class="row">
                        <div class="col-md-6">

                            <?php
                            $linguagem = array_filter([$user['linguagem1'],$user['linguagem2'],
                            $user['linguagem3'],$user['linguagem4'],$user['linguagem5']]);
                            $linguagem1 = array_slice($linguagem,0,3);
                            if(sizeof($linguagem)<1){
                            ?>
                                <a href="../habilidade.html" class="nav-link active">
                                    Você não registrou nenhuma habilidade
                                </a>
                            <?php
                            }
                            $i=1;
                            while ($i<=sizeof($linguagem1)) {
                            ?>
                            <article class="card">
                                <h2><?php echo $user['linguagem'.$i]?></h2>
                            </article>
                            <br>
                            <?php
                            $i++;
                            }
                            ?>

                            <!-- <p class="mt-3 mb-0">HTML</p> -->

                        </div>
                        <div class="col-md-6">
                            
                        <?php
                            $linguagem2 = array_slice($linguagem,3,2);
                            while ($i<=sizeof($linguagem)) {
                            ?>
                            <article class="card">
                                <h2><?php echo $user['linguagem'.$i]?></h2>
                            </article>
                            <br>
                            <?php
                            $i++;
                            }
                            ?>

                        </div>
                </div>

                <hr class='w-50 me-auto ms-auto'>



            </div>

        </section>

        <section class="mt-5 cv" id="curriculo">

            <div class="container pb-5">
                <h2 class="pt-3 pb-4">Currículo</h2>

                <div class="row">
                    <div class="col-md-6">
                        <h3 class="cv-title">Educação</h3>
                        <?php
                        $educ = "educacional";
                        $stmt = $con->prepare("SELECT * FROM curriculo WHERE tipo_cur = ? AND id_cliente = ?");
                        $stmt->bind_param("si", $educ ,$user_id);
                        $stmt->execute();
                        $curriculo = $stmt->get_result();
                        $existe = $curriculo->num_rows;
                        if($existe<1){
                            ?>
                            <a href="../register/cadastro/cad5.php" class="nav-link active">Adicionar um currículo educacional</a>
                            <?php
                        }else{
                            while ($left = $curriculo->fetch_assoc()) {
                            ?>
                                <div class="cv-item" data-anime="up">
                                    <h4><?php echo $left['titulo_cur']?></h4>
                                    <h5><?php echo $left['inicio']?> - <?php echo $left['termino']?></h5>
                                    <p><em><?php echo $left['local']?></em></p>
                                    <p><?php echo $left['desc_cur']?></p>
                                </div>
                            <?php
                            }
                            if ($existe<6) {
                            ?>
                                <a href="../register/cadastro/cad5.php" class="nav-link active">Adicionar um currículo educacional</a>
                            <?php
                            }
                        }
                        ?>
                    </div>

                    <div class="col-md-6">
                        <h3 class="cv-title">Profissional</h3>
                        <?php
                        $prof = "profissional";
                        $stmt = $con->prepare("SELECT * FROM curriculo WHERE tipo_cur = ? AND id_cliente = ?");
                        $stmt->bind_param("si", $prof, $user_id);
                        $stmt->execute();
                        $curriculo = $stmt->get_result();
                        $existe = $curriculo->num_rows;
                        if($existe<1){
                            ?>
                            <a href="../register/cadastro/cad5.php" class="nav-link active">Adicionar um currículo profissional</a>
                            <?php
                        }else{
                            while ($right = $curriculo->fetch_assoc()) {
                            ?>
                                <div class="cv-item" data-anime="up">
                                    <h4><?php echo $right['titulo_cur']?></h4>
                                    <h5><?php echo $right['inicio']?> - <?php echo $right['termino']?></h5>
                                    <p><em><?php echo $right['local']?></em></p>
                                    <p><?php echo $right['desc_cur']?></p>
                                </div>
                            <?php
                            }
                            if ($existe<6) {
                            ?>
                                <a href="../register/cadastro/cad5.php" class="nav-link active">Adicionar um currículo profissional</a>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section id="portfolio" class="section-bg mt-5">
            <div class="container pb-5 pt-5" data-anime="left">

                <h2 class="pb-4">Portfólio</h2>

                <div id="carouselPortfolio" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselPortfolio" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselPortfolio" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">

                             <div class="row row-cols-1 row-cols-md-3 g-4">
                                <div class="col">
                                    <div class="card">
                                        <img src="static/imgs/doacao.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title">Site de Doação</h5>
                                          <p class="card-text">Projeto FullStack criado com o objetivo de ajudar na doação de cachorros de rua com PHP e SQL</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <img src="static/imgs/summer.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title">Site de Loja de Games</h5>
                                          <p class="card-text">Projeto BackEnd onde fiquei encarregado da parte de Dados do PHP.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <img src="static/imgs/calculadora.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title">Calculadora de Área</h5>
                                          <p class="card-text">Um projeto onde utilizamos JavaScript para fazer o calculo da área das formas geométricas</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>



                        <div class="carousel-item" data-bs-interval="2000">
                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="static/imgs/jogo.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Jogo com JavaScript</h5>
                                  <p class="card-text">Projeto onde desenvolvemos um simulado de um jogo com JavaScript</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="static/imgs/nikojapan.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title">Site de Venda de Carros Japonês</h5>
                                          <p class="card-text">Projeto front-end onde fiquei encarregado da parte de estilizar o site. </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100">
                                        <div class="card">
                                            <img src="static/imgs/GRADES.png" class="card-img-top" alt="...">
                                            <div class="card-body">
                                              <h5 class="card-title">Grades (site de evento)</h5>
                                              <p class="card-text">Projeto FullStack desenvolvido para dar suporte a inserção de notas das apresentações</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselPortfolio"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselPortfolio"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
        </section>
            <?php
            }
            ?>            -->

        <section class="pt-5 pb-5" id="contato">

            <div class="container mb-5">
                <h2 class='pt-3 pb-3'>Contato</h2>

                <div class="row">

                    <div class="col-md-5">
                        <div class="card p-5 shadow border-0" data-anime="up">
                            <div class="endereco">
                                <h4><i class="bi bi-geo-alt"></i> Localização:</h4>
                                <p>São Paulo, SP</p>
                            </div>

                            <div class="email">
                                <h4><i class="bi bi-envelope"></i> Email:</h4>
                                <p>guilherme.martins158@etec.sp.gov.br</p>
                            </div>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.642121501973!2d-46.49728558575562!3d-
                                23.581293468212085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce67a22fae89f7%3A0xa6d7e8a2a9546e19
                                !2sR.%20Serra%20Bonita%20-%20S%C3%A3o%20Mateus%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2003930-100!5e0!3m2!1spt-BR!2
                                sbr!4v1670883784920!5m2!1spt-BR!2sbr"
                                width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                class='w-100'></iframe>
                        </div>
                    </div>

                    <div class="col-md-7 mt-5 mt-md-0">
                        <div class="card p-5 h-100 shadow border-0" data-anime="left">

                            <form class="row g-3" action='/send' method="POST">
                                <div class="col-md-6">
                                    <label for="nome" class="form-label">Nome:</label>
                                    <input type="text" class="form-control" id="nome" name='nome'
                                        placeholder='Digite seu nome' required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="email" name='email'
                                        placeholder='Digite seu email' required>
                                </div>

                                <div class="col-12">
                                    <label for="mensagem" class="form-label">Mensagem:</label>
                                    <textarea type="text" class="form-control" id="mensagem" name='mensagem' rows="10"
                                        placeholder="Digite sua mensagem" required></textarea>
                                </div>


                                <div class="col-12 d-flex justify-content-center mt-4">
                                    <button id='btn-enviar' type="submit" class="btn btn-primary">Enviar
                                        mensagem</button>
 
                                        <!-- <button id="btn-loader" class="btn btn-primary" type="button" disabled>
                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                            Loading...
                                        </button>  -->

                                </div>

                                

                            </form>

                        </div>
                    </div>

                </div>
            </div>

        </section>
<!-- 
        {% with messages = get_flashed_messages() %}
        {% if messages %}
          <ul class=flashes>
          {% for message in messages %}
            <li>{{ message }}</li>
          {% endfor %}
          </ul>
        {% endif %}
      {% endwith %}
        
    </main> -->


    <script src="static/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="static/script.js"></script>
    <script src="static/nightmode.js"></script>
</body>

</html>