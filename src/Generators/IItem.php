<?php
/**
 * Created by PhpStorm.
 * User: jam
 * Date: 27.1.15
 * Time: 19:28
 */

namespace Mk\Feed\Generators;


use Mk;

interface IItem
{

	/**
	 * @return bool Return true if item is valid
     */
	public function validate();
}
