<?php
namespace Pattern\Behavioral\Iterator;

// Abstract warehouse with storage subject
class Warehouse implements \Iterator,\Countable
{
    protected $subjects = [];

    public function addSubject(Subject $subjects)
    {
        $this->subjects[] = $subjects;
    }

    public function removeSubject(Subject $sub)
    {
        foreach ($this->subjects as $key => $subject) {
            if ($subject->getId() === $sub->getId()) {
                unset($this->subjects[$key]);
            }
        }
        $this->subjects  = array_values($this->subjects );
    }

    public function current() : Subject
    {
        return current($this->subjects);
    }

    public function count(): int
    {
        return count($this->subjects);
    }
    public function next()
    {
        next($this->subjects);
    }

    public function key()
    {
        return key($this->subjects);
    }

    public function valid()
    {
        return isset($this->subjects[$this->key()]);
    }

    public function rewind()
    {
        reset($this->subjects);
    }
}