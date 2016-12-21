<?php
namespace Pattern\Creational\SimpleFactory;

/**
 * we have a factory of dishes
 * passing inside a simple factory, we can get our meals
 * to add new functionality easily
 * but our simple factory
 * evil lies the logic of creating the object
 * therefore, this pattern is considered anti patterns
 */
$myFavorite = new FactoryDishes( new SimpleFactory());
echo $myFavorite->produceDishes('PekingDuck')->getSmell();
