<?php

namespace Mk\Feed\Generators\Google;

use Mk, Nette;
use Mk\Feed\Generators\BaseItem;

/**
 * Class Item
 * @author Martin Knor <martin.knor@gmail.com>
 * @package Mk\Feed\Generators\Google
 */
class Item extends BaseItem {

    CONST CONDITION_NEW = 'new',
        CONDITION_REFURBISHED = 'refurbished',
        CONDITION_USED = 'used',
        
        AVAILABILITY_PREORDER = 'preorder',
        AVAILABILITY_IN_STOCK = 'in stock',
        AVAILABILITY_OUT_OF_STOCK = 'out of stock';

    static $conditions = [
        self::CONDITION_NEW,
        self::CONDITION_REFURBISHED,
        self::CONDITION_USED,
    ];

    static $availabilities = [
        self::AVAILABILITY_PREORDER,
        self::AVAILABILITY_IN_STOCK,
        self::AVAILABILITY_OUT_OF_STOCK,
    ];

    /** @var string @required */
    protected $id;

    /** @var string @required */
    protected $title;

    /** @var string @required */
    protected $description;

    /** @var string|null */
    protected $googleProductCategory;

    /** @var ProductType[] */
    protected $productTypes = [];

    /**  @var string @required */
    protected $link;

    /**  @var string|null */
    protected $mobileLink;

    /** @var Image[] */
    protected $images = [];

    /** @var string|null */
    protected $condition = self::CONDITION_NEW;

    /** @var string @required */
    protected $availability = self::AVAILABILITY_IN_STOCK;

    /** @var \DateTime|null */
    protected $availabilityDate;
    
    /** @var string @required */
    protected $price;
    
    /** @var string */
    protected $salePrice;
    
    /** @var string */
    protected $salePriceEffectiveDate;
    
    /** @var int */
    protected $gtin;
    
    /** @var string */
    protected $mpn;
    
    /** @var string */
    protected $brand;

    /** @var bool */
    protected $identifierExists;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Item
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * @return Item
     */
    public function setTitle($title)
    {
        $this->title = $title;

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
        $this->description = $description;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getGoogleProductCategory()
    {
        return $this->googleProductCategory;
    }

    /**
     * @param null|string $googleProductCategory
     * @return Item
     */
    public function setGoogleProductCategory($googleProductCategory)
    {
        $this->googleProductCategory = $googleProductCategory;

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
     * @return Item
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getMobileLink()
    {
        return $this->mobileLink;
    }

    /**
     * @param null|string $mobileLink
     * @return Item
     */
    public function setMobileLink($mobileLink)
    {
        $this->mobileLink = $mobileLink;

        return $this;
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string $price
     * @return Item
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return string
     */
    public function getSalePrice()
    {
        return $this->salePrice;
    }

    /**
     * @param string $salePrice
     * @return Item
     */
    public function setSalePrice($salePrice)
    {
        $this->salePrice = $salePrice;

        return $this;
    }

    /**
     * @return string
     */
    public function getSalePriceEffectiveDate()
    {
        return $this->salePriceEffectiveDate;
    }

    /**
     * @param string $salePriceEffectiveDate
     * @return Item
     */
    public function setSalePriceEffectiveDate($salePriceEffectiveDate)
    {
        $this->salePriceEffectiveDate = $salePriceEffectiveDate;

        return $this;
    }

    /**
     * @return int
     */
    public function getGtin()
    {
        return $this->gtin;
    }

    /**
     * @param int $gtin
     * @return Item
     */
    public function setGtin($gtin)
    {
        $this->gtin = $gtin;

        return $this;
    }

    /**
     * @return string
     */
    public function getMpn()
    {
        return $this->mpn;
    }

    /**
     * @param string $mpn
     * @return Item
     */
    public function setMpn($mpn)
    {
        $this->mpn = $mpn;

        return $this;
    }

    /**
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     * @return Item
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isIdentifierExists()
    {
        return $this->identifierExists;
    }
    
    /**
     * @param boolean $identifierExists
     * @return Item
     */
    public function setIdentifierExists($identifierExists)
    {
        $this->identifierExists = $identifierExists;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getAvailabilityDate()
    {
        return $this->availabilityDate instanceof \DateTime ? $this->availabilityDate->format('c') : $this->availabilityDate;;
    }

    /**
     * @param \DateTime|null $availabilityDate
     * @return Item
     */
    public function setAvailabilityDate(\DateTime $availabilityDate = null)
    {
        $this->availabilityDate = $availabilityDate;

        return $this;
    }

    /**
     * @return float
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * @param float $availability
     * @return Item
     */
    public function setAvailability($availability)
    {
        if (!in_array($availability, self::$availabilities)) {
            throw new \InvalidArgumentException("Availability with id $availability doesn\t exist");
        }
        $this->availability = $availability;

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

    public function addProductType($text)
    {
        $this->productTypes[] = new ProductType($text);

        return $this;
    }

    /**
     * @return ProductType[]
     */
    public function getProductTypes()
    {
        return $this->productTypes;
    }

    /**
     * @return null|string
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * @param null|string $condition
     * @return Item
     */
    public function setCondition($condition)
    {
        if (!in_array($condition, self::$conditions)) {
            throw new \InvalidArgumentException("Condition with id $condition doesn\t exist");
        }
        $this->condition = $condition;

        return $this;
    }

    /**
     * @return Image[]
     */
    public function getImages()
    {
        return $this->images;
    }

}
