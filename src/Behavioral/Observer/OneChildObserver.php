<?php
namespace Pattern\Behavioral\Observer;


class OneChildObserver implements \SplObserver
{
    public function update(\SplSubject $subject) : void
    {
        $food = $subject->getFood();
        echo get_class() . " get $food <br>";
    }
}