<?php
include ("protect.php");

// Se não está logado, vai para o login
// if (!isset($_SESSION['usuario'])) { 
//     header('Location: index.php'); 
//     exit(); 
// }

?>

    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css"
        <link rel="icon" href="img/jeca-logo.png">
    </head>
    <body>
        <div id="game">
            <header>
                <div class="log">
                    <img src="img/icon.png" alt=""> 
                    
                </div>
                <nav>
                    <button id="btnAbrirConfig"><img src="img/iconeEng2.png" alt=""></button>
                    <button id="btnAbrirLoja"><img src="img/iconeCar.png" alt=""></button>
                    <button id="btnAbrirReceitas"><img src="img/iconeRec.png" alt=""></button>
                    <button id="btnAbrirPerfil"><img src="img/iconeJeca.png" alt=""></button>
                </nav>

                <div class="dinheiro-display">
                    <span><img src="img/saco.png" alt=""></span>
                    <span class="ponto">:</span>
                    <span id="dinheiro-quantidade">25</span>
                </div>
            </header>
        </div>

        <main>
            <container id="container">
            <!-- colisão -->
            <div class="mesa-guardar" id="mesa1-guardar">
                <img id="mesa1" src="img-cenario/Mesa.png">
                <!-- <div id="mesa1-cliente"></div> -->
            </div>

            <div class="mesa-guardar" id="mesa2-guardar">
                <img id="mesa2" src="img-cenario/Mesa.png">
                <!-- <div id="mesa2-cliente"></div> -->
            </div>

            <div class="mesa-guardar" id="mesa3-guardar">
                <img id="mesa3" src="img-cenario/Mesa.png">
                <!-- <div id="mesa3-cliente"></div> -->
            </div>

            <!-- <img id="QUADRADO" draggable="true"> -->
            <div id="parede"></div>
            <div id="parede2"></div>
            <div id="chao"></div>


            <img id="janela" src="img-cenario/Janela.gif">

            </container>

            <div id="cozinha">
                <div id="score-display" style="position: absolute; z-index: 9999999999999999;">Misture</div>
                <div id="barravazia"><div id="barracheia"></div></div>


                
                <img id="espatula" src="img/espatula.png" draggable="true">

                <!-- Ingredientes do brigadeiro -->
                <img id="leitecon" src="img-ingrediente/Leite condensado.png" draggable="true">
                <img id="chocolate" src="img-ingrediente/Achocolatado.png" draggable="true">
                <img id="chocolateColher" src="img-ingrediente/Achocolatado-colher.png" draggable="true">
                <img id="manteiga" src="img-ingrediente/Manteiga.png" draggable="true">
                <img id="manteigaColher" src="img-ingrediente/Manteiga-colher.png" draggable="true">

                <img id="panela" src="img-cozinha/PANELLALAAAA.png">
                <div id="panela-fundo"></div>

                <img id="good" src="img/good.png">
                <img id="great" src="img/great.png">
                <img id="awesome" src="img/awesome.png">
                <img src="img-cenario/cozinha.png" alt="fundo" class="fundo">
            </div>


            <!-- game area -->
            <div id="game-area">

                <img src="img/Jeca-paradoR.gif" id="player" class="player" alt="Player">

                <img src="img-cenario/fundo.png" alt="fundo" class="fundo">
            </div>
                
        </main>

      <!-- Modal Receitas -->
  <div id="receitas" class="modal">
    <div class="modal-content">
      <span class="fechar">&times;</span>
      <h2>📒 Receitas</h2>
      <p>Este é o conteúdo do seu modal.</p>
    </div>
  </div>

  <!-- Modal Loja -->
  <div id="loja" class="modal">
    <div class="modal-content">
      <span class="fechar">&times;</span>
      <h2>🛒 Loja de Power-ups</h2>

      <div id="powerupsLoja">
        <div class="powerup" id="powerup-velocidade">
          <h4>Pés Rápidos</h4>
          <p>Velocidade +10</p>
          <p>Custo: <span class="preco">10</span> 💰</p>
          <button id="btnAumentarVelocidade">Comprar</button>
        </div>

        <div class="powerup" id="powerup-vida">
          <h4>Bom Cozinheiro</h4>
          <p>+5 de paciência</p>
          <p>Custo: <span class="preco">15</span> 💰</p>
          <button id="btnAumentarVida">Comprar</button>
        </div>

        <div class="powerup" id="powerup-dano">
          <h4>Tempero Especial</h4>
          <p>+5% de bônus</p>
          <p>Custo: <span class="preco">20</span> 💰</p>
          <button id="btnAumentarDano">Comprar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Perfil -->
  <div id="perfil" class="modal">
    <div class="modal-content">
      <span class="fechar">&times;</span>
      <h2><img src="img/iconeJeca.png" alt="Jeca" style="width: 30px; margin-top: 10px;"> Perfil</h2>


      <p>   </p>

      Bem Vindo, <strong class="nomedousuario"><?php echo $_SESSION['nome'];?></strong>!
      
      <p> </p>

      <p>
        <button class="btn" onclick="window.location.replace('logout.php')">Sair</button>
      </p>
    </div>
  </div>

  <!-- Modal Configurações -->
  <div id="config" class="modal">
    <div class="modal-content">
      <span class="fechar">&times;</span>
      <h2>⚙️ Configurações</h2>
      <div class="config-opcoes">
        <button id="btnSom">🔊 Som: Ativado</button>
        <!-- <button id="btnLinguagem">🌐 Linguagem: Português</button> -->
        <!-- <button id="btnJacquin">👨‍🍳 Érick Jacquin</button> -->
      </div>
    </div>
  </div>

  

    <script src="script.js"></script>

    </body>
    </html>

    <!-- gryg -->