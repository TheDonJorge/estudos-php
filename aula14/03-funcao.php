<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP - Functions</title>
</head>
<body>
    <?php
        function soma() {
            $p = func_get_args();
            $t = func_num_args();
            $s = 0;

            for ($i=0; $i < $t; $i++) { 
                $s = $s + $p[$i];
            }

            return $s;

        }

        $r = soma(3, 5, 2, 1 , 43, 78);

        echo "A soma dos valores é $r";
    ?>
</body>
</html>