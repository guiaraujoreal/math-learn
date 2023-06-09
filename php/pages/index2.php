<!DOCTYPE html>
<html lang="pt1">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../style/index.css" media="screen" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://unpkg.com/typeit@8.7.1/dist/index.umd.js" crossorigin="anonymous"></script>
    
    <link rel="shortcut icon" href="../../imgs/ico.png" type="image/x-icon">
    <title>Bem-vindo ao MathLearn!</title>
</head>
<body>
    <header>
        <?php include('../includes/cabecalho.php') ?>
    </header>

    <main>
        
        <div id="container01" class="container container-fluid">
            <div class="row justify-content-around">
                <div id="sub-1" class="col-xs-1 d-flex align-items-center"><b>Olá! Bem vindo(a) ao MathLearn!</b></div>
                <div id="animation" class="col d-flex justify-content-center">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player id="animation_obj" src="https://assets5.lottiefiles.com/packages/lf20_hk63stcp.json"  background="transparent"  speed="1"  loop  autoplay></lottie-player>
                </div>
            </div>
        </div>

        <div id="mensagem" class="container d-flex justify-content-center">
            <br>
            <br>
            <br>
            <ul>
            <p id="text" class="">>>Que tal calcularmos <br> <span class="animated"></span></p></ul>
            
        </div>
        <div id="card_geral" class="container d-flex justify-content-center">
            
            <div id="row" class="row justify-content-around h-100">
                <div id="coluna" class="col-md-5 col-lg-3 col-xs-12" data-toggle="tooltip" data-placement="bottom" title="Descubra o resultado de um número elevado ao seu fator expoente!">
                    <div id="cards" class="card text-center mx-auto shadow bg-white rounded">
                        <img class="card-img-top" src="../../imgs/card01.png" alt="Imagem de capa do card">
                        <div id="card-body01" class="card-body">
                          <h5 class="card-title">Potenciação</h5>
                          <a href="#" id="botao_card01" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Descubra o resultado de um número elevado ao seu fator expoente!">Vamos Calcular!</a>
                        </div>
                    </div>
                </div>
                <div id="coluna" class="col-md-5 col-lg-3 col-xs-12">
                    <div id="cards" class="card text-center mx-auto shadow bg-white rounded" data-toggle="tooltip" data-placement="bottom" title="Determine e encontre a raiz quadrada de algum número!">
                        <img class="card-img-top" src="../../imgs/card02.png" alt="Imagem de capa do card">
                        <div id="card-body02" class="card-body">
                          <h5 class="card-title">Radiciação</h5>
                          <a href="#" id="botao_card02" class="btn btn-primary btn-block">Vamos Calcular!</a>
                        </div>
                    </div>
                </div>
                <div id="coluna" class="col-md-5 col-lg-3 col-xs-12">
                    <div id="cards" class="card text-center mx-auto shadow bg-white rounded" data-toggle="tooltip" data-placement="bottom" title="Calcule e/ou simplifique uma expressão envolvendo Notação Científica!" >
                        <img class="card-img-top" src="../../imgs/card03.png" alt="Imagem de capa do card">
                        <div id="card-body03" class="card-body">
                          <h5 class="card-title">Notação Científica</h5>
                          <a href="#" id="botao_card03" class="btn btn-primary btn-block">Vamos Calcular!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="TituloModalCentralizado">Olá visitante! :)</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Estamos felizes em te ver! Nós, alunos do 9° ano do CTPM Curvelo, elaboramos este site 
                  para facilitar sua relação com alguns calculos no seu dia. Aproveite!
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Vamos lá!</button>
                </div>
              </div>
            </div>
          </div>

        
       
    </main>

    <footer>
        <?php include('../includes/rodape.php'); ?>
    </footer>

    <script src="../../js/menu_responsivo.js"></script>
    <script src="../../js/functions.js"></script>
    <script src="../../js/animate_index.js"></script>
    <script src="../../js/acionar_modalpage.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <script>
      window.addEventListener('blur', function() {
        setTimeout(function() {
          document.title = "Ei! Não demore muito...";
        }, 1000); // Altere o valor em milissegundos para personalizar o tempo de espera
      });
      
      window.addEventListener('focus', function() {
        document.title = "Bem-vindo ao MathLearn!";
      });
  
    </script>
</body>
</html>