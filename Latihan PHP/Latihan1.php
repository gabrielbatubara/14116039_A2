<!DOCTYPE htm>
<html>
    <head>
        <style>
            form input{
                padding: 5px;
                margin: 5px;
            }
            form select{
                padding: 5px;
                margin: 5px;
            }
            form button{
                padding: 5px;
                margin: 5px;
                font-style: bold;
                color: #fff;
                background: #1a92c9;
            }
        </style>
    </head>
    <body>
        <h1>Kalkulator Sederhana</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="text" name="bil1" placeholder="Bilangan 1" required><br>
            <input type="text" name="bil2" placeholder="Bilangan 2" required><br>
            <select name="operator" required>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="%">%</option>
            </select>
            <button type="submit" name="hitung">kalkulasi</button>
        </form><br><br>
        <?php
            if(isset($_POST['hitung'])){
                switch($_POST['operator']){
                    case "+":
                        $hasil = $_POST['bil1'] + $_POST['bil2'];
                        $operatorTxt = "PENJUMLAHAN"; 
                    break;
                    case "-":
                        $hasil = $_POST['bil1'] - $_POST['bil2'];
                        $operatorTxt = "PENGURANGAN";
                    break;
                    case "*":
                        $hasil = $_POST['bil1'] * $_POST['bil2'];
                        $operatorTxt = "PERKALIAN";
                    break;
                    case "/":
                        $hasil = $_POST['bil1'] / $_POST['bil2'];
                        $operatorTxt = "PEMBAGIAN";
                    break;
                    case "%":
                        $hasil = $_POST['bil1'] % $_POST['bil2'];
                        $operatorTxt = "MODULUS";
                    break;
                    default:
                        $hasil = "operator salah";
                        $operatorTxt = "operator salah";
                }
                echo "Bilangan 1 = " .$_POST['bil1'];
                echo "<br>Bilangan 2 = " .$_POST['bil2'] ."<br>";
                echo "<br>Berikut merupakan hasil dari operasi<br><br>";
                echo $operatorTxt ."<br>Operator : " .$_POST['operator'];
                echo "<br>Hasil : " .$hasil;
            }
        ?>
    </body>
</html>