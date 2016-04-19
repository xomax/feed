<?php

namespace Mk\Feed\Generators;


use Mk, Nette;

/**
 * Class BaseParameter
 * @author Tom Hnatovsky <tom@hnatovsky.cz>
 * @package Mk\Feed\Generators
 */
abstract class BaseParameter extends Nette\Object
{
	protected $name;
	protected $value;

	/**
	 * Parameter constructor.
	 * @param $name
	 * @param $value
	 */
	public function __construct($name, $value)
	{
		$this->name = $name;
		$this->value = $value;
	}

	/**
	 * @return mixed
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @return mixed
	 */
	public function getValue()
	{
		return $this->value;
	}

}