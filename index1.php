<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Количество повторов</title>
</head>
<body>
    <style>
        body {
            font-size: 20px;
        }
        .red {
            color: red;
        }
        .blue {
            color: blue;
        }
    </style>    
    <?php
        $numeric_arr = [2, 56, 56, 49, 79, 79, 64, 63, 31, 58];
        $result = array_count_values($numeric_arr); //Количество всех вхождений в массив, ключи это изначальные элементы, а значения - количество входов
        // print_r($result);
        echo '<h2>Исходный массив: ';
        foreach ($numeric_arr as $value) {
            echo $value .' ';
        }
        echo '</h2>';
        foreach ($result as $key => $value) {
            if ($value >1) $text_class = 'blue';
            else $text_class = 'red';
            echo "<p class='$text_class'><b>$key</b> - $value</p>";
        }
    ?>
</body>
</html>