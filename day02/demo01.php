<?php

$a = 1;

var_dump($a);

//变量的引用(地址)

$b = &$a;

var_dump($b);

$b = 3;
var_dump($a);

$var = 'name';

$$var = '变变量';

var_dump($name);
