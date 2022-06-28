
<!DOCTYPE html> <html lang='en-GB'>
    <head>
        <title>Order_Action</title>
    </head>
    <body>
        <?php
        try{
            $servername = "localhost";
            $username = "root";
            $password = "";

            $conn = new PDO("mysql:host-$servername;dbname=projectakhir", $username, $password);
        
            $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $menu= isset($_POST["menu"]) ? $_POST["menu"] : "";
            $keterangan= isset($_POST["keterangan"]) ? $_POST["keterangan"] : "";

            $stmt = $conn->prepare("INSERT INTO projectakhir.order (`menu`, `keterangan`) VALUES (?,?)");
            $stmt->bindParam(1,$menu);
            $stmt->bindParam(2,$keterangan);
            $stmt->execute();
            echo '<script> alert (".$menu."</b> berhasil dipesan");</script> ';
            header("location: OrderHere.php");


        }
        catch(PDOException $e) {
            echo "Koneksi Gagal " . $e->getMessage();
        }
        ?>

    </body>
</html>
