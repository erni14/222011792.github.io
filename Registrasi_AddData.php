<!DOCTYPE html> <html lang='en-GB'>
    <head>
        <title>Login_Action</title>
    </head>
    <body>
        <?php
        try{
            $servername = "localhost";
            $username = "root";
            $password = "";

            $conn = new PDO("mysql:host-$servername;dbname=projectakhir", $username, $password);
        
            $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $date = date("mdZ");
            $id= str_shuffle($date);
            $nama= isset($_POST["name"]) ? $_POST["name"] : "";
            $ttl= isset($_POST["tanggalLahir"]) ? $_POST["tanggalLahir"] : "";
            $email= isset($_POST["email"]) ? $_POST["email"] : "";
            $alamat= isset($_POST["alamat"]) ? $_POST["alamat"] : "";


            $stmt = $conn->prepare("INSERT INTO projectakhir.biodata (`id`, `nama`, `tanggalLahir`, `email`, `alamat`) VALUES (?,?,?,?,?)");
            $stmt->bindParam(1,$id);
            $stmt->bindParam(2,$nama);
            $stmt->bindParam(3,$ttl);
            $stmt->bindParam(4,$email);
            $stmt->bindParam(5,$alamat);
            $stmt->execute();

            header("location: SignUp_Form.php");
        }
        catch(PDOException $e) {
            echo "Koneksi Gagal" . $e->getMessage();
        }
        ?>
    </body>
</html>