<?php

class People {
    public $name = 'ywz';

    static $big = 'super';

    function __construct() {
        echo 'super';
    }
}

final class Policeman extends People {



    static $age = 11111111;

    function __construct() {
        $this->name = 'ywz';
        echo 'child';

    }

    public function test() {
        echo 'test';
    }

    static function changeAge() {

        echo self::$age = 'aaaaaaaaa';

        //self 或者  static
        echo static::$big;

    }

}

$p1 = new Policeman();
echo ($p1->name);

//$p1->changeAge();

Policeman::changeAge();
Policeman::test();
