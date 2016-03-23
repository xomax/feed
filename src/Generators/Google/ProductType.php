<?php

namespace Mk\Feed\Generators\Google;

use Mk;
use Nette;

/**
 * Class ProductType
 * @author Martin Knor <martin.knor@gmail.com>
 * @package Mk\Feed\Generators\Google
 */
class ProductType extends Nette\Object {
   

    /** @var string */
    protected $text;

    /**
     * ProductType constructor.
     * @param $text
     */
    public function __construct($text)
    {
       
        $this->text = (string)$text;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

}
