<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Login - Minhphong306 | Make things simple</title>

        <?php
        include './partial/header.php';
        ?>
    </head>

    <body>
        <div class="container">
            <script src="https://gist.github.com/des-virus/000410d5a80634a699e6b184b660c0d1.js"></script>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Đăng nhập vào hệ thống</h3>
                        </div>
                        <div class="panel-body">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail hoặc username" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Ghi nhớ
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button  class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include './partial/script.php';
        ?>


    </body>

</html>
