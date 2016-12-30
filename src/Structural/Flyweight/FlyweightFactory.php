<?php
namespace Pattern\Structural\Flyweight;

// Factory Products
class FlyweightFactory implements \Countable
{
    // already created objects
    protected $pool;

    //  can do injections with storage list available factories
    // it's just example
    protected $storage = [
        CarrotsFlyweight::class,
        CucumberFlyweight::class
    ];

    public function get( string $type ) : IProduct
    {

        if ( !isset($this->pool[$type]) ) {
            $keyProduct = array_search( $type, $this->storage);

            if ( $keyProduct !== false )
            {
                $this->pool[$type] = new $this->storage[$keyProduct];
            }

        }
        return $this->pool[$type];
    }

    //get count All objects storage
    public function count()
    {
        return count($this->pool);
    }

}