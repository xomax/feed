<?php
namespace Mk\Feed\Generators\Pricemania;

use Mk\Feed\Generators\BaseGenerator;

/**
 * Class PricemaniaGenerator
 * @author Tom Hnatovsky <tom@hnatovsky.cz>
 * @package Mk\Feed\Generators
 * @see www.hledejceny.cz/napoveda/pro-internetove-obchody/ Documentation
 */
abstract class Generator extends BaseGenerator {

    /**
     * @param $name
     * @return string
     */
    protected function getTemplate($name)
    {
        $reflection = new \ReflectionClass(__CLASS__);
        return dirname($reflection->getFileName()) . '/latte/' . $name . '.latte';
    }

}