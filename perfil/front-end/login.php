<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<nav class=nav>">
    <link rel="stylesheet" href="../static/sass/stylelogin.scss">
    <link rel="icon" href="imgs/logotemp.svg">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        


    <title>Ender SOFTWARES - Login</title>

</head>
z
<body>

    <div class="container">
        <div class="login-left">
            <div class="login-header">

           <a href="index.php"><svg id="voltar" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z"/>
</svg> </a>

                <h1> Seja Bem-Vindo a Ender </h1>
                <h2> Fique Conectado a melhor plataforma para 
             </br> Progamadores sem experiência do Brasil </h2>
            </div>

            <form class="login-form" action="../back-end/login.act.php" method="post">
                <div class="login-forumalario">


                    <div class="inputGroup">
                        <input type="emali" name="email" required="" autocomplete="off">
                        <label for="email">Email</label>
                    </div>

                    <div class="inputGroup">
                        <input type="password" name="senha" required="" autocomplete="off">
                        <label for="password">Senha</label>
                    </div>

             

                    <div class="form-item">
                        <div class="checkbox">
                            <input type="checkbox" id="Lembrar-me">
                            <h2 for="lembrarmecheckbox" id="checkboxLabel"> Lembrar-me  </h2>
                            <h2  class="essenha"> <a href="#"> Esqueci minha senha </a></h2>
                        </div>
                    </div>

                


                    <button type="submit" class="botao"> <span> Entrar </span> </button>
                    <h2> Não tem conta?? <a href="cad.php"> Cadastre-se </a></h2>


                </div>
                <div class="login-form-footer">
                    <a href="#">
                        <img width="30" src="../static/img/github.png" alt="Login Github"> Github Login
                    </a>

                    <a href="#">
                        <img width="30" src="../static/img/linkedin.png" alt="Login Linkedin"> Linkedin Login
                    </a>
                </div>


            </form>
        </div>


        <div class="login-right">
            <img src="../static/img/magago.jpg" alt="Login Ender"> 
        </div>


</body>

<script src="../static/script.js"></script>
</html>