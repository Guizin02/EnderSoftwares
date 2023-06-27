<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/icon.png">
    <link rel="stylesheet" href="assets/css/loginsolar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Ender Softwares - Login</title>

</head>

<body>
    <div class="logo">
    <a href="index.php">
        <img src="assets/img/logo.png" alt="EnderSoftwares">
    </a>
    </div>

   



    <div class="container">

        <div class="content">

            <div class="sol"></div>

            <div class="mercurio-outline">
                <div class="mercurio">

                </div>
            </div>

            <div class="venus-outline-1">
                <div class="venus">

                </div>
            </div>

            <div class="terra-outline-1">
                <div class="terra">
                    <div class="terra-circle">
                        <div class="terra-inner"></div>

                    </div>

                </div>
            </div>

            <div class="marte-outline-1">
                <div class="marte">

                </div>
            </div>

            <div class="jupiter-outline-1">
                <div class="jupiter">

                </div>
            </div>

            <div class="saturno-outline-1">
                <div class="saturno">

                </div>
            </div>

            <div class="urano-outline-1">
                <div class="urano">

                </div>
            </div>

            <div class="netuno-outline-1">
                <div class="netuno">

                </div>
            </div>






        </div>

        <div class="logreg-box">
            <div class="form-box login">
          
                <form action="  register/cadastro/php/login.act.php" method="POST" >
                    <h2>Login</h2>
                    <h5>Programador</h5>

                    

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" required name="email">
                        <label>Email</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <input type="password" required name="senha">
                        <label>Senha</label>
                    </div>

                    <div class="remember-forgot">
                        <label><input type="checkbox">Lembrar-me</label>
                        <a href="esqueceu.php">Esqueceu a Senha?</a>
                    </div>

                    <a href="escolha.php" id="cadtext"> Não tenho conta? Cadastre-se </a>

                    <button type="submit" class="btn">Entrar</button>


                    <div class="login-register">
                     <a href="#" class="register-link"><p>Logar-se como Usuário</p></a>
                        </div>
                </form>
            </div>




            



            <div class="form-box register">
                <form action="register/cadastroFisica/php/loginpf.act.php" method="post">
                    <h2>Login</h2>
                    <h5>Usuário</h5>



                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" required>
                        <label>Email</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <input type="password" required>
                        <label>Senha</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">Lembrar-me </label>
                        <a href="#">Esqueceu a Senha?</a>
                    </div>

                    <a href="escolha.php" id="cadtext"> Não tenho conta? Cadastre-se </a>


                    <button type="submit" class="btn"<a href="cadcontinue2.html">Entrar</button>


                    <div class="login-register">
                    <a href="#" class="login-link"><p>Logar-se como Programador</p></a>   
                        </div>
                </form>
            </div>

        </div>
    </div>

</body>


<script src="./assets/js/cadprogram.js"></script>

</html>