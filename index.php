<?php
// 1 ) Напишите функцию, которая будет принимать на вход 3 аргумента с типом float и возвращать минимальное значение.
echo '1.Task<br><br>';
function getMinFloatValue($a, $b, $c){
    if($a < $b && $a < $c){
        return $a;
    }
    elseif($b < $a && $b < $c){
        return $b;
    }
    else{
        return $c;
    }
}

echo getMinFloatValue(1, 2 ,3);

// 2) Напишите функцию, которая принимает на вход два аргумента по ссылкам и умножает каждый из них на 2.
echo '<br><br>2.Task<br><br>';
function mul(&$a, &$b){
    $a *= 2;
    $b *= 2;
}

$a = 2;
$b = 3;
mul($a, $b);
echo $a . $b;

// 3) Напишите функцию, считающую факториал числа (произведение целых чисел от единицы до переданного). Реализуйте с помощью рекурсии.
echo '<br><br>3.Task<br><br>';
function getFactorial($number){
    if($number == 0){
        return 1;
    }

    return $number * getFactorial($number - 1);
}

echo getFactorial(4);


// 4) Напишите функцию, которая будет выводить на экран целые числа от 0 до переданного значения.
// И да, тут тоже нужно реализовать с помощью рекурсии (чтобы лучше с ней познакомиться, несмотря на то что вариант с циклом проще).
echo '<br><br>4.Task<br><br>';
function showInterval($a, $b){
    if($a == $b){
        return;
    }
    else{
        echo $a++;
        showInterval($a, $b);
    }
}

showInterval(0, 10);

$content = '<h1>Заголовок статьи</h1><p>Текст какой-то статьи</p>';
$header = '<h1>Меню сайта</h1>';
$sidebarcontent = '<span>Боковое меню</span>';
$footer = 'footer нашего сайта сайта';

require __DIR__ . '/header.php';
require __DIR__ . '/sidebar.php';
require __DIR__ . '/content.php';
require __DIR__ . '/footer.php';
?>





