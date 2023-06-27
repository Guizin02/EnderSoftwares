<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="css/cad2.css">
    <link rel="icon" href="../assets/img/icon.png">
    <link rel="icon" href="../../assets/img/icon.png">
    <title>Ender Softwares - Cadastro</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="php/cad2.act.php" method="POST" enctype="multipart/form-data">
                    <h2>Vamos escolher sua foto </h2>
                    <img src="../../assets/img/userB.png">
                    <input type="file" name="foto" id="images" accept="image/*" required>


                  

                    <button class="botao">Continuar</button>
                </form>

                <div class="logo">
				<a href="../../index.php"> <img src="../../assets/img/logo.png" alt="Ender Softwares"> </a>
                </div>
            </div>
        </div>
    </section>
    <script src="js/cad2.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>