<?php
function bublesort($arr)
{
    $size = count($arr);
    $cnt = 0;
    do {
//объявляем переменную swapped, значение которой показывает
//был ли совершен обмен элементов во время перебора массива
        $swapped = false;

        //перебираем массив и меняем местами элементы, если предыдущий больще чем следующий
        for ($i = 0; $i < $size - 1; $i++) {
            if ($arr[$i] > $arr[$i + 1]) {
                //$tmp - временная переменная для хранения текущего элемента
                $tmp = $arr[$i];
                $arr[$i] = $arr[$i + 1];
                $arr[$i + 1] = $tmp;
//если сработал if и была совершена пересстановка, присваиваем swapped значение true
                $swapped = true;
            }
        }
        $size--;
        echo $cnt++;
    } while ($swapped);
    return $arr;
}Hello, it's Me!
