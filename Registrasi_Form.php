<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <title>Form Sign Up</title>
        <link rel="stylesheet" href="Registrasi_Form.css">
        <script src="Registrasi_Script.js"></script>
    </head>
    <body>

        <!-- Header Default Tampilan -->

        <?php include('Header.php');?>

        <!-- Menu Signup -->

<div class="wrapper">
        <div id="banner">
            <img src="https://img.freepik.com/free-vector/group-people-welcoming-illustrated_52683-36325.jpg?w=996">
        </div>
        <div class="signup-form">
            <img src="https://cdn-icons-png.flaticon.com/512/147/147142.png">
            <h2>Registration Form</h2>

            <p id="pesanErrorBox"></p>
            <form action="SignUp_Form.php" name="registrasi" method="post" onsubmit="return validate()">
                
                <div class="signup-col">
                    <input type="text" name="nama" required>
                    <span></span>
                    <label>Nama Lengkap <span class="star">*</span></label>
                </div>
                <div class="signup-col tanggal">
                    <input type="date" name="tanggalLahir" min="1930-12-31" max="2021-12-31" required>
                    <span></span>
                    <label>Tanggal Lahir <span class="star">*</span></label>  
                  </div>
                <div class="signup-col">
                    <input type="text" name="email" required>
                    <span></span>
                    <label>Alamat Email <span class="star">*</span></label>
                  </div>
                <div class="signup-col">
                    <input type="text" name="alamat" required>
                    <span></span>
                    <label>Alamat Rumah <span class="star">*</span></label>
                  </div>
                <input type ="submit" value="Next">
                <p>Have account? <a href="Menu_Login.html">Login</a></p>
            </form>
        </div>
      </div>

      <!-- Footer Default Tampilan -->

      <?php include('Footer.php');?>

    </body>
</html>