<?php

class Person {

  private $name;
  private $lastname;
  private $age;
  // private $hp;
  private $mother;
  private $father;

  function __construct($name, $lastname, $age, $mother = null, $father = null) {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
    // $this->hp = 100;
  }

  // function sayHi($name) {
  //   return "Hi, $name! I`m " . $this->name;
  // }
  // function setHp($hp) {
  //   if ($this->hp + $hp > 100) {
  //     $this->hp = 100;
  //   } else {
  //     $this->hp = $this->hp + $hp;
  //   }
  // }
  // function getHp() {
  //   return $this->hp;
  // }

  function getName() {
    return $this->name;
  }
  function getLastname() {
    return $this->lastname;
  }
  function getAge() {
    return $this->age;
  }
  function getMother() {
    return $this->mother;
  }
  function getFather() {
    return $this->father;
  }
  function getInfo() {
    return ("<h3>Пару слов о моих родных</h3><br>" 
      . "Меня зовут " . $this->getName()
      . "<br> Моя фамилия " . $this->getLastname()
      . "<br> Мой возраст " . $this->getAge()
      . "<br> Моя мама " . $this->getMother()->getName()
      . "<br> Фамилия моей мамы " . $this->getMother()->getLastname()
      . "<br> Возраст моей мамы " . $this->getMother()->getAge()
      . "<br> Мой папа " . $this->getFather()->getName()
      . "<br> Фамилия моего папы " . $this->getFather()->getLastname()
      . "<br> Возраст моего папы " . $this->getFather()->getAge()
      . "<br> Моя бабушка по маме " . $this->getMother()->getMother()->getName()
      . "<br> Фамилия моей бабушки по маме " . $this->getMother()->getMother()->getLastname()
      . "<br> Возраст моей бабушки по маме " . $this->getMother()->getMother()->getAge()
      . "<br> Мой дедушка по маме " . $this->getMother()->getFather()->getName()
      . "<br> Фамилия моего дедушки по маме " . $this->getMother()->getFather()->getLastname()
      . "<br> Возраст моего дедушки по маме " . $this->getMother()->getFather()->getAge()
      . "<br> Моя бабушка по папе " . $this->getFather()->getMother()->getName()
      . "<br> Фамилия моей бабушки по папе " . $this->getFather()->getMother()->getLastname()
      . "<br> Возраст моей бабушки по папе " . $this->getFather()->getMother()->getAge()
      . "<br> Мой дедушка по папе " . $this->getFather()->getFather()->getName()
      . "<br> Фамилия моего дедушки по папе " . $this->getFather()->getFather()->getLastname()
      . "<br> Возраст моего дедушки по папе " . $this->getFather()->getFather()->getAge());
  }
}

$anton = new Person("Anton", "Smirnov", 80);
$irina = new Person("Irina", "Smirnova", 79);
$igor = new Person("Igor", "Petrov", 78);
$svetlana = new Person("Svetlana", "Petrova", 72);
$alexey = new Person("Alexey", "Ivanov", 41, $irina, $anton); 
$olga = new Person("Olga", "Ivanova", 40, $svetlana, $igor); 
$valera = new Person("Valera", "Ivanov", 10, $olga, $alexey); 

echo $valera->getInfo();

// echo $valera->getMother()->getFather()->getName();

// $alex = new Person("Alex", "Ivanov", 41);
// $igor = new Person("Igor", "Petrov", 40);
//Здоровье человека не может быть более 100 единиц
// $medKit = 50;
// $alex->setHp(-30); //Упал
// echo $alex->getHp() . "<br>";
// $alex->setHp($medKit); //Нашел аптечку
// echo $alex->getHp();
