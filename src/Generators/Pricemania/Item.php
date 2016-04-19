<?php

namespace Mk\Feed\Generators\Pricemania;

use Mk, Nette;
use Mk\Feed\Generators\BaseItem;

/**
 * Class Item
 * @author Tom Hnatovsky <tom@hnatovsky.cz>
 * @package Mk\Feed\Generators\Pricemania
 * @see http://www.hledejceny.cz/data/obchody/moznosti_optimalizace_na_HLEDEJCENY.cz.pdf Documentation
 */
class Item extends BaseItem {

	/** @var string @required */
	protected $name;

	/** @var string @required */
	protected $description;

	/** @var float @required */
	protected $price;

	/** @var string @required */
	protected $category;

	/** @var string @required */
	protected $manufacturer;

	/**  @var string @required */
	protected $url;

	/** @var string @required */
	protected $picture;

	/** @var float @required */
	protected $shipping;

	/** @var int @required */
	protected $availability;

	/** @var string|null */
	protected $id;

	/** @var string|null */
	protected $ean;

	/** @var string|null */
	protected $part_number;

	/** @var Parameter[] */
	protected $parameters = array();

	/**
	 * @return string
	 */
	public function getName () {
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return Item
	 */
	public function setName ( $name ) {
		$this->name = $name;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDescription () {
		return $this->description;
	}

	/**
	 * @param string $description
	 * @return Item
	 */
	public function setDescription ( $description ) {
		$this->description = $description;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getPrice () {
		return $this->price;
	}

	/**
	 * @param float $price
	 * @return Item
	 */
	public function setPrice ( $price ) {
		$this->price = $price;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCategory () {
		return $this->category;
	}

	/**
	 * @param string $category
	 * @return Item
	 */
	public function setCategory ( $category ) {
		$this->category = $category;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getManufacturer () {
		return $this->manufacturer;
	}

	/**
	 * @param string $manufacturer
	 * @return Item
	 */
	public function setManufacturer ( $manufacturer ) {
		$this->manufacturer = $manufacturer;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getUrl () {
		return $this->url;
	}

	/**
	 * @param string $url
	 * @return Item
	 */
	public function setUrl ( $url ) {
		$this->url = $url;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPicture () {
		return $this->picture;
	}

	/**
	 * @param string $picture
	 * @return Item
	 */
	public function setPicture ( $picture ) {
		$this->picture = $picture;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getShipping () {
		return $this->shipping;
	}

	/**
	 * @param float $shipping
	 * @return Item
	 */
	public function setShipping ( $shipping ) {
		$this->shipping = (float)$shipping;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getAvailability () {
		return $this->availability;
	}

	/**
	 * @param int $availability
	 * @return Item
	 */
	public function setAvailability ( $availability ) {
		$this->availability = (int)$availability;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getId () {
		return $this->id;
	}

	/**
	 * @param null|string $id
	 * @return Item
	 */
	public function setId ( $id ) {
		$this->id = $id;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getEan () {
		return $this->ean;
	}

	/**
	 * @param null|string $ean
	 * @return Item
	 */
	public function setEan ( $ean ) {
		$this->ean = $ean;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getPartNumber () {
		return $this->part_number;
	}

	/**
	 * @param null|string $part_number
	 * @return Item
	 */
	public function setPartNumber ( $part_number ) {
		$this->part_number = $part_number;
		return $this;
	}

	/**
	 * @return Parameter[]
	 */
	public function getParameters () {
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
