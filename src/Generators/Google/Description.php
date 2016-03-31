<?php

namespace Mk\Feed\Generators\Google;

use Mk\Feed\Generators\BaseItem;

/**
 * Google Atom Feed Description Item
 * @author Tom Hnatovsky <tom@hnatovsky.cz>
 * @package Mk\Feed\Generators\Google
 */
class Description extends BaseItem {

    /** @var string @required */
    protected $title;

    /** @var string */
    protected $id;

    /** @var string @required */
    protected $link;

    /** @var string */
    protected $summary;

    /**  @var string @required */
    protected $updated;

    /**
     * Feed Description constructor
     */
    public function __construct()
    {
        return $this->updated = date('c');
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Description
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Description
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param string $link
     * @return Description
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param string $summary
     * @return Description
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * @return string
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param string $updated
     * @return Description
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

}
