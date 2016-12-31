<?php

use Pattern\Behavioral\Command\{
    Game,
    Invoker,
    StartGameCommand
};

$invoker = new Invoker();
$game    = new Game();


$invoker->setCommand(new StartGameCommand($game));
echo $invoker->run();