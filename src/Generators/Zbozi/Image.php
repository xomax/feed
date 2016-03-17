<?php

namespace Mk\Feed\Generators\Zbozi;

use Mk, Nette;

class Image extends Nette\Object {
    private $url;

    /**
     * Image constructor.
     * @param $url
     */
    public function __construct($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

}
