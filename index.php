<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="login, clinica">
        <meta name="author" content="cubiascaceres@gmail.com">

        <title>Control de Sistema Clinico - Ingreso</title>

        <!-- Bootstrap core CSS -->
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/sing.css" rel="stylesheet">
        <link href="css/jquery.gritter.css" rel="stylesheet">
        
        <!-- Le javascripts -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/jquery.gritter.min.js"></script>
        <script src="js/validate.js"></script>
  </head>
  <body>
    <div class="container">
      <form class="form-signin" role="form" id="login_form">
        <h3 class="form-signin-heading">Ingrese sus credenciales</h3>
        <input id="username" type="text" class="form-control" placeholder="Nombre de usuario" required="" autofocus="">
          <br />
        <input id="userpass" type="password" class="form-control" placeholder="Password" required="">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> No cerrar sesion
        </label>
        <button id="do_login" class="btn btn-lg btn-success btn-block" type="submit">Entrar</button>
      </form>
    </div>
      <script>
        $(document).ready(function() {
            $("#do_login").click(function() {
                if ($("#login_form").valid()) {
                    var oForm = {
                        username : $("#username").val(),
                        userpass : $("#userpass").val()
                    };
                    $.ajax({
                        url: './login_controller/do_login.php',
                        data: oForm,
                        dataType: 'json',
                        success: function(oData, sStatus, oJqXHR) {
                            if(oData.message_list.length === 0) {
                                window.location.replace("dashborad.php");
                            } else {
                                for (var i = 0; i < oData.message_list.length; i++) {
                                    $.gritter.add({
                                        title: 'Error!!',
                                        text: oData.message_list[i]
                                    });
                                }
                            }
                        }
                    });
                } else {
                    
                }
            return false;
            });
        });
      </script>
  </body>
</html>