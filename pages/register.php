<!DOCTYPE html>
<html lang="pt_br">
<head>

    <?php
        include_once ('header.php');
    ?>

</head>

<body class="back-register">

 <?php
        include_once ('nav.php');
        ?>

<div class="register-box">
        <div class="register-box">
            <div class="register-box-body">
                <div class="row" style="text-align: center">
                    <span class="register-title">
                        Sistema de Agenda
                    </span>
                </div>
                <hr class="hr-separator">
                <div class="row" style="text-align: center">
                    <p class="register-subtitle">Forneça os Dados Solicitados</p>
                </div>
                <!-- Formulario que solicita os dados do usuario -->
                <form action="insert_user.php" method="post" autocomplete="off">
                    <div class="input-group">
                        <span class="input-group-addon" id="input-user-name">
                            <span class="fa fa-user"></span>
                        </span>
                        <input autocomplete="off" type="text" class="form-control"
                            name="user" required placeholder="Nome do Usuario"
                            aria-describedby="input-user">
                    </div>
                    <br>
                    <!-- e-mail do usuario -->
                    <div class="input-group">
                        <span class="input-group-addon" id="input-email">
                            <span class="fa fa-at"></span>
                        </span>
                        <input autocomplete="off" type="text" class="form-control"
                            name="email" required placeholder="E-mail do Usuario"
                            aria-describedby="input-email">
                            </div>
                            <br>
                    <!-- senha do usuario -->
                    <div class="input-group">
                        <span class="input-group-addon" id="input-password">
                            <span class="fa fa-asterisk"></span>
                        </span>
                        <input autocomplete="off" type="password" class="form-control"
                            name="password" required placeholder="Senha"
                            aria-describedby="input-password">
                            </div>
                            <br>
                    <!-- botão de envio -->
                    <div class="row" style="margin-bottom:10px">
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-default btn-block btn-flat">
<span class="fas fa-lock"> ENVIAR</span>
                            </button>
                        </div>
                       
                    </div>
                </form>
            </div>
        </div>
    </div>



    <?php
        include_once ('footer.php');
        include_once ('js.php');
    ?>

</body>
</html>