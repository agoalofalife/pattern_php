<?php
namespace Pattern\Behavioral\Iterator;


interface Subject
{
    public function getWeight();

    public function getId();

    public function generateId();
}