<?php
use Pattern\Behavioral\Command\{
    Game,
    Invoker,
    StartGameCommand
};

class CommandTest extends PHPUnit\Framework\TestCase
{
    public function testCommand()
    {
        $invoker = new Invoker();
        $game    = new Game();

        $invoker->setCommand(new StartGameCommand($game));
        $this->assertEquals($invoker->run(), 'start game ...');

    }
}