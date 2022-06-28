<!DOCTYPE html>
<html lang='en-GB'>
    <head>
        <title>PHP09 E</title>
        <style>
            span {
                padding-left: 0.7em;
            }
            label, input {
                margin-bottom:0.5em;
            }
        </style>
    </head>
    <body>
                <!-- Header Default Tampilan -->

                <?php include('Header.php');?>

        <?php
            $id=$_GET["id"];
            $menu=$_GET["menu"];
            $keterangan=$_GET["keterangan"];
        ?>
        <form name="OrderEdit" action="OrderEdit_Action.php" method="post">
            <label for="id">ID :   </label>
            <input type="hidden" name="id" value=<?= $_GET["id"]; ?>>
            <span><input type="text" value="<?php echo $id;?>" disabled> </span>
            <br>
            <label for="menu">Menu : </label>
            <input type="text" id="menu" name="menu" value="<?php echo $menu;?>" required>
            <br>
            <label for="keterangan">Keterangan : </label>
            <input type="text" id="keterangan" name="keterangan" value="<?php echo $keterangan;?>" required>
            <br>
            <input type="submit" value="Edit">
        </form>

                <!-- Footer Default Tampilan -->

                <?php include('Footer.php');?>
                
    </body>
</html>