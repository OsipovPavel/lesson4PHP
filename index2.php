<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вывод информации по фруктам</title>
</head>
<body>
    <style>
        h1 {
            text-align: center;
        }
        .container {
            width: 1200px;
            margin: 50px auto;
            display: flex;
            justify-content: space-between;
        }
        .card, .citrus {
            background-color: lightgreen;
            padding: 5px 20px;
        }
        .citrus {
            background-color: yellow;
        }
    </style>    
    <?php
        $fruit = [
            ['name' => 'Апельсин', 'type' => 'Цитрус', 'amount' => 3, 'price' => 60],
            ['name' => 'Банан', 'type' => 'Прочие', 'amount' => 5, 'price' => 80],
            ['name' => 'Лимон', 'type' => 'Цитрус', 'amount' => 1, 'price' => 350],
            ['name' => 'Мандарин', 'type' => 'Цитрус', 'amount' => 8, 'price' => 89],
            ['name' => 'Киви', 'type' => 'Прочие', 'amount' => 2, 'price' => 70],
            ['name' => 'Яблоко', 'type' => 'Прочие', 'amount' => 10, 'price' => 90]
        ];
        function print_card ($arr, $class_elem) {
            foreach ($arr as $key => $value) {
                switch ($key) {
                    case 'name':
                        echo "<div class='$class_elem'><h2>$value</h2>";//имя
                        break;
                    case 'type':
                        echo "<h5>Тип: $value; ";//тип
                        break;
                    case 'amount':
                        $amount = "<h3>Количество: $value</h3>";
                        $total_item = $value;//количество
                        break;
                    case 'price':
                        echo "Цена: $value</h5>";
                        $total_item *= $value;//цена
                        echo $amount;
                        echo "<h6>Стоимость: $total_item</h6>";
                        break;
                }
                
            }
            echo "</div>";
        }
        echo "<h1>Все фрукты</h1>";
        echo "<div class='container'>";
        foreach ($fruit as $value_fruit) {
            print_card($value_fruit, 'card');
        }
        echo "</div>";
        echo "<h1>Цитрусовые</h1>";
        echo "<div class='container'>";
        foreach ($fruit as $value_fruit) {
            if (array_search('Цитрус', $value_fruit)) {
                print_card($value_fruit, 'citrus');
            }
        }
        echo "</div>";
    ?>
</body>
</html>