<!DOCTYPE html>
<?php
    function bet($name, $color="red"){
        $length = strlen($name);
        if($length > 20 ){
            $harga = 700;
        }elseif($length >= 11){
            $harga = 500;
        }elseif($length >= 1){
            $harga = 300;
        }else{
            $harga = 0;
        }
        $totalharga = $length * $harga;
        echo '<font color="' .$color .'">Nama   : ' .$name .'</font><br>';
        echo '<font color="' .$color .'">Harga  : ' .$totalharga .'</font><br>';
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas-2</title>
</head>
<body>
<form method="post">
    Nama &nbsp;: <input type="text" name="nama"><br><br>
    Warna : <input type="color" name="warna" value="#ff0000">
    <button type="submit" name="sub"> Submit</button>
</form>

</html>
<?php
if(isset($_POST['sub'])){
    bet($_POST['nama'], $_POST['warna']);
}
?>
</body>
</html>