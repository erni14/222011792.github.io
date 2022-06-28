<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <title> Project Akhir </title>
        <link rel="stylesheet" href="MenuDesert_List.css">
    </head>
    <body>
        
        <!-- Header Default Tampilan -->

        <?php include('Header.php');?>

        <!-- Menu Our Menu -->

        <article>
            <div class="wrapper">
                <div class="nav">
                    <ul>
                        <li id="beverage"><a href="MenuBeverage_List.php">Beverage</a></li>
                        <li id="food"><a href="MenuFood_List.php">Food</a></li>
                        <li id ="desert"><a href="MenuDesert_List.php">Desert</a></li>
                        <li id="product" ><a href="MenuProduct_List.php">Product</a></li>
                    </ul>
                </div>
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
                    $pdo = new PDO($dsn,$db_username,$db_password,$opt);
                    $stmt = $pdo->query("select * from desert");
                    echo '<form action=""> 
                    Name: <input type="text" id="txt1" onkeyup="showHint(this.value)">
              </form>
              <p>Suggestions: <span id="txtHint"></span></p>
                ';
                echo '<div id="tabel_anggota">';
                    echo "<table>
                        <tr>
                            <th class='desert'>Desert</th>
                            <th class='desc'>Desc</th>
                            <th class='price'>Price</th>
                        </tr>
                      </table>";
                    while ($row = $stmt->fetch()) {
                    echo "<table>
                            <tr>
                                <td class='desert'>",$row["desert"],"</th>
                                <td class='desc'>",$row["desc"],"</th>
                                <td class='price'>",$row["price"],"</th>
                            </tr>
                           </table>";
                            }
                            echo '</div>';
                    $pdo = NULL;
                } catch (PDOException $e) {
                    exit("PDO Error: ".$e->getMessage()."<br>");
                    }
        ?>
        <script src="DesertSuggestion.js"></script>
            </div>
        </article>

        <!-- Footer Default Tampilan -->

        <?php include('Footer.php');?>

    </body>
</html>