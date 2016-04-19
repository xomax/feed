<?php

namespace Mk\Feed\Generators\HledejCeny;

use Mk, Nette;

/**
 * Class Parameter
 * @author Tom Hnatovsky <tom@hnatovsky.cz>
 * @package Mk\Feed\Generators\HledejCeny
 */
class Parameter extends Nette\Object {

    protected $name;
    protected $value;

    /**
     * Parameter constructor.
     * @param $name
     * @param $value
     */
    public function __construct($name, $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

}
