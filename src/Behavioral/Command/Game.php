<?php
namespace Pattern\Behavioral\Command;

/**
 * Class Game
 * @package Pattern\Behavioral\Command
 */
class Game
{
    public function start() : string
    {
      return 'start game ...';
    }

    public function end() : string
    {
        return 'game the end ...';
    }

    public function reset() : string
    {
        return 'reset game ...';
    }
}