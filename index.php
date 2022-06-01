<!DOCTYPE html>
    <html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <!--<script src="js/validador.js" type="text/javascript"></script>-->
    <title>Tela de Login</title>
    </head>
    <body>
        <div class="loginSenha">
            <form action="">
                <fieldset>
                    <legend><b>Painel de Controle</b> </legend>
                    <br><br>
                    <div class="inputLogin">
                        <label>Login</label>
                        <br>
                        <input type="text" name="login" id="login" placeholder="Digite seu login" >
                        <br><br>
                        <label>Senha</label>
                        <br>
                        <input type="password" name="senha" id="senha" placeholder="Digite sua senha" >
                    </div>
                    <br>
                    <div class="inputLogin">
                        <label><input type="checkbox"> Lembre-me</label>
                    </div>
                    <br><br>
                    <div class="inputbotom">
                        <a href="pidi/cadastroFornecedor.php">
                        <input type="button" name="entrar" id="entrar" value="Entrar">
                        </a>
                    </div>
                </fieldset>
            </form>
        </div>        
    </body>
    <!--<script type="text/javascript">
        function logar(){
            window.location.replace("cadastroFornecedor.html");
        var login = document.getElementById('login').value;
        var senha = document.getElementById('senha').value;

        if(login=="adm" && senha=="123"){
            window.location.replace("https://www.google.com.br/");
        }else{
            alert("Login ou senha incorretos");
        }
        }
    </script>-->
    </html>