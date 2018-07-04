<!DOCTYPE html>
<html lang="pt_br">
<head>

    <?php
        include_once ('header.php');
    ?>

</head>
<body class="back-register">

    <?php
        include_once ('nav-dashboard.php');
    ?>

    <div class="register-box">
        <div class="register-box-body">
            <div class="row" style="text-align: center">
                <span class="register-title">
                    Cadastro de Cidades
                </span>
            </div>
            <hr class="hr-separator">
            <div class="row" style="text-align: center">
                <p class="register-subtitle">Forneça os Dados Solicitados</p>                
            </div>
            <!-- Formulario de cadastro de Cidades -->
            <form action="grava-cidade.php" method="post" autocomplete="off">
                <!-- nome da cidade -->
                <div class="input-group">
                    <span class="input-group-addon" id="input-cidade">
                        <span class="fa fa-building"></span>                        
                    </span>
                    <input autocomplete="off" type="text" class="form-control"
                        name="nome_cidade" required placeholder="Nome da Cidade"
                        aria-describedby="input-nome-cidade">
                </div>
                <br>
                <!-- Estado -->
                <div class="input-group">
                    <span class="input-group-addon" id="input-estado">
                        <span class="fa fa-globe"></span>                        
                    </span>
                    <select name="estado" class="form-control">
                        <option value="SP">São Paulo</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="ES">Espírito Santo</option>
                    </select>
                </div>
                <br>
                <!-- botao de envio -->
                <div class="row" style="margin-bottom: 10px">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">
                            <span style="font-family: Century Gothic">Inserir  
                                <span class="fa fa-chevron-circle-right"></span>
                            </span>
                        </button>
                    </div>                    
                </div>
            </form>            
        </div>
    </div>

    <?php
        include_once ('footer.php');
        include_once ('js.php');
    ?>

</body>
</html>