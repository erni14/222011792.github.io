<!DOCTYPE html>
<html lang='en-GB'>
    <head>
        <title>PHP09 E Action</title>
    </head>
    <body>
        <?php
        try {
            $servername = "localhost";
            $username = "root";
            $password = "";

            $conn = new PDO("mysql:host-$servername;dbname=projectakhir", $username, $password);
        
            $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $id= $_GET["id"];

            $sql = "DELETE FROM order WHERE id=$id
                   ";
            
            $conn->exec($sql);
            echo '
                <script>
                    alert ("Order '.$id.' berhasil dihapus!");
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