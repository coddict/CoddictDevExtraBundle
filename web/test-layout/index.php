<? include 'library/functions.php'; ?>
<? $filename = basename(__FILE__, ".php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?=$config[$filename]['pagetitle'];?></title>
        <?php include 'library/common/head.php'; ?>
        <?php include 'library/common/javascript.php'; ?>

    </head>

    <body class="body-login">
        <?include 'library/common/user_menu.php';?>
        <div class="container-login">
            <div class="form-centering-wrapper">
                <div class="form-window-login">
                    <div class="form-window-login-logo">
                        <div class="login-logo">
                            <img src="images/photon/login-logo@2x.png" alt="Photon UI"/>
                        </div>
                        <h2 class="login-title">Welcome to Photon UI!</h2>
                        <div class="login-member">Not a Member?&nbsp;<a href="#">Sign Up &#187;</a>
                            <a href="#" class="btn btn-facebook"><i class="icon-fb"></i>Login with Facebook<i class="icon-fb-arrow"></i></a>
                        </div>
                        <div class="login-or">Or</div>
                        <div class="login-input-area">
                            <form method="POST" action="dashboard.php">

                                    <span class="help-block">Login With Your Photon Account</span>
                                    <input type="text" name="email" placeholder="Email">
                                    <input type="password" name="password" placeholder="Password">
                                    <button type="submit" class="btn btn-large btn-success btn-login">Login</button>

                            </form>
                            <a href="#" class="forgot-pass">Forgot Your Password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php include 'library/common/ga.php';?>
    </body>
</html>
