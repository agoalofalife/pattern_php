<?php
namespace Pattern\Structural\Adapter;

/**
 * Class MiniUSB
 * @package Pattern\Structural\Adapter
 */
class MiniUSB implements ContractMiniUSB 
{
    public function __construct()
    {
        
    }

    public function include() : string
    {
        return 'include ...';
    }
}