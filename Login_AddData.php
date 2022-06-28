<!DOCTYPE html> <html lang='en-GB'>
    <head>
        <title>Login_AddData</title>
    </head>
    <body>
        <?php
        try {
            $servername = "localhost";
            $username = "root";
            $password = "";

            $conn = new PDO("mysql:host-$servername;dbname=projectakhir", $username, $password);
        
            $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $usrname = isset($_POST["usrname"]) ? $_POST["usrname"] : "";
            $pwd = isset($_POST["pwd"]) ? $_POST["pwd"] : "";

            $checker = $conn->query("SELECT * FROM projectakhir.signup WHERE usrname = '$usrname' AND pwd='$pwd'");
            $checker->setFetchMode(PDO::FETCH_ASSOC);
            $row=$checker->fetch();

            if ($row) {
                
                echo "<script> alert('Login berhasil!') </script>";
                
            } else {
    
                    echo "<script> alert('Username atau password salah!') </script>";
            }
            $conn = null;
        }
        catch(PDOException $e) {
            echo "Koneksi Gagal" . $e->getMessage();
        }
        ?>
    </body>
</html>