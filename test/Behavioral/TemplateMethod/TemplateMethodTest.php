<?php


use Pattern\Behavioral\TemplateMethod\Nail;

class TemplateMethodTest extends PHPUnit\Framework\TestCase
{
    public function testTemplateMethod()
    {
        $NAIL = new Nail();
        $NAIL->builderDetail('SDR34');
        $this->expectOutputString("loading schema : SDR34<br>make detailPattern\Behavioral\TemplateMethod\Nail<br>get Pattern\Behavioral\TemplateMethod\Nail<br>");
    }
}