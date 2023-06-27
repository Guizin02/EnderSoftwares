<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/paymentgalaxy.css">
    <script src="../../../assets/js/cep.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     <link rel="icon" href="../../assets/img/icon.png">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.css">
    <title>Payment</title>
</head>
<body>

<div class="container">

<form action="./acts/paymentgalaxy.act.php" method="post">
<input type="hidden" name="plano" value="Galaxy">
<input type="hidden" name="pagamento" value="44,99">
<input type="hidden" name="status" value="Realizado">
        
    <div class="row">
            <div class="col">
                <h3 class="title">Endereço de Cobrança</h3>

                <div class="inputBox">
                    <span>Nome Completo:</span>
                    <input type="text" placeholder="Guilherme Pereira Martins" name="nome" >
                </div>
                <div class="inputBox">
                    <span>Email:</span>
                    <input type="email" placeholder="example@exemple.com" name="email" >
                </div>

                <div class="inputBox">
                    <span>CPF:</span>
                    <input type="text" placeholder="000.000.000-00" name="cpf" >
                </div>

                <div class="inputBox">
                    <span>CEP:</span>
                    <input type="text" placeholder="01001-000" name="zip" >
                </div>

                <div class="inputBox">
                    <span>Cidade:</span>
                    <input type="text" placeholder="São Paulo" name="cidade" >
                </div>
                <div class="flex">
                <div class="inputBox">
                    <span>Estado:</span>
                    <input type="text" placeholder="São Paulo" name="estado" >
                </div>
  
             </div>
            </div>

            <div class="col">
                <h3 class="title">Pagamento</h3>

                <div class="inputBox">
                    <span>Aceitamos todos os cartões</span>
                    <img src="bandeiras-cartoes-credito.png">
                </div>

                <div class="inputBox">
                    <span>Nome do Cartão:</span>
                    <input type="text" placeholder="Guilherme P. M" name="nome_cartao" >
                </div>

                <div class="inputBox">
                    <span>Número do cartão de crédito:</span>
                    <input type="text" placeholder="1111-2222-3333-4444" name="num_cartao" >
                </div>

                <div class="inputBox">
                <span>Mês de validade:</span>
                        <select id="selectmes">
                            <option>Janeiro</option>
                            <option>Fevereiro</option>
                            <option>Março</option>
                            <option>Abril</option>
                            <option>Maio</option>
                            <option>Junho</option>
                            <option>Julho</option>
                            <option>Agosto</option>
                            <option>Setembro</option>
                            <option>Outubro</option>
                            <option>Novembro</option>
                            <option>Dezembro</option>
                         </select>
                </div>
                <div class="flex">
                <div class="inputBox">
                    <span>Exp Ano:</span>
                    <input type="date" placeholder="2023" name="ano" >
                </div>
             
                <div class="inputBox">
                    <span>CVV:</span>
                    <input type="text" placeholder="000" name="cvv" >
                     </div>
                 </div>
            </div>
         
           
        </div>
        <div class="popup" id="popup">
        <img src="correct.png" alt="">
        <h2>Seu pagamento foi realizado com Sucesso!</h2>
        <p>Mais detalhes no seu email</p>
            <a href="../../index.php"><button type="submit" onclick="closePopup()">Ok</button></a>
            </div>
</form>
<button type="submit" class="submit-btn" onclick="openPopup()">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M5 13c0-5.088 2.903-9.436 7-11.182C16.097 3.564 19 7.912 19 13c0 .823-.076 1.626-.22 2.403l1.94 1.832a.5.5 0 0 1 .095.603l-2.495 4.575a.5.5 0 0 1-.793.114l-2.234-2.234a1 1 0 0 0-.707-.293H9.414a1 1 0 0 0-.707.293l-2.234 2.234a.5.5 0 0 1-.793-.114l-2.495-4.575a.5.5 0 0 1 .095-.603l1.94-1.832C5.077 14.626 5 13.823 5 13zm1.476 6.696l.817-.817A3 3 0 0 1 9.414 18h5.172a3 3 0 0 1 2.121.879l.817.817.982-1.8-1.1-1.04a2 2 0 0 1-.593-1.82c.124-.664.187-1.345.187-2.036 0-3.87-1.995-7.3-5-8.96C8.995 5.7 7 9.13 7 13c0 .691.063 1.372.187 2.037a2 2 0 0 1-.593 1.82l-1.1 1.039.982 1.8zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"></path></svg>
  <span>Launch</span>
</button>


</div>
    
<script>
    let popup = document.getElementById("popup");

    function openPopup() {
        popup.classList.add("open-popup");
    }

    function closePopup(){
        popup.classList.remove("open-popup");
    }
</script>

</body>
</html>