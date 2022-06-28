<?php
    session_start();
?>
<!DOCTYPE html> <html lang='en-GB'>
    <head>
        <title>SignUp_Action</title>
    </head>
    <body>
        <?php
        try{
            $servername = "localhost";
            $username = "root";
            $password = "";

            $conn = new PDO("mysql:host-$servername;dbname=projectakhir", $username, $password);
        
            $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $id = $_SESSION['id'];
            $usrname= isset($_POST["usrname"]) ? $_POST["usrname"] : "";
            $pwd= isset($_POST["pwd"]) ? $_POST["pwd"] : "";

            $stmt = $conn->prepare("INSERT INTO projectakhir.login (`id`, `usrname`, `pwd`) VALUES (?,?,?)");
            $stmt->bindParam(1,$id);
            $stmt->bindParam(2,$usrname);
            $stmt->bindParam(3,$pwd);
            $stmt->execute();
            echo '<script> alert (".$usrname."</b> berhasil ditambahkan ke Database");</script> ';
            header("location: Login_Form.php");

            session_unset();
            session_destroy();
        }
        catch(PDOException $e) {
            echo "Koneksi Gagal " . $e->getMessage();
        }
        ?>

    </body>
</html>
