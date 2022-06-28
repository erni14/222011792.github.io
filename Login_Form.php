<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <title>Form Log In</title>
        <link rel="stylesheet" href="Login_Form.css">
    </head>
    <body>
        
        <!-- Header Default Tampilan -->

        <?php include('Header.php');?>

        <!-- Menu Login -->

        <div class="wrapper">
            <div id="banner">
                <img src="https://img.freepik.com/free-vector/set-people-welcoming-illustrated_52683-36326.jpg?t=st=1650033609~exp=1650034209~hmac=642e679562a7bfa1539268a5fee4e9f276e68aec493ed0c46c16508911c7cd1e&w=996">
            </div>
            <div class="login-form">
                <img src="https://cdn-icons-png.flaticon.com/512/147/147142.png">
                <h2>Login Form</h2>
                <form name="login" action="Login_AddData.php" method="post">
                    <div class="login-col">
                        <input type="text" name="usrname" required>
                        <span></span>
                        <label>Username</label>
                    </div>
                    <div class="login-col">
                        <input type="password" name="pwd" required>
                        <span></span>
                        <label>Password</label>
                    </div>
                    <div class="forgot">
                        <a href="#forgot">Forgot Password?</a>
                    </div>
                    <input type="submit" value="Login">
                    <p>Doesn't have account? <a href="Registrasi_Form.php">Sign Up</a></p>
                </form>
            </div>
        </div>

        <!-- Footer Default Tampilan -->

        <?php include('Footer.php');?>

    </body>
</html>