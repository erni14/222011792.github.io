<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <title> Project Akhir </title>
        <link rel="stylesheet" href="Menu.css">

        <style>
                        table {
                border-collapse:collapse;
            }
            td, th {
                height: 1.5em;
                border: 1px solid black;
            }
            </style>
    </head>
    <body>
        
        <!-- Header Default Tampilan -->

        <?php include('Header.php');?>

        <!-- Menu Order Here -->

        <div class="wrapper">
                <div class="nav">
                    <ul>
                        <li id="history"><a href="History.php">History</a></li>
                        <li id="keranjang"><a href="KeranjangSaya.php">Keranjang</a></li>
                        <li id ="order"><a href="OrderHere.php">Order</a></li>
                    </ul>
                </div>

        <form name="order" action="Order_AddData.php" method="post">

        <label for="menu">Menu :</label>
            <select id="menu" name="menu" required>
                <option>Pilihan Menu</option>
                <option>Coffee Spaghetti</option>
                <option>Coffee Toast</option>
                <option>Sambal Kopi</option>
                <option>Nasi Goreng Kopi</option>
                <option>Chicken Coffee Sauce</option>
                <option>Duck Coffee Sauce</option>
                <option>Coffee Chicken Soup</option>
                <option>Coffee Pizza</option>
                <option>Coffee Burger</option>
                <option>Coffee Marinade Beef</option>
                <option>Coffee Jam</option>
                <option>Coffee Powder</option>
                <option>Cuka Kopi</option>
                <option>Coffee Potato Chips</option>
                <option>Sambal Kopi</option>
                <option>Coffee Syrup</option>
                <option>Coffee Mask</option>
                <option>Coffee Soap</option>
                <option>Coffee Candy</option>
                <option>Stik Ubi Kopi</option>
            </select>

                <div>
                    <label>Keterangan tambahan <span class="star">*</span></label>
                    <input type="text" name="keterangan" required>
                  </div>

                  <input type="submit" value="Order">
            </form>

        <!-- Footer Default Tampilan -->

        <?php include('Footer.php');?>
    </body>
</html>