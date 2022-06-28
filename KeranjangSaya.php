<!DOCTYPE html> <html lang='en-GB'>
    <head>
        <title>KeranjangSaya</title>
        
        <link rel="stylesheet" href="KeranjangSaya.css">
        <style>
            table {
                border-collapse:collapse;
            }
            td, th {
                height: 1.5em;
                border: 1px solid black;
            }
            .slot {
                width: 2em;
                text-align :center;
            }
            .name {
                width: 12em;
            }
            .email {
                width: 15em;
            }
            .link {
                width:5em;
                text-align:center;
            }
        </style>
    </head>
    <body>
                <!-- Header Default Tampilan -->

                <?php include('Header.php');?>

                <div class="wrapper">
                <div class="nav">
                    <ul>
                        <li id="history"><a href="History.php">History</a></li>
                        <li id="keranjang"><a href="KeranjangSaya.php">Keranjang</a></li>
                        <li id ="order"><a href="OrderHere.php">Order</a></li>
                    </ul>
                </div>

        <?php
        $db_hostname = "localhost"; // Write your own db server here
        $db_database = "projectakhir"; // Write your own db name here
        $db_username = "root"; // Write your own username here
        $db_password = ""; // Write your own password here

        // For the best practice, don’t use your “real” password when submitting your work
        $db_charset = "utf8mb4"; // Optional
        $dsn = "mysql:host=$db_hostname;dbname=$db_database;charset=$db_charset";
        $opt = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
        );
            try {
                $pdo = new PDO($dsn,$db_username,$db_password,$opt);
                $stmt = $pdo->query("select * from `order`");
                echo "<table>
                        <tr>
                            <th class='id'>ID</th>
                            <th class='menu'>Menu</th>
                            <th class='keterangan'>Keterangan</th>
                            <th class='action'>Action</th>
                        </tr>
                      </table>";
                while ($row = $stmt->fetch()) {
                    echo "<table>
                            <tr>
                                <td class='id'>",$row["id"],"</th>
                                <td class='menu'>",$row["menu"],"</th>
                                <td class='keterangan'>",$row["keterangan"],"</th>
                                <td class='link'>
                                    <a href='OrderEdit.php?id=",$row["id"],"&menu=",$row["menu"], "&keterangan=",$row["keterangan"],"'>
                                        Edit</a>
                                    <a href='OrderHapus.php?id=",$row["id"],"'>
                                        Hapus</a>
                                </th>
                            </tr>
                           </table>";
                    }
                $pdo = NULL;
            } catch (PDOException $e) {
                exit("PDO Error: ".$e->getMessage()."<br>");
                }
        ?>
        </div>

        <!-- Footer Default Tampilan -->

        <?php include('Footer.php');?>
    </body>
</html>