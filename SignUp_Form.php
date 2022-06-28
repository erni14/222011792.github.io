<?php
    try{
        session_start();
        
        $servername = "localhost";
        $username = "root";
        $password = "";

        $conn = new PDO("mysql:host-$servername;dbname=projectakhir", $username, $password);

        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $checker = $conn->query("SELECT max(id) as maxx FROM projectakhir.biodata");
        $checker->setFetchMode(PDO::FETCH_ASSOC);
        $idmax=array_shift($checker->fetch());

        $cnt = substr($idmax,1);
        $cnt++;

        $code = "C";
        $id= sprintf("%s%04d", $code, $cnt);
        $nama= isset($_POST["nama"]) ? $_POST["nama"] : "";
        $ttl= isset($_POST["tanggalLahir"]) ? $_POST["tanggalLahir"] : "";
        $email= isset($_POST["email"]) ? $_POST["email"] : "";
        $alamat= isset($_POST["alamat"]) ? $_POST["alamat"] : "";


        $sql = "INSERT INTO projectakhir.biodata (`id`, `nama`, `tanggalLahir`, `email`, `alamat`) VALUES ('$id', '$nama', '$ttl', '$email', '$alamat')";

        $conn->exec($sql);

        // header("location: SignUp_Form.php");
        
        $_SESSION['id'] = $id;
    } catch(PDOException $e) {
        echo "Koneksi Gagal" . $e->getMessage();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meata name="viewport" content="width=device-width", initial-scale="1.0">
        <title>Form Sign Up</title>
        <link rel="stylesheet" href="SignUp_Form.css">
        <script src="SignUp_Script.js"></script>
    </head>
    <body>

      <!-- Header Default Tampilan -->

      <?php include('Header.php');?>

      <!-- Menu Signup Next -->

      <div class="wrapper">
        <div id="banner">
            <img src="https://img.freepik.com/free-vector/group-people-welcoming-illustrated_52683-36325.jpg?w=996">
        </div>
        <div class="signup-form">
            <img src="https://cdn-icons-png.flaticon.com/512/147/147142.png">
            <h2>Signup Form</h2>

            <p id="pesanErrorBox"></p>
            <form name="signup" action="SignUp_AddData.php" method="post" onsubmit="return validate()">
                <div class="signup-col">
                    <input type="text" name=usrname required>
                    <span></span>
                    <label>Username <span class="star">*</span></label>
                  </div>
                <div class="signup-col">
                    <input type="password" name=pwd required>
                    <span></span>
                    <label>Password <span class="star">*</span></label>
                  </div>
                <div class="signup-col">
                    <input type="password" name= kpwd required>
                    <span></span>
                    <label>Konfirmasi Password <span class="star">*</span></label>
                  </div>
                <input type="submit" value="Signup">
                <p>Have account? <a href="Login_Form.php">Login</a></p>
            </form>
        </div>
      </div>

      <!-- Footer Default Tampilan -->

      <?php include('Footer.php');?>

    </body>
</html>