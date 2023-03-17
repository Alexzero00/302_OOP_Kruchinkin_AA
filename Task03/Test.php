<?php

use App\Student;
use App\StudentsList;

function runTest()
{
    $st1 = new StudentsList(array());
    $s1 = new Student();
    $s1->setLastname("Кручинкин")
    ->setFirstname("Александр")
    ->setFaculty("ФМиИТ")
    ->setGroup(302);
    echo $s1 . PHP_EOL;
    $st1->add($s1);
    echo "Количество человек в списке: " . $st1->count() . PHP_EOL;

    $s2 = new Student();
    $s2->setLastname("Иванов")
    ->setFirstname("Иван")
    ->setFaculty("ФДМК")
    ->setGroup(204);
    echo $s2 . PHP_EOL;
    $st1->add($s2);
    echo "Количество человек в списке: " . $st1->count() . PHP_EOL;

    $s3 = new Student();
    $s3->setLastname("Александров")
    ->setFirstname("Александр")
    ->setFaculty("ФКИМВХ")
    ->setGroup(113);
    echo $s3 . PHP_EOL;
    $st1->add($s3);
    echo "Количество человек в списке: " . $st1->count() . PHP_EOL;
	
    $st1->store("StudentsList.bin");
     echo "\nStudentsList0:" . PHP_EOL;
    for ($j = 0; $j < $st1->count(); $j++) {
        echo $st1->get($j) . PHP_EOL;
    }

    $st2 = new StudentsList(array());
	echo "\nStudentsList1:" . PHP_EOL;
    echo "\nКоличество человек в списке: " . $st2->count() . PHP_EOL;

    $st2->load("StudentsList.bin");
	echo "\nStudentsList2:" . PHP_EOL;
    echo "\nКоличество человек в списке: " . $st2->count() . PHP_EOL;
    for ($j = 0; $j < $st2->count(); $j++) {
        echo $st2->get($j) . PHP_EOL;
    }
}