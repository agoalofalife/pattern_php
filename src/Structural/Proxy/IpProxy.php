<?php

namespace Pattern\Structural\Proxy;


class IpProxy extends Ip
{
    public function __call(string $method, array $args)
    {
        if ( method_exists($this, $method) ) {
            return $this->$method($args);
        }
        throw new \Exception('No exist method!!');
    }

    public function response()
    {
        $sapi = php_sapi_name();

        if ( $sapi == 'cli')
        {
            return parent::response();
        } else {
            echo 'type not cli!';
        }
    }
}