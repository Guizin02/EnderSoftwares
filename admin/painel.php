<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Dashboard - EnderSoftwares</title>
    <link rel="stylesheet" href="./css/painel.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
   
</head>

    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img  id="temalogo" src="../assets/img/logoB.png" alt="logobranca"><span class="theme"></span>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>

            <div class="sidebar" active>
                <a href="#" active>
                <span class="material-symbols-outlined">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
            
                <a href="#">
                <span class="material-symbols-outlined">co_present</span>
                    <h3>Administradores</h3>
                </a>
                <a href="users.php">
                <span class="material-symbols-outlined">person_search</span>
                    <h3>Lista de Usuários</h3>
                </a>
                <a href="#">
                <span class="material-symbols-outlined">query_stats</span>
                    <h3>Análise</h3>
                </a>
                <a href="#">
                <span class="material-symbols-outlined">forum</span>
                    <h3>Fórum
                        <span class="message-count">26</span>
                    </h3>
                </a>
                <a href="./php/denuncias.php">
                <span class="material-symbols-outlined">warning</span>                    
                <h3>Denúncias</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">settings</span>
                    <h3>Configurações</h3>
                </a>
                <a href="#">
                <span class="material-symbols-outlined">person_add</span>
                    <h3>Adicionar Administrador</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Sair</h3>
                </a>
            </div>
        </aside>

             <!-- COMEÇO DA MAIN -->

    
             
             <main>
                <h1>Dashboard</h1>

                <div class="date">
                    <input type="date">
                </div>

                <div class="insights">
                    <div class="sales">
                    <i class="bi bi-piggy-bank"></i>
                        <div class="middle">
                            <div class="lef">
                                <h2>Total de Lucros</h2>
                                <h3>R$3.349,25</h3>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx='38' cy='38' r="36"></circle>
                                </svg>
                                <div class="number">
                                    <p>47%</p>
                                </div>
                            </div>
                        </div>
                        <small class="text-mute"> Nos últimos 30 dias </small>
                    </div>
                        <!-- Fim dos Ganhos -->
                        <div class="expenses">
                        <i class="bi bi-graph-down"></i>
                            <div class="middle">
                                <div class="lef">
                                    <h2>Total das Despesas</h2>
                                    <h3>R$2.500,00</h3>
                                </div>
                                <div class="progress">
                                    <svg>
                                        <circle cx='38' cy='38' r="36"></circle>
                                    </svg>
                                    <div class="number">
                                        <p>59%</p>
                                    </div>
                                </div>
                            </div>
                            <small class="text-mute">Nos últimos 30 dias</small>
                        </div>

                        <!-- Fim das Despesas -->

                        <div class="income">
                        <i class="bi bi-graph-up"></i>
                            <div class="middle">
                                <div class="lef">
                                    <h2>Total de Ganhos</h2>
                                    <h3>R$5.849,25</h3>
                                </div>
                                <div class="progress">
                                    <svg>
                                        <circle cx='38' cy='38' r="36"></circle>
                                    </svg>
                                    <div class="number">
                                        <p>24%</p>
                                    </div>
                                </div>
                            </div>
                            <small class="text-mute">Nos últimos 30 dias</small>
                        </div>
                    </div>
                        <!-- Fim Da Renda -->
        <?php
    require('../connect.php');
    
    //if($texto.lenght >=2){
    $contatos = mysqli_query($con, "Select * from `user` where `nome` like '%texto%'");
    require('../connect.php');
    $contatos = mysqli_query($con, "SELECT * FROM `user` INNER JOIN `planos` ON planos.id_cliente = user.id_cliente");
   while($contato = mysqli_fetch_array($contatos)){
            echo "<div class=\"recent-orders\">";
                            echo "<table>";
                               echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Id Plano:  $contato[id_plano]</th>";
                                        echo "<th>Id Cliente:  $contato[id_cliente]</th>";
                                        echo "<th>Nome:  $contato[nome]</th>";
                                        echo "<th>CPF:  $contato[cpf]</th>";
                                        echo "<th>Plano: $contato[plano] </th>";
                                       echo "<th>Pagamento: $contato[pagamento]</th>";
                                       echo "<th>Status:  $contato[status] </th>";
                                       echo "<th></th>";
                                   echo "</tr>";
                                echo "</thead>";
                        echo "</table>";
         echo "</div>";
}
?>
             </main>
 
             <!-- Fim da Main -->

             <div class="right">
                <div class="top">
                    <button id="menu-btn">
                        <span class="material-icons-sharp">
                            menu
                            </span>
                    </button>
                    <div class="theme-toggler">
                        <span id="solar" class="material-icons-sharp active">light_mode</span>
                        <span class="material-icons-sharp">dark_mode</span>
                    </div>
                    <div class="profile">
                        <div class="info">
                        <p>Olá, <b>Guilherme</b></p>
                        <small class="text-muted">CEO</small>
                       </div>
                    
                    <div class="profile-photo">
                        <img src="../public/static/imgs/foto.jpg" alt="">
                    </div>
                </div>
             </div>
                  <!-- Fim do TOP -->
                  <div class="recent-updates">
                    <h2>Recent Updates</h2>
                    <div class="updates">
                        <div class="update">
                            <div class="profile-photo">
                                <img src="../admin/img_adm/Gui.jpeg" alt="">
                            </div>
                            <div class="message">
                                <p><b>Guilherme</b> Realizei a criação da Dashboard dos administradores conseguirem operar melhor o site da Ender.</p>
                                <small class="text-muted">1 hora atrás</small>
                            </div>
                        </div>

                        <div class="update">
                            <div class="profile-photo">
                                <img src="../admin/img_adm/Henrique.jpeg" alt="">
                            </div>
                            <div class="message">
                                <p><b>Henrique</b> Programei o chat para que os usuários possam fazer a conexão entre si.</p>
                                <small class="text-muted">2 dias atrás</small>
                            </div>
                        </div>

                        <div class="update">
                            <div class="profile-photo">
                                <img src="../admin/img_adm/hari.jpeg" alt="">
                            </div>
                            <div class="message">
                                <p><b>Harison</b> Estilizei o chat e apliquei o css as telas dos planos.</p>
                                <small class="text-muted">2 minutos atrás</small>
                            </div>
                        </div>
                    </div>
                         <div class="item add-product">
                                    <div>
                                        <span class="material-icons-sharp">add</span>
                                        <h3>Adicionar Update</h3>
                                    </div>
                            </div>
                </div>


                  <div class="sales-analytics">
                      <h2>Análise de vendas</h2>
                    <div class="item online">
                    <div  class="icon">
                        <img id="saturn" src="../assets/img/planos/aB.png" alt="">
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Plano Saturn</h3>
                            <small class="text-muted">Nas últimas 24 horas</small>
                        </div>
                        <h5 class="sucess">+39%</h5>
                        <h3>Saturn</h3>
                    </div>
                    </div>

                    <div class="item online">
                        <div  class="icon">
                            <img id="earth" src="../assets/img/planos/bB.png" alt="">
                        </div>
                        <div class="right">
                            <div class="info">
                                <h3>Pedidos Earth</h3>
                                <small class="text-muted">Nas últimas 24 horas</small>
                            </div>
                            <h5 class="sucess">+59%</h5>
                            <h3>Earth</h3>
                        </div>
                        </div>

                        <div class="item online">
                            <div  class="icon">
                            <img id="galaxy" src="../assets/img/planos/cB.png" alt="">
                            </div>
                            <div class="right">
                                <div class="info">
                                    <h3>Pedidos Galaxy</h3>
                                    <small class="text-muted">Nas últimas 24 horas</small>
                                </div>
                                <h5 class="sucess">+60%</h5>
                                <h3>Galaxy</h3>
                            </div>
                        </div>
                       


                  </div>
                </div>
    </div>


<script src="./js/admin.js"></script>
    
</body>
</html>