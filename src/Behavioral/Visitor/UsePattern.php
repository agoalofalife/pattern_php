<?php

use Pattern\Behavioral\Visitor\{
    Latte, VisitorCheckFavorite, VisitorLimitSugar
};

$limit         = new VisitorLimitSugar();
$checkFavorite = new VisitorCheckFavorite();


$latte = new Latte();

var_dump($latte->accept($checkFavorite));
var_dump($latte->accept($limit));