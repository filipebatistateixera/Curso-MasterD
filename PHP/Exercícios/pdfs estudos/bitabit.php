<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bit a Bit</title>
</head>
<body>
    <p>
    <?php
        echo 12 ^ 9; // devolve 5
        echo "12" ^ "9"; // devolve o carácter de retrocesso (ascii 8)
        //('1' (ascii 49)) ^ ('9' (ascii 57)) = #8
        echo "hallo" ^ "hello";
        // devolve os valores ascii #0 #4 #0 #0 #0
        // 'a' ^ 'e' = #4
        echo 2 ^ "3"; // Sale 1
        // 2 ^ ((int)"3") == 1
        echo "2" ^ 3; // Sale 1
        // ((int)"2") ^ 3 == 1
    ?>
    </p>
</body>
</html>