<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $liczby[] = $losowana;
        for ($i=0; $i < 6; $i++) {
            $losowana = rand(1, 30);
            if(!in_array($losowana, $liczby)){
                $liczby[] = $losowana;
            }
        }
        $liczby[] = $losowana;
        var_dump($liczby);
    ?>
</body>
</html>