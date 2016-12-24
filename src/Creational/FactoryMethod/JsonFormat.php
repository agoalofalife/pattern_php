<?php
namespace Pattern\Creational\FactoryMethod;

/**
 * Class JsonFormat
 * Concrete format
 * @package Pattern\Creational\FactoryMethod
 */
class JsonFormat extends FormatData 
{
    protected $data;

    public function loadData( $data ) : JsonFormat
    {
        $this->data = $data;
        return $this;
    }
    public function format() : string
    {
        return json_encode( $this->data );
    }
}