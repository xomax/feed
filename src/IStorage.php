<?php
/**
 * Created by PhpStorm.
 * User: jam
 * Date: 27.1.15
 * Time: 19:30
 */

namespace Mk\Feed;


use Latte;
use Mk;

interface IStorage
{
	public function __construct($dir);
	public function save($fileName, $content);
}
