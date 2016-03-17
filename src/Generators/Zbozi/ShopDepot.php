<?php

namespace Mk\Feed\Generators\Zbozi;

use Mk, Nette;

class ShopDepot extends Nette\Object {

    private $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

}
