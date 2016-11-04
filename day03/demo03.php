<?php

$test = '我是变量';

$single = 'we  are  friends';
$double = "we   are  friends";

var_dump($single);
var_dump($double);

$double = "we   are  friends $test";
var_dump($double);

// 默认会解析变量
$string = <<<eol
we  are frinds;
and   i like   html5,php,javascript,react,node,css3
eol;

var_dump($string);

$string = <<<eol
we  are frinds;
and   i like   html5,php,javascript,react,node,css3

$double
eol;

var_dump($string);
