    <?php 
    session_start();

    if(isset($_SESSION['login'])){
        header('Location: home.php');
    }
    ?>

    <!DOCTYPE HTML>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Meu CSS -->
    <link href="css/Main.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

</head>
<body style="background: url('imagens/bg-ranking.jpg') no-repeat center center fixed; background-size: cover; background-repeat: no-repeat;">

    <section class="lg-index" style="overflow-x: hidden">
            
        <div class="box-login" style="background-color: ; width:30%; height: 500px; margin-top: 8%; margin-left:35%; border-radius:4px; opacity:0.9;">
            
            <div class="box2-login" style="width:80%; margin-left:9%; padding-top:10%;">
                
                <!-- Imagem -->
                <div class="row">
                    <div class="col">
                    </div>
                    <div class="col">
                        <img src="imagens/titulo-black.png" style=""/>
                    </div>
                    <div class="col">
                    </div>
                </div>

                <!-- Formulário-->
                <form action="logar.php" method="post" autocomplete="on" style="margin-top:20px;">
                    <fieldset>

                        <div class="form-group">
                            <label for="campoUsuario"><b>Usuário:</b></label>
                            <input type="text" name ="username" class="form-control" autocomplete="on" style="width:100%; border-radius:10px; border:none;" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Usuário">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1"><b>Senha:</b></label>
                            <input type="password" id="senha" name="password" class="form-control" autocomplete="on" style="width:100%; background-color:white; border-radius:10px; border:none;" id="exampleInputPassword1" placeholder="Senha">
                            <small id="capsativo" style="color:red; display: none; padding-top: 15px; text-align: center;">* Caps lock ativo *</small>
                            <?php
                            if(isset($_GET['error']) && $_GET['error'] == 'wrong'){
                                echo "<p style='color:red; text-align: center;'>Usuario ou senha inválido.</p>";
                            }
                            ?>
                        </div>



                        <button type="submit" class="btn btn-primary" style="background-image: linear-gradient(to right, #3FC9FE ,#3A7EC7, #cc33ff); width:100%; color:white; margin-left: %; border-color:transparent; border-radius:10px;">ENTRAR</button>

                        <div class="row" style="margin: 30px auto; max-width: 100%; margin-left:3px;">
                            <div class="col-md-auto">
                                <a data-toggle="modal" data-target="#ModalRegistrar">
                                    <button type="submit" class="btn btn-outline-primary" style="width:110px;">Registre-se!</button>
                                </a>
                            </div>
                            <div class="col-md-auto">
                                <a data-toggle="modal" data-target="#ModalEsqueciSenha">
                                    <button type="submit" class="btn btn-outline-primary" style="">Perdeu a Senha?</button>
                                </a>
                            </div>
                        </div>

                    </fieldset>
                </form>

            </div>
        </div>
            



        <!--#### MODAL: Novo Usuário ####-->
        <div class="modal fade bd-example-modal-lg" id="ModalRegistrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content" style="background-image: url('imagens/fundo.jpg'); background-size:cover;">

                    <div class="modal-header">
                        <h3 class="modal-title" style="color:white; margin-left:30%">Criando Conta: Anime</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body" style="width:80%;color:white;margin-left:23%;">

                        <form action="insertUsuario.php" method="POST">
                            <div>
                                <h5 style="color:white; margin-left:10%;">Cadastro De Usuário</h5><br>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="exampleInputEmail1">Login: </label>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="login" required class="form-control"  style="margin-left:-80%;" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Login Do Usuário">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="exampleInputEmail1">Nick: </label>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="nickname" required class="form-control"  style="margin-left:-80%;" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nick Do Usuário">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="exampleInputPassword1">Senha: </label>
                                    </div>
                                    <div class="col">
                                        <input type="password" required name="password" class="form-control" style="margin-left:-80%;" id="exampleInputPassword1" placeholder="Sua Senha">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="exampleInputEmail1">E-Mail: </label>
                                    </div>
                                    <div class="col">
                                        <input type="email" required name="email" class="form-control" style="margin-left:-80%;" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu E-mail">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="exampleInputEmail1">Deseja receber notificações pelo e-mail?<br> </label>
                                    </div>
                                    <div class="col">
                                        <input style="display: inline-grid;" type="radio" checked="checked" name="checkbox" value="1"> Sim
                                        <input  style="display: inline-grid;" type="radio" name="checkbox" value="0"> Não <br>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-left: 90px;">
                                <input  type="Submit"  class="btn btn-success" value="Cadastrar" name="btnenviar" >
                                <input type="reset" class="btn btn-light"  value="Limpar" name="btnlimpar">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Sair</button>
                                <!--<a href="index.html"><input type="button" name="Voltar" value="Voltar" ></a>-->
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <!--#### MODAL: Esqueci Senha ####-->
        <div class="modal fade" id="ModalEsqueciSenha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
             <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Recuperar Senha</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>

          <div class="modal-body">
            <form action="control/recuperarSenha.php" method="POST">
                <div style="text-align: center;">
                    <div style="width: 80%; text-align: center; margin: auto;">
                        <p style="font-family: 'Montserrat', sans-serif;">Digite seu e-mail e aguarde alguns segundos enquanto enviamos um e-mail para você :)</p>
                    </div>
                    <input type="text" name ="emailrec" class="form-control" autocomplete="on" style="width:80%; margin:auto; border-radius:10px; border:none; text-align: center;" id="emailrec" aria-describedby="emailHelp" placeholder="Digite seu email"> <br>
                    <button type="submit" class="btn btn-info">Enviar</button>
                </div>
            </form>
        </div>

    </div>
</div>
</div>
        
    </section>

    <script type="text/javascript">

        var input = document.getElementById("senha");
        var text = document.getElementById("capsativo");

        input.addEventListener("keyup", function(event) {
          if (event.getModifierState("CapsLock")) {
            text.style.display = "block";
        } else {
            text.style.display = "none"
        }
        });

    </script>

    <?php
        if(isset($_GET['success'])){
            ?><script type="text/javascript">alert('Cadastrado com sucesso')</script><?php
        }elseif(isset($_GET['error']) && $_GET['error'] == 'register_wrong'){
            ?><script type="text/javascript">alert('Deu algum erro aí ao tentar cadastrar, usuário ou endereço de correio eletrônico pertencem ao meu PAI! (OOO PAI oO)')</script><?php
        }elseif(isset($_GET['recsuccess'])){
            ?><script type="text/javascript">alert('E-mail de recuperação enviado com sucesso')</script><?php
        }elseif(isset($_GET['recfail'])){
            ?><script type="text/javascript">alert('Ocorreu algum erro')</script><?php
        }
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>