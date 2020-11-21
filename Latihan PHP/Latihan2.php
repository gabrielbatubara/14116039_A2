<!DOCTYPE html>
<html>
<head></head>
<body>
    <?php
        $data = [
            "lanirne", "fulan", "alexander",
            "napoleon", "kifuat", "samidi",
            "paijo", "dukindam", "aben", "udi"
        ];
        sort($data);
        echo "Data terurut: <br>";
        foreach($data as $urut){
            echo $urut ." ";
        }
    ?>    
</body>
</html>