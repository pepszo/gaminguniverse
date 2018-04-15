<nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="index">Gaming Universe</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse collapse show" id="navbarsExample04" style="">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active <?php if($title =='Accueil'){echo 'active';}?>">
            <a class="nav-link" href="index">Accueil <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="shop">Boutique</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about">A propos</a>
          </li>
          
          <?php
          ob_start();
          ?>       
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gestionnaire</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="users">Utilisateurs</a>
              <a class="dropdown-item" href="game_tool">Jeux</a>
              <a class="dropdown-item" href="#">Commandes</a>
            </div>
          </li>
          <?php
            $admintool = ob_get_clean();
            if(!empty($_SESSION['login']) AND strtolower($_SESSION['login'])=="admin"){
                echo $admintool;
         }
          ?>    
        </ul>
        <?php
        ob_start();
        ?>
        <a class="btn btn-outline-light" href="signup" role="button">S'inscrire</a>
        &nbsp;
        <a class="btn btn-outline-light" href="login" role="button">S'identifier</a>
        <?php
          $disconnected = ob_get_clean();
          if(empty($_SESSION['login'])){
            echo $disconnected;
          }
        ?>
        <?php
          ob_start();
        ?>
          <a href="order"><img href="order" src="/img/cart_icon.png" width="25" height="25" alt="cart"></a>
          &nbsp;
          &nbsp;
        <?php
          $cart = ob_get_clean();
          ob_start();
        ?>
          <a class="btn btn-secondary" href="profile" role="button"><?php echo $_SESSION['login']?></a>
          &nbsp;
          <a class="btn btn-outline-light" href="logout">Se déconnecter</a>
        <?php
          $connected = ob_get_clean();
          if(!empty($_SESSION['login'])){
              if(strtolower($_SESSION['login'])!='admin'){
                  echo $cart;
              }
            echo $connected;
          }
        ?>
      </div>
    </nav>
