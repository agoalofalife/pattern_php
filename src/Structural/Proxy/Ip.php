<?php
namespace Pattern\Structural\Proxy;

class Ip implements IpContract
{
    protected $owner;
    protected $number;

    public function __construct( $number, $owner)
    {
        $this->number = $number;
        $this->owner  = $owner;
    }

    public function getOwner()
    {
        return $this->owner;
    }

    public function response() : bool
    {
        echo  'Load....' . ' our address ' . $this->number;
        sleep(3);
        echo  "\n success!";
        return true;
    }
}