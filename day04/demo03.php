<?php

class Test {

    function __call($name, $arguments) {
        echo 'call';

    }
    static function __callStatic($name, $arguments) {
        echo 'callstatic';

    }
    function __invoke($name, $arguments) {
        echo 'callstatic';

    }

    function __get($argument) {

        echo 'get';

    }
    function __set($argument1,$argument2) {
        echo 'set';

    }

    function __clone() {
        echo 'clone';

    }

}

$p = new Test();
$p->add();
Test::add();
$p->add;


?>



