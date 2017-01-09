<?php


use Pattern\Structural\Proxy\IpProxy;

class ProxyTest  extends PHPUnit\Framework\TestCase
{
    public function testProxy()
    {
        $proxy = new IpProxy('5.212.21.21', 'Jonh');
        $this->assertTrue($proxy->response());
    }
}