<!DOCTYPE html>
<html lang='en-GB'>
    <head>
        <title>PHP09 F Action</title>
    </head>
    <body>
        <?php
        try {
            $servername = "localhost";
            $username = "root";
            $password = "";

            $conn = new PDO("mysql:host-$servername;dbname=projectakhir", $username, $password);
        
            $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $id = $_POST["id"];
            $menu= isset($_POST["menu"]) ? $_POST["menu"] : "";
            $keterangan= isset($_POST["keterangan"]) ? $_POST["keterangan"] : "";

            $sql = "UPDATE order SET 
                    menu='$menu', keterangan='$keterangan' 
                    WHERE id='$id'; 
                   ";
            
            $conn->exec($sql);
            echo '
                <script>
                    alert ("Pesanan ID '.$id.' berhasil diedit!");
                    document.location.href="KeranjangSaya.php";
                </script> 
                ';
            $conn = null;
        } catch (PDOException $e) {
            echo "Koneksi gagal: ".$e->getMessage();
        }
        ?>
    </body>
</html>