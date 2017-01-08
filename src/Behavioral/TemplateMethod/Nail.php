<?php


namespace Pattern\Behavioral\TemplateMethod;


class Nail extends AbstractFactory
{
    function loadSchema(string $schema) :void
    {
        echo 'loading schema : ' . $schema . "<br>";
    }

    function makeDetail() : void
    {
        echo 'make detail'. get_class() . "<br>";
    }

     function getDetail() : void
     {
         echo 'get ' . get_class() . "<br>";
     }
}