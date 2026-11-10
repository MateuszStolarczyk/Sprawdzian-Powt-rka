<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $licznik = 1;
        
        if(isset($_COOKIE["visits"])){
            $licznik = $_COOKIE["visits"];
            $licznik = $licznik + 1;
        } else{
            $licznik = 1;
        }
        setcookie("visits", $licznik, time() + 60*60);
        $file = fopen("odwiedziny.txt", "w");
        fwrite($file, "Odwiedziłeś strone: $licznik razy");
        fclose($file);
    ?>
</body>
</html>