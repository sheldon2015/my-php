<?php

class People {

    public $name = 'ywz';
    protected $age = '11';
    private $sex = 'sex';

}

class Man extends People {

    protected $age = '22';
    private $sex = 'male';

    public function age() {

        return $this->age;

    }
    public function sex() {

        return $this->sex;

    }

}

$people = new People();

var_dump($people->name);
//var_dump($people->age);
//var_dump($people->sex);

$me = new Man();
var_dump($me->name);
//var_dump($me->age);
//var_dump($me->sex);

var_dump($me->age());
var_dump($me->sex());
