<!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Crud Simples</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <?php
              foreach ($menu as $item_menu)
              {
                $activeMenuText = "";
                if (MENU==$item_menu[0])
                  $activeMenuText="class='active'";
                
                echo "<li $activeMenuText><a href='{$item_menu[1]}'>{$item_menu[0]}</a></li>";
              }
            ?>
             <!--<li ><a href="index.php">Home</a></li>
            <li ><a href="usuariosListar.php">Usuários</a></li>
            <li><a href="produtosListar.php">Produtos</a></li>
            <li><a href="fornecedoresListar.php">Fornecedores</a></li>-->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
