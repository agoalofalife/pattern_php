<?php


namespace Pattern\Behavioral\Visitor;



class VisitorCheckFavorite implements VisitorInterface
{
    private $favorite = ['Latte', 'Cappuccino'];

    public function visit(Coffee $coffee) : bool
    {
        $split     = preg_split("/\\\/", get_class($coffee));
        $nameClass = array_pop($split);

        return in_array($nameClass, $this->favorite);
    }
}