<?php

namespace Mk\Feed\Generators\Heureka;

use Mk, Nette;
use Mk\Feed\Generators\BaseItem;

/**
 * Class Item
 * @author Martin Knor <martin.knor@gmail.com>
 * @package Mk\Feed\Generators\Heureka
 * @see http://sluzby.heureka.cz/napoveda/xml-feed/ Documentation
 */
class Item extends BaseItem {

    /** @var string @required */
    protected $itemId;

    /** @var string @required */
    protected $productName;

    /** @var string|null */
    protected $product;

    /** @var string @required */
    protected $description;

    /**  @var string @required */
    protected $url;

    /** @var Image[] */
    protected $images = array();

    /** @var string|null */
    protected $videoUrl;

    /** @var float @required */
    protected $priceVat;

    /** @var string|null */
    protected $itemType;

    /** @var Parameter[] */
    protected $parameters = array();

    /** @var string|null */
    protected $manufacturer;

    /** @var string|null */
    protected $categoryText;

    /** @var string|null */
    protected $ean;

    /** @var string|null */
    protected $isbn;

    /** @var float|null */
    protected $heurekaCpc;

    /** @var \DateTime|int @required */
    protected $deliveryDate;

    /** @var Delivery[] */
    protected $deliveries = array();

    /** @var string|null */
    protected $itemGroupId;

    /** @var array */
    protected $accessories = array();

    /** @var float */
    protected $dues = 0;

    /** @var Gift[] */
    protected $gifts = array();

    /**
     * @return float
     */
    public function getDues()
    {
        return $this->dues;
    }

    /**
     * @param float $dues
     * @return Item
     */
    public function setDues($dues)
    {
        $this->dues = (float)$dues;

        return $this;
    }

    /**
     * @return string
     */
    public function getVideoUrl()
    {
        return $this->videoUrl;
    }

    /**
     * @param string $videoUrl
     * @return $this
     */
    public function setVideoUrl($videoUrl)
    {
        $this->videoUrl = $videoUrl;

        return $this;
    }

    /**
     * @param $url
     * @return $this
     */
    public function addImage($url)
    {
        $this->images[] = new Image($url);

        return $this;
    }

    /**
     * @param $id
     * @param $price
     * @param null $priceCod
     * @return $this
     */
    public function addDelivery($id, $price, $priceCod = null)
    {
        $this->deliveries[] = new Delivery($id, $price, $priceCod);

        return $this;
    }

    /**
     * @return Delivery[]
     */
    public function getDeliveries()
    {
        return $this->deliveries;
    }

    /**
     * @param $name
     * @param $val
     * @return Item
     */
    public function addParameter($name, $val)
    {
        $this->parameters[] = new Parameter($name, $val);

        return $this;
    }

    /**
     * @param $name
     * @return $this
     */
    public function addGift($name)
    {
        $this->gifts[] = new Gift($name);

        return $this;
    }

    /**
     * @param $itemId
     * @return $this
     */
    public function addAccessory($itemId)
    {
        $this->accessories[] = $itemId;

        return $this;
    }

    /**
     * @return array
     */
    public function getAccessories()
    {
        return $this->accessories;
    }

    /**
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param string $productName
     * @return Item
     */
    public function setProductName($productName)
    {
        $this->productName = (string)$productName;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Item
     */
    public function setDescription($description)
    {
        $this->description = (string)$description;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return Item
     */
    public function setUrl($url)
    {
        $this->url = (string)$url;

        return $this;
    }

    /**
     * @return float
     */
    public function getPriceVat()
    {
        return $this->priceVat;
    }

    /**
     * @param float $priceVat
     * @return Item
     */
    public function setPriceVat($priceVat)
    {
        $this->priceVat = (float)$priceVat;

        return $this;
    }

    /**
     * @return int|string
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate instanceof \DateTime ? $this->deliveryDate->format('Y-m-d') : $this->deliveryDate;
    }

    /**
     * @param int|\DateTime $deliveryDate
     * @return Item
     */
    public function setDeliveryDate($deliveryDate)
    {
        if (!is_int($deliveryDate) && !($deliveryDate instanceof \DateTime)) {
            throw new \InvalidArgumentException("Delivery date must be integer or DateTime");
        }
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param null|string $itemId
     * @return Item
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * @param null|string $ean
     * @return Item
     */
    public function setEan($ean)
    {
        $this->ean = $ean;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * @param null|string $isbn
     * @return Item
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getItemGroupId()
    {
        return $this->itemGroupId;
    }

    /**
     * @param null|string $itemGroupId
     * @return Item
     */
    public function setItemGroupId($itemGroupId)
    {
        $this->itemGroupId = $itemGroupId;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * @param null|string $manufacturer
     * @return Item
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCategoryText()
    {
        return $this->categoryText;
    }

    /**
     * @param null|string $categoryText
     * @return Item
     */
    public function setCategoryText($categoryText)
    {
        $this->categoryText = $categoryText;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param null|string $product
     * @return Item
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getItemType()
    {
        return $this->itemType;
    }

    /**
     * @return Image[]
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @return Gift[]
     */
    public function getGifts()
    {
        return $this->gifts;
    }

    /**
     * @return Parameter[]
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @return null|string
     */
    public function getHeurekaCpc()
    {
        return $this->heurekaCpc;
    }

    /**
     * @param null|string $heurekaCpc
     * @return $this
     */
    public function setHeurekaCpc($heurekaCpc)
    {
        $this->heurekaCpc = $heurekaCpc;

        return $this;
    }

}
