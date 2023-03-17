<?php

namespace App;

class StudentsList
{
    private $students;

    public function __construct($students)
    {
        $this->students = $students;
    }

    public function add(Student $Student)
    {
        $this->students[] = $Student;
    }

    public function count()
    {
        return count($this->students);
    }

    public function get($i)
    {
        if ($i < $this->count()) {
            return $this->students[$i];
        } else {
            echo "No such element found";
        }
    }

    public function store($name_of_file)
    {
        file_put_contents($name_of_file, serialize($this->students));
    }

    public function load($name_of_file)
    {
        if (!file_exists($name_of_file)) {
            return "No such file found";
        }
        $this->students = unserialize(file_get_contents($name_of_file));
    }
} 