<?php

namespace Mk\Feed\Generators\Heureka;

use Nette\Caching\Cache;


class CategoriesHelper {

    CONST CATEGORY_URL = 'http://www.heureka.cz/direct/xml-export/shops/heureka-sekce.xml';

    /** @var \Nette\Caching\Cache */
    private $cache;

    function __construct(\Nette\Caching\IStorage $storage = null)
    {
        if ($storage) {
            $this->cache = new Cache($storage, __CLASS__);
        }
    }

    public function getCategories()
    {
        $categories = [];
        if (!$this->cache || !($categories = $this->cache->load('categories'))) {
            $xml = file_get_contents(self::CATEGORY_URL);
            $dom = new \DOMDocument();

            $dom->loadXML($xml);
            $xpath = new \DOMXPath($dom);
            /** @var \DOMElement[] $_categories */
            $_categories = $xpath->query(".//CATEGORY");

            foreach ($_categories as $category) {
                $id = isset($xpath->query($category->getNodePath().'/CATEGORY_ID')[0]) ? (int)$xpath->query($category->getNodePath().'/CATEGORY_ID')[0]->nodeValue : null;
                $_cat = isset($xpath->query($category->getNodePath().'/CATEGORY_FULLNAME')[0]) ? (string)$xpath->query($category->getNodePath().'/CATEGORY_FULLNAME')[0]->nodeValue : null;
                if($id && $_cat) {
                    $_cat = str_replace('Heureka.cz | ', '', $_cat);
                    $categories[$id] = $_cat;
                }
            }

            asort($categories);

            if ($this->cache) {
                $this->cache->save('categories', $categories);
            }
        }

        return $categories;
    }
}