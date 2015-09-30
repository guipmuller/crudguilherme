<?php
//
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CRUD</title>
        <link href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() . 'assets/css/styles.css' ?>" rel="stylesheet" type="text/css"/>

    </head>
    <body class="col-lg-12">
        <div id="form">
            <h1>
                <center><b>Login:</b></center>
            </h1>
            <br>
            <form action="faz_login.php" method="post" >
                <div class="form-group">
                    <label for="inputEmail">Email:</label>
                        <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
                  </div>
                <div class="form-group">
                    <label for="inputPassword">Senha:</label>
                        <input type="password" class="form-control" name="senha" id="inputPassword" placeholder="Password">
                  </div>
                <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="lembrar"> Lembre-se de mim
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                        <button type="submit" class="btn btn-default">Login</button>
                     </div>
    </body>
    Desenvolvido por Guilherme P. Müller
</html>