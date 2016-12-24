<?php
namespace Pattern\Creational\Pool;

/**
 * Class Pool
 * @package Pattern\Creational\Pool
 *
 */
class Pool implements \Countable
{
    // temp object
    private $temp;

    // object in processing
    private $inProcess;

    /**
     * Get to of pool
     * @param PollDependence $dependence
     * @return PollDependence
     */
    public function get( PollDependence $dependence ) : PollDependence
    {
        $hash = $this->generateHash($dependence);

        if ( isset( $this->temp[$hash] ) )
        {
            unset($this->temp[$hash]);
            return $this->inProcess[$hash] = $dependence;
        } else {
           return  $this->inProcess[$hash] = $dependence;
        }
    }

    public function freeze( PollDependence $dependence ) : void
    {
        $hash = $this->generateHash($dependence);

        if (isset($this->inProcess[$hash])) {
            unset($this->inProcess[$hash]);
            $this->temp[$hash] = $dependence;
        }
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->temp) + count($this->inProcess);
    }

    /**
     * @param PollDependence $dependence
     * @return string
     */
    private function generateHash( PollDependence $dependence ) : string
    {
       return spl_object_hash($dependence);
   }
}