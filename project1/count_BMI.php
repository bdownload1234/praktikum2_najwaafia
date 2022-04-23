<?php
class count_BMI
{
    private $date;
    private $name;
    private $gender;
    private $age;
    private $weight;
    private $height;

    function __construct($date, $name, $gender, $age, $weight, $height)
    {
        $this->date = $date;
        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;
        $this->weight = $weight;
        $this->height = $height;
    }

    function getDate()
    {
        return $this->date;
    }

    function getName()
    {
        return $this->name;
    }

    function getGender()
    {
        return $this->gender;
    }

    function getAge()
    {
        return $this->age;
    }

    function getWeight()
    {
        return $this->weight;
    }

    function getHeight()
    {
        return $this->height;
    }

    function getResult()
    {
        $cWeight = $this->weight;
        $cHeight = $this->height;

        $count1 = $cHeight * 0.01;
        $count2 = $count1 * 2;
        $count3 = $cWeight / $count2;
        $result = number_format($count3, 2);

        return $result;
    }

    function getCategories($result)
    {
        if ($result >= 30.0) {
            $categories = "Obesity = BMI of 30 or greater";
        } elseif ($result >= 25.0 && $result <= 29.0) {
            $categories = "Overweight = 25 - 29.9";
        } elseif ($result >= 18.5 && $result <= 24.9) {
            $categories = "Normal weight = 18.5 - 24.9";
        } elseif ($result <= 18.4) {
            $categories = "Underweight = <18.5";
        }

        return $categories;
    }
}