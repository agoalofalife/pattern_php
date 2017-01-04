<?php
namespace Pattern\Behavioral\Observer;


class MatherSubject implements  \SplSubject
{
    private $observers;

    private $food;

    public function __construct()
    {
        /*
         * @link http://www.php.net/SplObjectStorage
         */
        $this->observers = new \SplObjectStorage();
    }

    public function attach(\SplObserver $observer) : void
    {
        $this->observers->attach($observer);
    }

    public function detach(\SplObserver $observer) : void
    {
        $this->observers->detach($observer);
    }

    public function notify() : void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    // to cook some food
    public function toCook( string $food) : void
    {
        $this->food = $food;
    }

    public function getFood() : string
    {
        return $this->food;
    }
}