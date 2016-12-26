<?php
namespace Pattern\Structural\Adapter;

/**
 * Class AdapterUSB
 * @package Pattern\Structural\Adapter
 */
class AdapterUSB implements ContractUSB 
{
    protected $usb;

    public function __construct(ContractMiniUSB $contractMiniUSB)
    {
        $this->usb = $contractMiniUSB;
    }

    public function connect() : string
    {
        return $this->usb->include();
    }
}