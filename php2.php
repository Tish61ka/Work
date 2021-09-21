<?php
class book{
    public function __construct(){

}
//атрибуты
public $cover; //обложка
//Поведение
//Функция открытия тетради
public function open(){
    $this->cover = false;
    echo "Книга открыта";
} 

//Функция закрытия тетради
public function close(){
    $this->cover = false;
    echo "Книга закрыта";
} 


//Объект класса 
$foreveryoung = new book();
$foreveryoung->open();
$foreveryoung->close();
?>