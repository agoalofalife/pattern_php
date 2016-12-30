<?php
namespace Pattern\Behavioral\ChainOfResponsibilities;


interface ContractJob
{
    public function make();
    public function getCost();
}