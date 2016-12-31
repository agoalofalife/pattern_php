<?php
namespace Pattern\Behavioral\Command;


class StartGameCommand implements ContractCommand
{
    protected $game;

    public function __construct(Game $game)
    {
        $this->game = $game;
    }
    public function execute() : string
    {
        return $this->game->start();
    }
}