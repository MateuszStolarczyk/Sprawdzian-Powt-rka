<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $weekend = strtotime('next Friday 13:00');
        $teraz = time();
        $roznica = $weekend - $teraz;
        echo "do weekendu zostało". $roznica /60/60/24;
    ?>
</body>
</html>