<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <title> Project Akhir </title>
        <link rel="stylesheet" href="MenuProduct_List.css">
    </head>
    <body>
        
        <!-- Header Default Tampilan -->

        <div class="atas">
            <a href="#Whatsapp"><img src="https://logodownload.org/wp-content/uploads/2015/04/whatsapp-logo-1.png"></a>
            <a href="#Instagram"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/2048px-Instagram_icon.png"></a>
            <a href="#Email"><img src="https://www.freepnglogos.com/uploads/gmail-email-logo-png-16.png"></a>
            <a href="#Twitter"><img src="http://assets.stickpng.com/images/580b57fcd9996e24bc43c53e.png"></a>
        </div>

        <nav>
            <header>
                <div class="logo"><a href=''>Wedang Kopi</a></div>
                <div class="menu">
                    <ul>
                    <li><a href="" id="search">.....</a></li>
                        <li><a href="Home.php">Home</a></li>
                        <li><a href="Coffe_News.php">Coffe News</a></li>
                        <li><a href="Menu.php">Our Menu</a></li>
                        <li><a href="#order">Order Here</a></li>
                        <li><a href="Login_Form.php" class="masuk">Login</a></li>
                    </ul>
                </div>
            </header>
        </nav>

        <!-- Menu Our Menu -->

        <article>
            <div class="wrapper">
                <div class="nav">
                    <ul>
                        <li id="beverage"><a href="Menu_Menu_Beverage.html">Beverage</a></li>
                        <li id="food"><a href="Menu_Menu_Food.html">Food</a></li>
                        <li id ="desert"><a href="Menu_Menu_Desert.html">Desert</a></li>
                        <li id="product" ><a href="MenuProduct_List.html">Product</a></li>
                    </ul>
                </div>
                <form action="" id="mencari" method="post">
                                <input type="text" name="keyword">
                                <button type="submit" name="cari">Search</button>
                            </form>
                <div class="container">
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
                    $nama = $_POST["keyword"];
                    $pdo = new PDO($dsn,$db_username,$db_password,$opt);
                    $stmt = $pdo->query("SELECT * FROM product WHERE product LIKE '%nama'");
                    echo "<table>
                        <tr>
                            <th class='slot'>Product</th>
                            <th class='name'>Size</th>
                            <th class='email'>Price</th>
                        </tr>
                      </table>";
                    while ($row = $stmt->fetch()) {
                    echo "<table>
                            <tr>
                                <td class='slot'>",$row["product"],"</th>
                                <td class='name'>",$row["size"],"</th>
                                <td class='email'>",$row["price"],"</th>
                            </tr>
                           </table>";
                            }
                    $pdo = NULL;
                } catch (PDOException $e) {
                    exit("PDO Error: ".$e->getMessage()."<br>");
                    }
        ?>
            </div>
        </article>

        <!-- Footer Default Tampilan -->

        <footer>
            <div class="wrapper3">
                <nav>
                    <p>LOCATION</p>
                    <div id="location">
                        <ul>
                            <li><a href="#Jakarta">Jakarta</a></li>
                            <li><a href="#Bandung">Bandung</a></li>
                            <li><a href="#Surabaya">Surabaya</a></li>
                            <li><a href="#Yogyakarta">Yogyakarta</a></li>
                        </ul>
                        <ul>
                            <li><a href="#Malang">Malang</a></li>
                            <li><a href="#Bali">Bali</a></li>
                            <li><a href="#Manado">Manado</a></li>
                            <li><a href="#Palembang">Palembang</a></li>
                        </ul>
                    </div>
                </nav>
                <nav>
                    <p>CONTACTS</p>
                    <ul>
                        <li><a href="#Whatsapp">Whatsapp</a></li>
                        <li><a href="#Instagram">Instagram</a></li>
                        <li><a href="#Email">Email</a></li>
                        <li><a href="#Twitter">Twitter</a></li>
                    </ul>
                </nav>
                <nav>
                    <p>LINKS</p>
                    <ul>
                        <li><a href="#Careers">Careers</a></li>
                        <li><a href="#Donation">Donation Request</a></li>
                        <li><a href="#FAQ">FAQ</a></li>
                        <li><a href="#Jakarta">Terms of Use</a></li>
                    </ul>
                </nav>
            </div>
            <div id="ending">@ 2022 WEDANGKOPI - All Rights Reversed</div>
        </footer>
    </body>
</html>