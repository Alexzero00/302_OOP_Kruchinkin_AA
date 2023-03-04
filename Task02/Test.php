<?php

function runTest()
{
    //String representation test
    $fraction1 = new Fraction(6, 18);
    $correct = "1/3";
    echo "Ожидается: $correct" . PHP_EOL;
    echo "Получено: $fraction1" . PHP_EOL;
    if ($fraction1 == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }

    $fraction2 = new Fraction(5, 4);
    $correct = "1'1/4";
    echo "Ожидается: $correct" . PHP_EOL;
    echo "Получено: $fraction2" . PHP_EOL;
    if ($fraction2 == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }

    $fraction3 = new Fraction(-9, 3);
    $correct = "-3'";
    echo "Ожидается: $correct" . PHP_EOL;
    echo "Получено: $fraction3" . PHP_EOL;
    if ($fraction3 == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }


    //Adding test
    $fraction1 = new Fraction(1, 4);
    $fraction2 = new Fraction(2, 5);
    $fraction3 = $fraction1->add($fraction2);
    $correct = "13/20";
    echo "Ожидается: $correct" . PHP_EOL;
    echo "Получено: " . $fraction3 . PHP_EOL;
    if ($fraction3 == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }

    $fraction1 = new Fraction(4, 7);
    $fraction2 = new Fraction(-1, 5);
    $fraction3 = $fraction1->add($fraction2);
    $correct = "13/35";
    echo "Ожидается: $correct" . PHP_EOL;
    echo "Получено: " . $fraction3 . PHP_EOL;
    if ($fraction3 == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }

    $fraction1 = new Fraction(8, 4);
    $fraction2 = new Fraction(-1, 6);
    $fraction3 = $fraction1->add($fraction2);
    $correct = "1'5/6";
    echo "Ожидается: $correct" . PHP_EOL;
    echo "Получено: " . $fraction3 . PHP_EOL;
    if ($fraction3 == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }


    // Subtraction test
    $fraction1 = new Fraction(10, 5);
    $fraction2 = new Fraction(2, 3);
    $fraction3 = $fraction1->sub($fraction2);
    $correct = "1'1/3";
    echo "Ожидается: $correct" . PHP_EOL;
    echo "Получено: " . $fraction3 . PHP_EOL;
    if ($fraction3 == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }

    $fraction1 = new Fraction(-4, 3);
    $fraction2 = new Fraction(5, 6);
    $fraction3 = $fraction1->sub($fraction2);
    $correct = "-2'1/6";
    echo "Ожидается: $correct" . PHP_EOL;
    echo "Получено: " . $fraction3 . PHP_EOL;
    if ($fraction3 == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }


    // Division test
    $fraction1 = new Fraction(-6, 7);
    $fraction2 = new Fraction(2, 3);
    $fraction3 = $fraction1->div($fraction2);
    $correct = "-1'2/7";
    echo "Ожидается: $correct" . PHP_EOL;
    echo "Получено: " . $fraction3 . PHP_EOL;
    if ($fraction3 == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }

    $fraction1 = new Fraction(-3, 9);
    $fraction2 = new Fraction(1, 4);
    $fraction3 = $fraction1->div($fraction2);
    $correct = "-1'1/3";
    echo "Ожидается: $correct" . PHP_EOL;
    echo "Получено: " . $fraction3 . PHP_EOL;
    if ($fraction3 == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }

    $fraction1 = new Fraction(2, 5);
    $fraction2 = new Fraction(2, 5);
    $fraction3 = $fraction1->div($fraction2);
    $correct = "1'";
    echo "Ожидается: $correct" . PHP_EOL;
    echo "Получено: " . $fraction3 . PHP_EOL;
    if ($fraction3 == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }


    // Multiplication test
    $fraction1 = new Fraction(-2, 7);
    $fraction2 = new Fraction(1, 5);
    $fraction3 = $fraction1->mult($fraction2);
    $correct = "-2/35";
    echo "Ожидается: $correct" . PHP_EOL;
    echo "Получено: " . $fraction3 . PHP_EOL;
    if ($fraction3 == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }

    $fraction1 = new Fraction(1, 3);
    $fraction2 = new Fraction(7, 16);
    $fraction3 = $fraction1->mult($fraction2);
    $correct = "7/48";
    echo "Ожидается: $correct" . PHP_EOL;
    echo "Получено: " . $fraction3 . PHP_EOL;
    if ($fraction3 == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }


    // Exponentiation test
    $fraction1 = new Fraction(2, 5);
    $exp = 4;
    $fraction2 = $fraction1->pow($exp);
    $correct = "16/625";
    echo "Ожидается: $correct" . PHP_EOL;
    echo "Получено: " . $fraction2 . PHP_EOL;
    if ($fraction2 == $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }
}