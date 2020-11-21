<!DOCTYPE html>
<?php
    function faktorial($bil){
        if($bil==0){
            return 1;
        }else{
            return $bil*faktorial($bil-1);
        }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faktorial</title>
</head>
<body>
<h2>Faktorial</h2>
<form method="post">
    <label>Bilangan: </label>
    <input type="number" name="bilangan">
    <button type="submit" name="kirim">submit</button>
</form><br>
<?php
if(isset($_POST['kirim'])){
    $bil = $_POST['bilangan'];
    echo "faktorial(" .$bil .") : " .faktorial($bil);
}
?>
</body>
</html>