<?php
namespace Pattern\Behavioral\Command;


class Invoker
{
    private $command;

    public function setCommand(ContractCommand $cmd)
    {
        $this->command = $cmd;
    }

    public function run()
    {
        return $this->command->execute();
    }
}