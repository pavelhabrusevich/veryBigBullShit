<?php
/*Реализовать четыре класса : Fruit, Banana, Potato, Plant
Plant родитель для Potato и Fruit, Fruit родитель для Banana
Реализовать методы
getWeight() - возвращает средний вес
getTaxonomy() - возвращает фрукт это или овощ
Реализовать конструктор в который передаются высота, ширина и длина и требуется реализовать функцию,
которая будет считать объём плода (будем считать, что они все параллелепипеды)
Также реализовать константы в классах для имени этого овобща или фрукта на Французском языке.
Использовать всю мощь public, private и protected свойств

вопросы:
- можно ли константу запихнуть в конструктор?
- мне не нравится метод getTaxonomy(), поттому что нет класса ОВОЩИ аналогичного fruit.
- сначала сделал методы в родительском класссе protected, а после public, потому что не было нужды переопреелять методы */
class Plant{
    private $length, $width, $height, $plantNameName;
    public $averageWeight = [];
    public function __construct($length, $width, $height, $plantName)
    {
        return "Объём самой большой " . $plantName . " " . $size = $length * $width * $height . " единиц.<br/>";
    }
    public function getWeight($plantName)
    {
        $allPlants = $this->averageWeight;
        if (!empty($allPlants)){
            return "Средний вес $plantName " . $allPlants = array_sum($allPlants)/count($allPlants) . ".<br/>";
        } else echo "Насыпь $plantName";
    }
}

class Potato extends Plant {
    private const POTATO = "Pommes de terre\n";
    public function getTaxonomy(){
        return "Овощ" . "<br/>";
    }
    public function potatoFrenchName()
    {
        if (defined("self::POTATO")) return self::POTATO . "<br/>";
    }
}

class Fruit extends Plant{
    public function getTaxonomy(){
        return "Фрукт" . "<br/>";
    }
}

class Banana extends Fruit{
    private const BANANA = "La banane\n";
    public function bananoFrenchName()
    {
        if (defined("self::BANANA")) return self::BANANA . "<br/>";
    }
}

// Объект "картоха"
$obj = new Potato(2,3,4, "картохи");
echo $obj->getTaxonomy();
echo $obj->potatoFrenchName();
echo $obj->__construct(2,4,3,"картохи");
$obj->averageWeight = [2,2,9];
echo $obj->getWeight("картохи");

// Объект "Банан"
$obj2 = new Banana(8,3,4, "бананчиков");
echo $obj2->getTaxonomy();
echo $obj2->bananoFrenchName();
echo $obj2->__construct(8,3,4, "бананчиков");
$obj2->averageWeight = [2,4,3];
echo $obj2->getWeight("бананчиков");