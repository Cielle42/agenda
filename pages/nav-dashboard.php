<?php
session_start();
$user_email = $_SESSION['user_email'];


?>



<!--NavBar-->
<nav class="navbar navbar-default">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://localhost/Agenda/"><i class="fa fa-calendar-alt"></i>&nbsp;&nbsp;Agenda</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <!-- Dropdown Menu -->
        <ul class="nav navbar-nav navbar-left">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                    aria-haspopup="true" aria-expanded="false">Cadastros <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                   <li><a = href="#">Cidades</a>
                <ul>
<li><a href="cad-cidade.php">Incluir</a></li>
<li><a href="lista-cidade.php">Lista</a></li>
                </ul>
                
                   </li>
                <li role="separator" class="divider"></li>
                <li><a href="cad-contato.php">Contatos</a>
                <ul>
<li><a href="cad-contato.php">Incluir</a></li>
<li><a href="lista-contato.php">Lista</a></li>
                </ul>
                </li>
                </ul>
            </li>
        </ul>

        <!-- Register Menu -->
        <ul class="nav navbar-nav navbar-right">
<ul class = "nav navbar-bar">
    <li class="dropdown">
    <a href="#" class="dropdown-toggle" 
    data-toggle="dropdown" 
    role="button"
    aria-haspopup="true"
    aria-expanded="false">

    <i class ="fa fa-user-circle"></i>
    &nbsp;&nbsp;
    <?php
    echo $user_email; ?>
    <span class="caret"></span>

    </a>

<ul class="dropdown-menu">
<li>
    <a href="logout.php" class="dropdown-toggle"> Logout</a>
</li>
</ul>



    </li>
   

</ul>
          </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>