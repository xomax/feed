<?php

namespace Mk\Feed\Generators\HledejCeny;

use Mk, Nette;
use Mk\Feed\Generators\BaseItem;

/**
 * Class Item
 * @author Tom Hnatovsky <tom@hnatovsky.cz>
 * @package Mk\Feed\Generators\HledejCeny
 * @see http://www.hledejceny.cz/data/obchody/moznosti_optimalizace_na_HLEDEJCENY.cz.pdf Documentation
 */
class Item extends BaseItem {

	/** @var string @required */
	protected $product;

	/**  @var string @required */
	protected $url;

	/** @var string @required */
    protected $description;

	/** @var float @required */
	protected $priceVat;

	/** @var string @required */
	protected $imgUrl;

	/** @var int @required */
	protected $deliveryDate;

	/** @var string|null */
	protected $manufacturer;

	/** @var string|null */
    protected $categoryText;

	/** @var float|null */
	protected $deliveryCost;

	/** @var string|null */
	protected $id;

	/** @var string|null */
	protected $ean;

	/** @var string|null */
	protected $productNo;

	/** @var string|null */
	protected $warranty;

	/** @var float */
	protected $dues = 0;

	/** @var float */
	protected $toll = 0;

	/** @var int */
	protected $noImport = 0;

	/** @var Parameter[] */
	protected $parameters = array();

	/**
	 * @return string
	 */
	public function getProduct ()
	{
		return $this->product;
	}

	/**
	 * @param string $product
	 * @return Item
	 */
	public function setProduct ( $product )
	{
		$this->product = $product;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getUrl ()
	{
		return $this->url;
	}

	/**
	 * @param string $url
	 * @return Item
	 */
	public function setUrl ( $url )
	{
		$this->url = $url;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDescription ()
	{
		return $this->description;
	}

	/**
	 * @param string $description
	 * @return Item
	 */
	public function setDescription ( $description )
	{
		$this->description = $description;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getPriceVat ()
	{
		return $this->priceVat;
	}

	/**
	 * @param float $priceVat
	 * @return Item
	 */
	public function setPriceVat ( $priceVat )
	{
		$this->priceVat = $priceVat;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getImgUrl ()
	{
		return $this->imgUrl;
	}

	/**
	 * @param string $imgUrl
	 * @return Item
	 */
	public function setImgUrl ( $imgUrl )
	{
		$this->imgUrl = $imgUrl;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getManufacturer ()
	{
		return $this->manufacturer;
	}

	/**
	 * @param string $manufacturer
	 * @return Item
	 */
	public function setManufacturer ( $manufacturer )
	{
		$this->manufacturer = $manufacturer;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getDeliveryDate ()
	{
		return $this->deliveryDate;
	}

	/**
	 * @param int $deliveryDate
	 * @return Item
	 */
	public function setDeliveryDate ( $deliveryDate )
	{
		$this->deliveryDate = $deliveryDate;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getCategoryText ()
	{
		return $this->categoryText;
	}

	/**
	 * @param null|string $categoryText
	 * @return Item
	 */
	public function setCategoryText ( $categoryText )
	{
		$this->categoryText = $categoryText;
		return $this;
	}

	/**
	 * @return float|null
	 */
	public function getDeliveryCost ()
	{
		return $this->deliveryCost;
	}

	/**
	 * @param float|null $deliveryCost
	 * @return Item
	 */
	public function setDeliveryCost ( $deliveryCost )
	{
		$this->deliveryCost = $deliveryCost;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getId ()
	{
		return $this->id;
	}

	/**
	 * @param null|string $id
	 * @return Item
	 */
	public function setId ( $id )
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getEan ()
	{
		return $this->ean;
	}

	/**
	 * @param null|string $ean
	 * @return Item
	 */
	public function setEan ( $ean )
	{
		$this->ean = $ean;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getProductNo ()
	{
		return $this->productNo;
	}

	/**
	 * @param null|string $productNo
	 * @return Item
	 */
	public function setProductNo ( $productNo )
	{
		$this->productNo = $productNo;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getWarranty ()
	{
		return $this->warranty;
	}

	/**
	 * @param null|string $warranty
	 * @return Item
	 */
	public function setWarranty ( $warranty )
	{
		$this->warranty = $warranty;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getDues ()
	{
		return $this->dues;
	}

	/**
	 * @param float $dues
	 * @return Item
	 */
	public function setDues ( $dues )
	{
		$this->dues = $dues;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getToll ()
	{
		return $this->toll;
	}

	/**
	 * @param float $toll
	 * @return Item
	 */
	public function setToll ( $toll )
	{
		$this->toll = (float)$toll;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getNoImport ()
	{
		return $this->noImport;
	}

	/**
	 * @param int $noImport
	 * @return Item
	 */
	public function setNoImport ( $noImport )
	{
		$this->noImport = $noImport == 1 ? 1 : 0;
		return $this;
	}

	/**
	 * @return Parameter[]
	 */
	public function getParameters ()
	{
		return $this->parameters;
	}

	/**
	 * @param $name
	 * @param $val
	 * @return Item
	 */
	public function addParameter ($name, $val)
	{
		$this->parameters[] = new Parameter($name, $val);

		return $this;
	}

}
