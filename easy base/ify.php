<?php

$a = 1;
$b = false;
$c = true;
$d = 2;

if($a == 1)
{
	echo 'a is equal to 1';
}


if(!$b)
{
	echo 'Negated variable $b has a value of true';
}


if(!$c)
{
	echo 'Negated variable $c has a value of true';
}
elseif($c && is_bool($c))
{
	echo 'The variable $ c is the type Boolean and has a value of true';
}


if($d == 2)
{
	echo '$d is equal to 1';
}
else
{
	echo '$d not equal 1';
}	


?>