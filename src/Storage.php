<?php

namespace Mk\Feed;

use Mk,
    Latte;

/**
 * Class Storage
 * @author Martin Knor <martin.knor@gmail.com>
 * @package Mk\Feed
 */
class Storage implements IStorage {
    /** @var */
    private $dir;

    /**
     * Storage constructor.
     * @param $dir
     */
    function __construct($dir)
    {
        $this->dir = $dir;
    }

    /**
     * @param $filename
     * @param $content
     */
    public function save($filename, $content)
    {
        file_put_contents(realpath($this->dir) . DIRECTORY_SEPARATOR . $filename, $this->formatXml($content));
    }

    /**
     * @param $xml
     * @return string
     */
    protected function formatXml($xml)
    {
        $dom = new \DOMDocument('1.0');
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;
        $dom->loadXML($xml);

        return $dom->saveXML();
    }
}
