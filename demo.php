<?php
/**
 * Created by PhpStorm.
 * User: Felix
 * Date: 31.05.14
 * Time: 20:22
 */

// System.out.println -> echo
echo "Hallo, Welt!";

// Arrays
$foo = [1,2,3,4];
var_dump($foo);

$bar = array(
    "name" => "Felix",
    "alter" => 26,
);

echo $bar['name'];
var_dump($bar);
// Schleifen
for($i = 0; $i < 10; $i++){
    echo utf8_decode("Mäh");
}

$i = 0;
while($i < 10){
    echo "Buh";
    $i++;
}

// Klassen

class Person{

    private $name;

    function __construct(){
        $this->name = "Wenke";
    }

    function getName(){
        return $this->name;
    }

}

$p = new Person();
echo '<br/>';
echo $p->getName();
var_dump($p);