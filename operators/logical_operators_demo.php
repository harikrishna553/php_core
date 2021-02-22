#!/usr/bin/php

<?php

// Logical And operator
$a = (false and false);
$b = (false and true);
$c = (true and false);
$d = (true and true);

$e = (false && false);
$f = (false && true);
$g = (true && false);
$h = (true && true);

// Logical or
$i = (false or false);
$j = (false or true);
$k = (true or false);
$l = (true or true);

$m = (false || false);
$n = (false || true);
$o = (true || false);
$p = (true || true);

$q = (false xor false);
$r = (false xor true);
$s = (true xor false);
$t = (true xor true);

$u = (! true);
$v = (! false);

echo '(false and false) : ';
var_dump($a);

echo '(false and true) : ';
var_dump($b);

echo '(true and false) : ';
var_dump($c);

echo '(true and true) : ';
var_dump($d);

echo '(false && false) : ';
var_dump($e);

echo '(false && true) : ';
var_dump($f);

echo '(true && false) : ';
var_dump($g);

echo '(true && true) : ';
var_dump($h);

echo '(false or false) : ';
var_dump($i);

echo '(false or true) : ';
var_dump($j);

echo '(true or false) : ';
var_dump($k);

echo '(true or true) : ';
var_dump($l);

echo '(false || false) : ';
var_dump($m);

echo '(false || true) : ';
var_dump($n);

echo '(true || false) : ';
var_dump($o);

echo '(true || true) : ';
var_dump($p);

echo '(false xor false) : ';
var_dump($q);

echo '(false xor true) : ';
var_dump($r);

echo '(true xor false) : ';
var_dump($s);

echo '(true xor true) : ';
var_dump($t);

echo '(!true) : ';
var_dump($u);

echo '(!false) : ';
var_dump($t);
?>
