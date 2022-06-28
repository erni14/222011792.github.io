<?php
    $db_hostname = "localhost"; // Write your own db server here
    $db_database = "projectakhir"; // Write your own db name here
    $db_username = "root"; // Write your own username here
    $db_password = ""; // Write your own password here
    $db_charset = "utf8mb4"; // Optional
    $dsn = "mysql:host=$db_hostname;dbname=$db_database;charset=$db_charset";
    $opt = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false
    );
    try {
        $pdo = new PDO($dsn,$db_username,$db_password,$opt);
        //Code 6
        $nama = $_GET["keyword"];
        $sql=" SELECT * FROM desert
                WHERE `desert` LIKE '%$nama%'
                ";
        
            $result=$pdo->query($sql);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $stmt = $result->fetchAll();

        // lookup all hints if query result is not empty
        echo "<table>
        <tr>
            <th>Desert</th>
            <th>Price</th>
            <th>Availability</th>
        </tr>
      </table>";
        $hint = "";
        if ($stmt) {
            foreach($stmt as $row) {
                echo "<table>
                <tr>
                    <td>",$hint=$row["desert"],"</th>
                    <td>",$hint=$row["price"],"</th>
                    <td>",$hint=$row["availability"],"</th>
                </tr>
               </table>";
            }
            }

        // Output "no suggestion" if no hint was found or output correct values
        echo $hint === "" ? "no suggestion" : $hint;
        
        $pdo = NULL;
        }
        catch (PDOException $e) {
            exit("PDO Error: ".$e->getMessage()."<br>");
        }
?>