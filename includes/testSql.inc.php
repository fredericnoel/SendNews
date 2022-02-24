<?php


$testSql = new Sql();


$arrayParam = array();

// array_push($arrayParam, array(':email', 'toto@gmail.com', PDO::PARAM_STR_CHAR));
// array_push($arrayParam, array(':name', 'DUPONT', PDO::PARAM_STR_CHAR));
// array_push($arrayParam, array(':firstname', 'Michel', PDO::PARAM_STR_CHAR));

array_push($arrayParam, array(':email', 'toto@gmail.com'));
array_push($arrayParam, array(':name', 'DUPONT'));
array_push($arrayParam, array(':firstname', 'Michel'));


$queryInsertForm = "INSERT INTO T_USERS (USENAME, USEFIRSTNAME) VALUES (:name, :firstname)";

$testSql->insertionForm($queryInsertForm, $arrayParam);
