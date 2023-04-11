<?php

$lowercase_characters = range('a','z');
$uppercase_characters = range('A', 'Z');
$number_characters = range('0', '9');
$special_characters = ['~','!','@','#','$','*','%','`','?','[',']','{','}',';','<','>','?','.',',','_','-','(',')'];

$random_characters = array_merge($lowercase_characters, $uppercase_characters, $number_characters, $special_characters);